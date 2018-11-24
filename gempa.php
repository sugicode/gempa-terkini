# gempa-terkini

<?php
// Data Gempa Terkini Ddi Indonesia
// sugic0d3
// Tut0rial run lewat xampp php di cmd
//-Download Cmdnya 
//- Taruh filenya di sistem c > xampp>php>pastekan di folder "PHP"
//- Sesudah itu jalankan, di cmd. buka CMD > lalu panggil "cd C:\xampp\php\" Setelah itu Ketik Php (namafile.php)

function main(){
	$url = "http://data.bmkg.go.id/autogempa.xml";
	$get = file_get_contents($url, False);
	$data = simplexml_load_string($get) or die("Error: Cannot create object");
	print " Tanggal   : ".$data->gempa->Tanggal."\n";
	print " Jam       : ".$data->gempa->Jam."\n";
	print "\n";
	print "\033[0;36m"; // Cyan
	print " Lintang   : ".$data->gempa->Lintang."\n";
	print " Bujur     : ".$data->gempa->Bujur."\n";
	print " Magnitude : ".$data->gempa->Magnitude."\n";
	print " Kedalaman : ".$data->gempa->Kedalaman."\n";
	print "\n";
	print "\033[0;32m"; // Hijau
	print " Wilayah   : ".$data->gempa->Wilayah1."\n";
	print " Potensi   : ".$data->gempa->Potensi."\n";
	print "\033[0m"; // Normal
}
system('clear');
print "\033[01;31m"; // Merah tua
print "=================================== \n";
print "   ____                             \n";
print "  / ___| ___ _ __ ___  _ __   __ _  \n";
print " | |  _ / _ \ '_ ` _ \| '_ \ / _` | \n";
print " | |_| |  __/ | | | | | |_) | (_| | \n";
print "  \____|\___|_| |_| |_| .__/ \__,_| \n";
print "                      |_|   TERKINI \n";
print "=================================== \n";
print "\033[0m"; // Normal
main();
?>
