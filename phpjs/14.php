<?php
  $conn = mysqli_connect("localhost", "root", "alsxm1623");
  mysqli_select_db($conn, "opentutorials");
  $sql = "SELECT * FROM user WHERE name='".$_GET['name']."' AND password='".$_GET['password']."'";
  $result = mysqli_query($conn, $sql);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <?php
      $password = $_GET["password"];
      if($result->num_rows=="1"){
        echo "안녕하세요, 회원님!";
      }else {
        echo "누구십니까?";
      }
     ?>

  </body>
</html>
