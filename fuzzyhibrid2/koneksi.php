<?php 

$host="localhost";
$user="root";
$pass="";	
$db="fuzzyhibrid";

function koneksi(){
	global $host,$user,$pass,$db;
	$konek=mysql_connect($host,$user,$pass) or die('Maaf, Tidak dapat dikoneksikan ke Server Database\n');
	if($konek==true){
		mysql_select_db($db,$konek) or die('Maaf, Database Tidak ditemukan');
		
	}
}

koneksi();
 ?>