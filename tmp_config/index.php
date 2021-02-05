<?php
  require("/Applications/mampstack-8.0.1-0/apache2/htdocs/config/config.php");
  require("/Applications/mampstack-8.0.1-0/apache2/htdocs/lib/db.php");
  $conn = db_init($config['host'], $config['duser'], $config['dpw'], $config['dname']);
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
      <h1><a href="http://localhost:8080/tmp_config/index.php">Javascript</a></h1>
    </header>

    <nav>
      <ol>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            echo '<li><a href="http://localhost:8080/tmp_config/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
        }
        ?>
      </ol>
    </nav>

    <div class="control">
      <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
      <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
      <a href="http://localhost:8080/tmp_config/write.php">쓰기</a>
    </div>

    <article>
      <?php
        if(empty($_GET['id']) == false){
          $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
          echo strip_tags($row['description'], '<a><h1><h2><h3><h4><ul><ol><li>');
        }
       ?>
    </article>
  </body>

</html>
