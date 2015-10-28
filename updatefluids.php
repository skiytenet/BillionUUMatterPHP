<?php

if(isset($_POST['fluid'])&&isset($_POST['amount'])&&isset($_POST['capacity']))
{
  $fluids = json_decode(file_get_contents("array.json"), true);
  $fluids[$_POST['fluid']]['name'] = $_POST['fluid'];
  $fluids[$_POST['fluid']]['amount'] = $_POST['amount'];
  $fluids[$_POST['fluid']]['capacity'] = $_POST['capacity'];
  file_put_contents("array.json",json_encode($fluids));
}
else {
echo "Missing arguments";
}

 ?>
