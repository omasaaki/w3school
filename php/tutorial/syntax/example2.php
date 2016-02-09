<!DOCTYPE html>
<html>
  <head>Comments in PHP</head>
  <body>

    <p>
      <?php
      // This is a single-line comment

      # This is also a single-line comment

      /*
         This is a multiple-lines comment block
         that spans over multiple
         lines
       */

      echo "5 + 5 = ";
      // You can also use comments to leave out parts of a code line
      $x = 5 /* + 15 */ + 5;
      echo $x;
      ?>
    </p>

  </body>
</html>
