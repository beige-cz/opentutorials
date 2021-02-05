<?php
  $conn = mysqli_connect("localhost", "root", "alsxm1623");
  mysqli_select_db($conn, "opentutorials");
  $result = mysqli_query($conn, "SELECT * FROM topic");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>자바스크립트 실습</title>
  <link rel="stylesheet" href="http://localhost:8080/tmp_js/style.css">
  </head>

  <body id="target">
    <header>
      <img src="https://lh3.googleusercontent.com/proxy/q-enZpDwiPwsSBvRO41tR1PRhHe4YC14xAjtSwWBANoXCOeXHpfGmgl_2aGZ4PvDVZacNEpGA66_jDoYrUBpjYjTIyhoFK53BZaVl2Npbg" alt="바나나맛우유"/>
      <h1><a href="http://localhost:8080/tmp_mysql/index.php">Javascript</a></h1>
    </header>

    <nav>
      <ol>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            echo '<li><a href="http://localhost:8080/tmp_mysql/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
        }
        ?>
      </ol>
    </nav>

    <div class="control">
      <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
      <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
    </div>

    <article>
      <?php
        if(empty($_GET['id']) == false){
          $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo '<h2>'.$row['title'].'</h2>';
          echo $row['description'];
        }
       ?>
    </article>
  </body>

</html>
