<?php
$wsdl = "http://localhost:8064/uts/gb30k2mpc?wsdl";
$client2 = new SoapClient ( $wsdl );

$ws = $client2->getInfoMhs();
$wsout = $ws->Mhs;

echo '<p>';
echo 'List mahasiswa';
echo '</p>';
echo '<table>';
echo '<thead><td>nim</td><td>nama</td><td>email</td></thead>';
foreach ( $wsout as $val ) {
	echo '<tr><td>' . $val->nim . '</td><td>' . $val->nama . '</td><td>'.$val->email.'</td></tr>';
}
echo '</table>';

?>
