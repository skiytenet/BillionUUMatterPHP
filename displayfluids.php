<div class="content">
  <div class="title">Fluids</div>

  <table border="0" width="100%" cellspacing="10">
    <tr>
      <td>Fluid name</td>
      <td>Stored</td>
      <td>Storage capacity</td>
      <td>Fill %</td>
    </tr>
  <?php
  $fluids = json_decode(file_get_contents("array.json"), true);
  array_multisort($fluids);
  //print_r($fluids);
  foreach($fluids as $fluid)
  {
    if($fluid['name'] == "uu-matter")
    {
    echo "<tr class=\"fluid\"><td>UU-Matter</td>";
    }
    else
    {
       echo "<tr class=\"fluid\"><td>".ucfirst($fluid['name'])."</td>";
    }
    echo "<td>".$fluid['amount']."</td>";
    echo "<td>".$fluid['capacity']."</td>";
    if(is_numeric($fluid['amount'])&&is_numeric($fluid['capacity']))
    {
      echo "<td>".(($fluid['amount']/$fluid['capacity'])*100)."</td></tr>";
    }
    else {
      echo "<td>Undefined</td></tr>";
    }
  }

   ?>
  </table>

</div>
