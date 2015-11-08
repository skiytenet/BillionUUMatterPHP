<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: origin, content-type, accept");

if(isset($_GET['fluid'])||isset($_GET['fluid'])&&isset($_GET['get']))
{
  if(isset($_GET['get']))  $type = strtolower($_GET['get']);
  else $type="all";
  $fluidName = strtolower($_GET['fluid']);
  $fluid = json_decode(file_get_contents("array.json"),true);
  $part1 = $fluid[$fluidName]['name'];
  $part2 = $fluid[$fluidName]['amount'];
  $part3 = $fluid[$fluidName]['capacity'];
  $part4 = $fluid[$fluidName]['fillPercentage'];
  if(!empty($fluid))
  {
     if($type=="current"||$type=="amount") echo $fluid[$fluidName]['amount'];
     elseif($type=="max") echo $fluid[$fluidName]['capacity'];
     elseif($type=="percents") echo $fluid[$fluidName]['fillPercentage']."%";
     elseif($type=="percent") echo $fluid[$fluidName]['fillPercentage'];
     elseif($type=="raw"||$type=="all") echo $part1.";".$part2.";".$part3.";".$part4;
     elseif($type=="help")
     {
	echo "current|amount - returns the currently stored amount of fluid in the world of the given fluid<br>";
	echo "max|capacity - returns the storage capacity for the given fluid<br>";
	echo "percent - returns the fill percentage for the given fluid<br>";
	echo "percents - returns the fill percentage for the given fluid with % sign at the end<br>";
	echo "raw|all - returns all of the above for the given fluid in the following style: fluidname;amount;capacity;fillpercentage<br>";
	echo "<br><br><br>Then we have this 'Jordan' guy that wants credits for coming up with the idea of getting specific information for the fluid.";
     }
     else echo "Invalid method!";
  }
  else echo "Fluid not found!";
}
else {
echo "Invalid/missing arguments";
}


?>
