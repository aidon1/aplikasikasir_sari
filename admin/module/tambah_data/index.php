<h4>Tambah user</h4>
<br>
<?php if(isset($_GET['success'])){?>
<div class="alert alert-success">
	<p>simpan Data Berhasil !</p>
</div>
<?php }?>
<div class="card">
	<div class="card-body">
		<form action="fungsi/tambah/tambah.php?data=tambah&member=tambah" method="POST">
			<div class="row">
				<div class="col-md 6">
					<div class="form-group">
						<label for="">Username</label>
						<input class="form-control" name="user"
									placeholder="Username">
					</div>
					<div class="form-group">
						<label for="">Id member</label>
						<input class="form-control" name="id_member" 
									placeholder="Id member">
					</div>
					<div class="form-group">
						<label for=""> Nama member</label>
						<input class="form-control" name="nm_member" 
									placeholder="Nama member">
					</div>
					<div class="form-group">
						<label for="">Alamat member</label>
						<input class="form-control" name="alamat_member" 
									placeholder="Alamat member">
					</div>
					<div class="form-group">
						<label for="">Posisi</label>
						<input class="form-control" name="posisi" 
									placeholder="Posisi">
					</div>
				</div>
				<div class="col-md 6">
					<div class="form-group">
						<label for="">Password</label>
						<input class="form-control" type="password" name="pass" 
									placeholder="Password">
					</div>
					<div class="form-group">
						<label for="">Akses</label>
						<select name="akses" id="" class="form-control">
							<option value="admin">admin</option>
							<option value="kasir">kasir</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Telepon</label>
						<input class="form-control" name="telepon"
									placeholder="Telepon">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" name="email"
									placeholder="Email">
					</div>
				</div>
			</div>
			<button id="tombol-simpan" name="data" class="btn btn-dark"><i class="fas fa-edit"></i> Tambah User</button>
		</form>
		<!--  -->
	</div>
</div>