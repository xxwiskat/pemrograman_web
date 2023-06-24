<?php 

  $jav_hd= array('Remu Suzumori', 'Maria Ozawa', 'Eimi Fukada');
  $total_data_array= count($jav_hd);

  for( $i= 0; $i < $total_data_array; $i++):
    echo 'My Favorite Actress: ' . $jav_hd[$i]. '🤤' . '<br>';
  endfor;

  echo '<hr>';

  echo '<ol>';

  foreach( $jav_hd as $act ):
    echo '<li> My Favorite Actress:' .$act. '</li>';
  endforeach;

  echo '</ol>';

  echo ' JUM\'AT ';

?>