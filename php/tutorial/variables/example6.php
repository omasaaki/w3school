<!DOCTYPE html>
<html>
  <head>Global and Local Scope2</head>
  <body>

    <p>
      <?php
      function myTest() {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
      } 
      myTest();

      // using x outside the function will generate an error
      echo "<p>Variable x outside function is: $x</p>";
      ?> 
    </p>

  </body>
</html>
