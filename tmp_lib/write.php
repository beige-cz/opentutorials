<?php
  require("/Applications/mampstack-8.0.1-0/apache2/htdocs/lib/db.php");
  $conn = db_init("localhost", "root", "alsxm1623", "opentutorials");
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
      <h1><a href="http://localhost:8080/tmp_lib/index.php">Javascript</a></h1>
    </header>

    <nav>
      <ol>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            echo '<li><a href="http://localhost:8080/tmp_lib/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
        }
        ?>
      </ol>
    </nav>

    <div class="control">
      <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
      <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
      <a href="http://localhost:8080/tmp_lib/write.php">쓰기</a>
    </div>

    <article>
      <form action="process.php" method="post">
        <p> 제목: <input type="text" name="title"> </p>
        <p> 작성자: <input type="text" name="author"> </p>
        <p> 본문: <textarea name="description"></textarea> </p>
        <input type="submit" value="작성">
      </form>
    </article>
  </body>

</html>
