<!-- Pindah ini keatas -->
<script>window.print();</script> 
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm" id="example1">
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
                            <td><?php echo $isi['id_barang'];?></td>
                            <td><?php echo $isi['nama_kategori'];?></td>
                            <td><?php echo $isi['nama_barang'];?></td>
                            <td><?php echo $isi['merk'];?></td>
                            <td>
                                <?php if($isi['stok'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok'];?>
                                <?php }?>
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
        <!-- end view barang -->
        <!-- tambah barang MODALS-->
        <!-- Modal -->

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
               
                   
                        <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Barang</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                  
                                <?php
									$format = $lihat -> barang_id();
								?>
                                <tr>
                                    <td>ID Barang</td>
                                    <td><input type="text" readonly="readonly" required value="<?php echo $format;?>"
                                            class="form-control" name="id"></td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>
                                        <select name="kategori" class="form-control" required>
                                            <option value="#">Pilih Kategori</option>
                                            <?php  $kat = $lihat -> kategori(); foreach($kat as $isi){ 	?>
                                            <option value="<?php echo $isi['id_kategori'];?>">
                                                <?php echo $isi['nama_kategori'];?></option>
                                            <?php }?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Barang</td>
                                    <td><input type="text" placeholder="Nama Barang" required class="form-control"
                                            name="nama"></td>
                                </tr>
                                <tr>
                                    <td>Merk Barang</td>
                                    <td><input type="text" placeholder="Merk Barang" required class="form-control"
                                            name="merk"></td>
                                </tr>
                                <tr>
                                    <td>Harga Beli</td>
                                    <td><input type="number" placeholder="Harga beli" required class="form-control"
                                            name="beli"></td>
                                </tr>
                                <tr>
                                    <td>Harga Jual</td>
                                    <td><input type="number" placeholder="Harga Jual" required class="form-control"
                                            name="jual"></td>
                                </tr>
                                <tr>
                                    <td>Satuan Barang</td>
                                    <td>
                                        <select name="satuan" class="form-control" required>
                                            <option value="#">Pilih Satuan</option>
                                            <option value="PCS">PCS</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Input</td>
                                    <td><input type="text" required readonly="readonly" class="form-control"
                                            value="<?php echo  date("j F Y, G:i");?>" name="tgl"></td>
                                </tr>
                            </table>
                        </div>
                      
                    </form>
                </div>
            </div>

        </div>