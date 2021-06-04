<?php
  require_once("dbtools.inc.php");
  header("Content-type:text/html;charset=utf-8");

  //取得表單資料
  $account=$_POST["account"];
  $password=$_POST["password"];
  //建立資料連結
  $link=create_connection();
  //將帳號與密碼和資料庫的紀錄作比對
  $sql="SELECT * FROM member WHERE (account='$account' OR email='$account') AND pass='$password'";
  $result=execute_sql($link,"gpw",$sql);

  //若帳號與密碼錯誤，就顯示對話方塊要求查明後再登入
  if(mysqli_num_rows($result)==0){
      //釋放記憶體空間
      mysqli_free_result($result);
      //關閉資料連接
      mysqli_close($link);
      echo "<script type='text/javascript'>";
      echo "alert('帳號密碼錯誤，請查明後登入');";
      echo "history.back();";
      echo "</script>";
  }
  //否則將資料寫入Cookie，然後導向會員專區網頁
  else{
      

      //取得id欄位
      $id=mysqli_fetch_object($result)->id;

      //釋放記憶體空間
      mysqli_free_result($result);
      //關閉資料連接
      mysqli_close($link);
      
      //將資料寫入Cookie，然後導向到會員專區網頁
      //setcookie("id",$id);
      //setcookie("passed","TRUE");
      //header("location:../product1.php");
      
  }
?>
<!doctype html>
  <html>
      <head>
          <meta charset="utf-8">
          <title>新增帳號成功</title>
      </head>
      <body>
          <p align="center">登入成功</p>
          <p align="center"><a href="../index.html">登入網站</a></p>
      </body>
  </html>
