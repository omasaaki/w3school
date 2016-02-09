<!DOCTYPE html>
<html>
  <head>Global and Local Scope2</head>
  <body>

    <p>
      <?php
      $x = 5;
      $y = 10;

      function myTest() {
        global $x, $y;
        $y = $x + $y;
      }

      myTest();
      echo $y; // outputs 15
      ?> 
    </p>

  </body>
</html>
