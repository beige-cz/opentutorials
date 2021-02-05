<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <h1>JavaScript</h1>
    <ul>
      <script type="text/javascript">
        list = new Array("철수", "짱구", "유리", "훈이");
        i = 0;
        while(i<list.length){
          document.write("<li>"+list[i]+"</li>");
          i++;
        }
      </script>
    </ul>

    <h1>php</h1>
    <ol>
      <?php
        $list = array("철수", "짱구", "유리", "훈이");
        $i = 0;
        while($i < count($list)){
          echo "<li>".$list[$i]."</li>";
          $i++;
        }
       ?>
    </ol>
  </body>
</html>
