<?php
  // get the degrees farhrenheit from the textfields
  $f = $_POST['f'];


  // formula to calculate degrees celsius from degrees fahrenheit
  $celsius = ($f-32) * (5/9);

?>
<h3>Results:</h3>
<?php echo $f ?>° fahrenheit is equal to <?php echo round($celsius,0) ?> °C.


