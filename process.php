<?php
$submitted = filter_input(INPUT_POST, "btnSubmit");
$biayapembangunan =  filter_input(INPUT_POST, "biayapembangunan");
$biayasks = filter_input(INPUT_POST, "biayasks");
$jumlahsks = filter_input(INPUT_POST, "jumlahsks");

$totalbiaya = $biayasks * $jumlahsks;
$grandtotal = $biayapembangunan + $totalbiaya;

echo"
    <P>Total Biaya Pembangunan : $biayapembangunan</P>
    <p>Total Biaya SKS ($jumlahsks @$biayasks): $totalbiaya</p>
    <p>Grand Total : $grandtotal</P>
";

