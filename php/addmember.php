<?php
  require_once("dbtools.inc.php");
  //取得表單資料
  $email=$_POST["email"];
  $account=$_POST["account"];
  $password=$_POST["password"];
  //建立資料庫連結
  $link=create_connection();

  //將使用者帳號account和資料庫的account比對
  $sql="SELECT * FROM member WHERE account='$account'";
  $result=execute_sql($link,"gpw",$sql);

  //若該帳號有人使用,就顯示訊息要求更換帳號並返回上一頁
  if(mysqli_num_rows($result)!=0){
      //釋放記憶體空間
      mysqli_free_result($result);
      echo "<script type='text/javascript'>";
      echo "alert('您所輸入的帳號已有人使用，請使用其他帳號');";
      echo "history.back();";
      echo "</script>";
      
  }
  //否則將寫好的東西寫進資料庫
  else{
    //釋放記憶體空間
    mysqli_free_result($result);

    //將會員資料寫入資料庫
    $sql="INSERT INTO member (email,account,pass) VALUES('$email','$account'
    ,'$password')";
    $result=execute_sql($link,"gpw",$sql);
  }
  //關閉資料連接
  mysqli_close($link);
  ?>
  <!doctype html>
  <html>
      <head>
          <meta charset="utf-8">
          <title>新增帳號成功</title>
      </head>
      <body>
          <p align="center">恭喜您註冊成功!</p>
          <p align="center">請牢記自己的密碼，並<a href="../index.html">登入網站</a></p>
      </body>
  </html>