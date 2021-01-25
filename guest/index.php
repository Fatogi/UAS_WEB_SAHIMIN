<?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Perpustakaan </title>
<link rel="stylesheet" type="text/css" href="../images/style.css" />
</head>

<body>
<!-- menu main sebagai div Utama -->

<div id="main">
	<!-- menu Header -->
    <div id="header">
    <img src="../images/header3.png" />
    </div>
    
    <!-- menu Header -->
    <div id="menu-atas">
    	<div id="menu_user">
        <!-- <span><?=$_SESSION['nama']; ?></span> -->
        </div>
        <div id="menu_tanggal" align="right">
        <span><?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('j');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
			?>
        </span>
        </div>
    </div>
    
    
<div>    
    <!-- menu Kiri -->
 	<div id="menu-kiri">
    	<div id="bg_menu">Menu Utama
    	</div>
    	<div id="left_menu">
        	<a href="index.php" class="menu"> <img src="../images/home.jpg"/ width="25px" height="20px"> Home </a> <br />
        	<br>
        	<br>
        	<a href="?page=buku" class="menu"> <img src="../images/buku.png"/ width="25px" height="20px">Buku </a> <br />
        	<br>
        	<br>
        	<br>
        	<!-- <a href="?page=transaksi" class="menu">Transaksi </a> <br /> -->
        	<a href="../logout.php" class="menu"><img src="../images/delete.png"/ width="25px" height="20px">Logout </a> <br />
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
        	 <br>
        	 <br>
        	 <br>
        </div>
    </div>
	    
    	     <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
						default:
						include "home.php";
						break;
						
					
						case "buku";
						include "buku_data.php";
						break;
						case "buku_search";
						include "buku_search.php";
						break;
						case "detil-buku";
						include "buku_detil.php";
						break;
						
					
					}
			?>

    
</div>
    <!-- menu Merapikan div content -->
    <div class="clear">
   	</div>
    
    
    
  	<!-- menu Footer -->
    <div id="footer"><center>Kelompok 8 &copy; 2020</center></div>
    
</div>

</body>
</html>

<?php } ?>