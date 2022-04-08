<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #A9A9A9;
}
</style>
</head>
<body>

<table>
 
<?php

$records = "";

foreach ($data['users'] as $rollercoaster){
    $records .= "<tr>
    <th>" .  $rollercoaster->id  . "</th>
    <th>" .  $rollercoaster->nameRollerCoaster  . "</th>
    <th>" .  $rollercoaster->nameAmusementPark  . "</th>
    <th>" .  $rollercoaster->country  . "</th>
    <th>" .  $rollercoaster->topspeed  . "</th>;
    <th>" .  $rollercoaster->height  . "</th>";
    
}

// var_dump($data);

?>

   <div class="container">
  <div class="row">
    <div class="col">
    <div class="col-12" id="header-text" style="">
    <h1 style="padding-bottom: 30px; padding-top: 100px;">
    <center>Landenoverzicht </center>
    <img src="rollercoaster.png" alt="..." class="img-thumbnail">
            </h1>
    </div>

      <center> <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">naam rollercoaster</th>
      <th scope="col">naam amusementpark</th>
      <th scope="col">land</th>
      <th scope="col">topsnelheid</th>
      <th scope="col">hoogte</th>
    </tr>
  </thead>
  <?php
    echo $records;
    ?>
</table> </center> 

</table>

</body>
</html>


