<?php

if(isset($_POST['fluid'])&&isset($_POST['amount'])&&isset($_POST['capacity']))
{
  $fluids = json_decode(file_get_contents("array.json"), true);
  $fluidName = strtolower($_POST['fluid']);
  $fluids[$fluidName]['name'] = $fluidName;
  $fluids[$fluidName]['amount'] = $_POST['amount'];
  $fluids[$fluidName]['capacity'] = $_POST['capacity'];
  $fluids[$fluidName]['fillPercentage'] = ($_POST['amount']/$_POST['capacity'])*100;
  file_put_contents("array.json",json_encode($fluids));
}
else {
echo "Missing arguments";
}

 ?>
