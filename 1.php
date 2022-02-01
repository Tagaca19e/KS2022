<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?> 
    <?php
    $dayname = "Monday";

    $space = "";

    define("NUMSpc", 10, true);

    for($i = 0; $i < NUMSpc; $i++){
      $space = $space . "&nbsp;";
    }


    $test4 = "Eidmone";
    echo $dayname . $space . "hello <br>";

    if (is_string($test4)){
      echo "This is a string \n" ;
    } else {
      echo "This is not a string \n";
    }

    ?>
  </body>
</html>