<?php
 require_once("dbtools.inc.php");

 $author=$_POST["author"];
 $content=$_POST["content"];
 $current_time=date("Y-m-d H:i:s");

 //建立資料連接
 $link=create_connection();
 //執行SQL查詢
 $sql="INSERT INTO guestbook(author,content,date)
       VALUES('$author','$content','$current_time');";

$result=execute_sql($link,"gpw",$sql);
//關閉資料連接
mysqli_close($link);

//重新導向index.php
header("location:board.php");
exit();
?>
