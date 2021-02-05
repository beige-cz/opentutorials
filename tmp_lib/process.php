<?php
  require("/Applications/mampstack-8.0.1-0/apache2/htdocs/lib/db.php");
  $conn = db_init("localhost", "root", "alsxm1623", "opentutorials");
  $result = mysqli_query($conn, "SELECT * FROM topic");

  $sql = "INSERT INTO topic (title,description,author,created) VALUES('"
          .$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";
  $result = mysqli_query($conn, $sql);

  header('Location:http://localhost:8080/tmp_lib/index.php');
 ?>
