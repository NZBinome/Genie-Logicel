<?php
$con=mysqli_connect("localhost","root","root","Projet");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $IdProg=$_POST['IdProg'];
  $IdAvion=$_POST['IdAvion'];
  $IdEquipe=$_POST['IdEquipe'];
  $NumAero=$_POST['NumAero'];
  $IdEq=$_POST['IdEq'];
  $Code=$_POST['Code'];
  $Direction=$_POST['Direction'];
  $DateDebut=$_POST['DateDebut'];
  $DateFin=$_POST['DateFin'];
  $Duree=$_POST['Duree'];


$sql = "UPDATE Programme SET IdAvion='$IdAvion', IdEquipe='$IdEquipe', NumAero='$NumAero', IdEq='$IdEq', Code='$Code', Direction='$Direction', DateDebut='$DateDebut', DateFin='$DateFin', Duree='$Duree' WHERE IdProg='$IdProg'";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?>