<?php 


  $cars= array(

    array("Name" => "GTR R35", "Brand" => "Nissan", "Country" => "Japan" ),
    array("Name" => "SHELBY GT500", "Brand" => "Mustang", "Country" => "United States" ),
    array("Name" => "Supra", "Brand" => "Toyota", "Country" => "Japan" )

  );

  // echo $cars[2]['Name'];
  // print_r($cars);
  // echo "<hr>";

  // foreach( $cars as $car ):

  //   foreach( $car as $c => $val ):

  //     echo $c . ": " . $val . "<br>";

  //   endforeach;

  //   echo "<br>";

  // endforeach;

  header("Content-type: application/json");
  echo json_encode($cars);

?>
