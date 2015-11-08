<?php

if(isset($_POST['fluid'])&&isset($_POST['amount'])&&isset($_POST['capacity']))
{
  $fluids = json_decode(file_get_contents("array.json"), true);
<<<<<<< HEAD
  $fluidName = strtolower($_POST['fluid']);
  $fluids[$fluidName]['name'] = $fluidName;
  $fluids[$fluidName]['amount'] = $_POST['amount'];
  $fluids[$fluidName]['capacity'] = $_POST['capacity'];
  $fluids[$fluidName]['fillPercentage'] = ($_POST['amount']/$_POST['capacity'])*100;
=======
  $fluids[$_POST['fluid']]['name'] = $_POST['fluid'];
  $fluids[$_POST['fluid']]['amount'] = $_POST['amount'];
  $fluids[$_POST['fluid']]['capacity'] = $_POST['capacity'];
>>>>>>> 47db5bb8c9e5cd12463ec8cfda23cd371b94ab9c
  file_put_contents("array.json",json_encode($fluids));
}
else {
echo "Missing arguments";
}

 ?>
