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
      <h1><a href="http://localhost:8080/tmp_php/index.php">Javascript</a></h1>
    </header>

    <nav>
      <ol>
        <?php
          echo file_get_contents("list.txt");
        ?>
      </ol>
    </nav>

    <div class="control">
      <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
      <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
    </div>

    <article>
      <?php
        if(empty($_GET['id'])==false){
          echo file_get_contents($_GET['id'].".txt");
        }
       ?>
    </article>
  </body>

</html>
