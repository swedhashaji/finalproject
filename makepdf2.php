<html>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
</style>
</html>
<?php
session_start();
$id=$_SESSION['userid'];
$con = mysqli_connect("localhost", "root", "", "smymdb");
$result=mysqli_query($con,"SELECT * from registration r,tbl_parish t,forane f where t.parish_id=r.parish and f.forane_id=r.forane and r.id=$id");
while($row=mysqli_fetch_row($result))
{
$name=$row[2];
$forane= $row[25];
$parish= $row[13];
$image= $row[10];
}
require_once __DIR__ . '/TCPDF-main/tcpdf.php';
$pdf= new TCPDF();
$pdf->AddPage('P','A4');
$pdf->Image($image,80, 30, 25,25);
$html ='<div class="card"><h1>SMYM</h1>
 <p> Name :' . $name.'</p>
<p> Forane :' . $forane.'</p>
<p> church :' . $parish.'</p>';
$pdf->WriteHTML($html);
ob_end_clean();
$pdf->Output('idcard.pdf','D');
header("location:upload.php");
?>