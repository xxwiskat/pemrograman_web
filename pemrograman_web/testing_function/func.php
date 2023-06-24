<?php 

  function aboutApk(){
    echo "<h3> Aplikasi Michat </h3>";
    echo "<sup> version 1.1 </sup>";
    echo "<br>";
  };

  function cetakLabel( $val ){
    echo "isi tabel: " . $val;
    echo "<br>";
  };

  function cetakLabel2( $val= "belum berisi data" ){
    echo "isi tabel: " . $val;
    echo "<br>";
  };

  function amountNumber($number1= 0, $number2= 0){
    return $number1 + $number2;

    // echo $number1 + $number2;
  }

?>