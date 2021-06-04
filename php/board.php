<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <link rel=stylesheet type="text/css" href="style.css">
  <script type="text/javascript">
    function check(){
        if(document.boardForm.author.value.length==0){
            alert("作者欄不可留白喔!");
        }
        else if(document.boardForm.content.value.length==0){
            alert("內容欄不可留白喔!");
        }
        else
          boardForm.submit();
    }
  </script>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
      
      //設定每頁顯示幾筆紀錄
      $records_per_page=5;

      //取得要顯示第幾頁的資料，若沒有指定，就設定為第一頁
      if(isset($_GET["page"]))
        $page=$_GET["page"];
      else 
        $page=1;
    
      //建立資料連接
      $link=create_connection();
      
      //執行SQL查詢
      $sql="SELECT * FROM guestbook ORDER BY date DESC";
      $result=execute_sql($link,"gpw",$sql);

      //取得記錄筆數
      $total_records=mysqli_num_rows($result);

      //計算總頁數
      $total_pages=ceil($total_records/$records_per_page);

      //計算本頁第一筆紀錄的序號
      $started_record=$records_per_page*($page-1);

      //將記錄指標移至本頁第一筆的序號
      mysqli_data_seek($result,$started_record);

      //使用$bg陣列儲存顏色
      $bg[0]="#00bfff";
      $bg[1]="#1e90ff";
      $bg[2]="#87cefa";

      echo "<table width='300' align='center' cellspacing='3'>";
      //顯示紀錄
      $j=1;
      while($row=mysqli_fetch_assoc($result) and $j<=$records_per_page){
          echo "<tr bgcolor='".$bg[$j-1]."'>";
          echo "<td>作者:".$row["author"]."<br>";
          echo "時間:".$row["date"]."<hr>";
          echo $row["content"]."</td></tr>";
          $j++;
      }
      echo"</table>";
      
      //產生導覽列
      echo"<p align='center'>";
      if($page>1){
          echo"<a href='board.php?page=".($page-1)."'>上一頁</a>";
      }

      for($i=1;$i<=$total_pages;$i++){
          if($i==$page)
           echo "$i";
          else
           echo "<a href='board.php?page=$i'>$i</a>";
      }

      if($page<$total_pages)
        echo "<a href='board.php?page=".($page+1)."'>下一頁</a>";

      echo "</p>";

      //釋放記憶體空間
      mysqli_free_result($result);

      //關閉資料連接
      mysqli_close($link);
    ?>
    <form name="boardForm"  action="post.php" method="post">
      <table border="0" width="600" align="center" cellspacing="0">
        <tr bgcolor="#0084CA" align="center">
          <td colspan="2">
           <font color="#FFFFFF">請在此出輸入新的留言</font></td>
        </tr>
        <tr bgcolor="#D9F2FF">
           <td width="15%">作者</td>
           <td width="85%"><input name="author" type="text" size="50"></td>
        </tr>
        <tr bgcolor="#D9F2FF">
           <td width="15%">內容</td>
           <td width="85%"><textarea name="content" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="張貼留言" onClick="check()">
            <input type="reset" value="重新輸入">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>