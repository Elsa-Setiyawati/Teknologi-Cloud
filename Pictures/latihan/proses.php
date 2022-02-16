<?php
if (isset($_POST['fnama']))
{
$fnama = $_POST ['nama'];
$lalamat = $_POST ['lalamat'];
echo"<span class='sucess'> Dengan <b>METODE POST</b></span><br/>";
echo "Nama:".$fnama."<br/>Alamar : ".$lalamat;
}
//---------------------------------------//
if (isset($_GET['fnama']))
{
    $fnama = $_GET ['fnama'];
    $lalamat = $_GET['lalamat'];
    echo"<span class='sucess'> Dengan <b>METODE POST</b></span><br/>";
    echo "Nama:".$fnama."<br/>Alamar : ".$lalamat;
}
?>