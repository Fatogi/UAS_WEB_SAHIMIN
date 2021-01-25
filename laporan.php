    <style type="text/css">
	.lap {
		text-decoration:none;
	}
	.table_input a:hover {
		color:#0000ff;
	}
	</style>
	
	<?php include '../conn/koneksi.php'; ?>
    <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Laporan
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">All Laporan</td>
                </tr>
            
            </table>
        	
            
    	</div>
        
   	    <div class="table_input">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
            <tbody>
            	<tr>
                	<td align="left" width="30%"><a href="../print-buku.php" class="lap" target="_blank"> <img src="../images/lb.jpg"/ width="30px" height="30px">LAPORAN DATA BUKU</a></td>
               
                	<td align="center" width="30%"><a href="../print-anggota.php" class="lap" target="_blank"> <img src="../images/la.png"/ width="20px" height="30px">  LAPORAN DATA ANGGOTA</a></td>
            
                	<td align="right" width="30%"><a href="../print-transaksi.php" class="lap" target="_blank"> <img src="../images/lt.png"/ width="30px" height="30px">LAPORAN TRANSAKSI</a></td>
                    <br>
                </tr>
                
            </tbody>
          </table>
 	      </div>
   	  </div>
    </div>
