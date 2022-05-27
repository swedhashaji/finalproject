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

require_once __DIR__ . '/vendor/autoload.php';
$fullname = $_POST['fullname'];
$place = $_POST['place'];
$church = $_POST['church'];
$mpdf = new \Mpdf\Mpdf();
$data = '';
$data .= '<div class="card"><h1>SMYM</h1>';
$data .= '<p> Name :' . $fullname.'</p>';
$data .= '<p> Church :' . $church.'</p>';
$data .= '<p> Place :' . $place.'</p></div>';
$mpdf->WriteHTML($data);
$mpdf->Output('idcard.pdf','D');

$con = new mysqli("localhost", "root", "", "smymdb");
$con->query("INSERT INTO idcard(name, place,church) VALUES ('$fullname','$place', '$church')");
?>