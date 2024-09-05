<?php
require('hello/autoload.php');
$con=mysqli_connect('localhost','root','','details');
if(mysqli_num_rows($res)>0){
    $html='<table>';
    $html.='<tr><td>name<td/><td>Email</td><td>date</td><td>phone</td>';
while($row=mysqli_fetch_assoc($res)){
$html.='<tr><td>'.$row['name'].'</td><td>'.$row['Email'].'</td><td>'.$row['Email'].'</td></tr>';
}
$html.='<table>';
}else{
    $html="data not found";
}
$mpdf=new\Mpdf\Mpdf();
$mpdf->WriteHTML(($html);
$file=time().'.pdf';
$mpdf->Output($file,'D');









?>