<!DOCTYPE html>
<html>
  <head>Global and Local Scope2</head>
  <body>

    <p>
      <?php
      $x = 5;
      $y = 10;

      function myTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
      } 

      myTest();
      echo $y; // outputs 15
      ?> 
    </p>

  </body>
</html>
