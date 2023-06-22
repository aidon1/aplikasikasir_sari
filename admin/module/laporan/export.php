<?php
require 'config.php';
include $view;
$lihat = new view($config);
$barang = $lihat -> barang();

?>

<html>
<head>
  <title>Laporan Stok Barang</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>Stok Barang</h2>
				<div class="data-tables datatable-dark">
					
                <table class="table table-bordered table-striped table-sm" id="#mauexport">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;">
                            <th>No.</th>
                            <th>ID Barang</th>
                            <th>Kategori</th>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Satuan</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						$totalBeli = 0;
						$totalJual = 0;
						$totalStok = 0;
						if($_GET['stok'] == 'yes')
						{
							$hasil = $lihat -> barang_stok();

						}else{
							$hasil = $lihat -> barang();
						}
						$no=1;
						foreach($hasil as $isi) {
					?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo ['id_barang'];?></td>
                            <td><?php echo ['nama_kategori'];?></td>
                            <td><?php echo ['nama_barang'];?></td>
                            <td><?php echo ['merk'];?></td>
                            <td>
                                
                            </td>
                            <td>Rp.<?php echo number_format($isi['harga_beli']);?>,-</td>
                            <td>Rp.<?php echo number_format($isi['harga_jual']);?>,-</td>
                            <td> <?php echo $isi['satuan_barang'];?></td>
                            <td>
                                
                        </tr>
                        <?php 
							$no++; 
							$totalBeli += $isi['harga_beli'] * $isi['stok']; 
							$totalJual += $isi['harga_jual'] * $isi['stok'];
							$totalStok += $isi['stok'];
						}
					?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">Total </td>
                            <th><?php echo $totalStok;?></td>
                            <th>Rp.<?php echo number_format($totalBeli);?>,-</td>
                            <th>Rp.<?php echo number_format($totalJual);?>,-</td>
                            <th colspan="2" style="background:#ddd"></th>
                        </tr>
                    </tfoot>
                </table>
					
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>