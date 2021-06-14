<div class="row">
	<div class="col-lg-7">
		<div class="p-5">
			
			<div class="text-center">
				<h1 class="h4 text-gray-900 mb-4">Tambah User</h1>
			</div>
			
				<form class="user" action="<?php echo base_url('Grup/input_grup');?>" method="POST">
					
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="nameGrup" name="nameGrup" placeholder="Create New Grup..." require>
					</div>
					
					<input type="submit" class="btn btn-success btn-icon-split p-2" name="submit" value="Create">
				</form>
				<hr>
				<div class="text-center">
					<a class="small" href="<?= base_url(); ?>Mahasiswa/index">Kembali</a>
				</div>
			</div>
		</div>
	</div>