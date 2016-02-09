<!DOCTYPE html>
<html>
  <head>Global and Local Scope2</head>
  <body>

    <p>
      <?php
      function myTest() {
        static $x = 0;
        echo $x;
        $x++;
      }

      myTest();
      myTest();
      myTest();
      ?> 
    </p>

  </body>
</html>
