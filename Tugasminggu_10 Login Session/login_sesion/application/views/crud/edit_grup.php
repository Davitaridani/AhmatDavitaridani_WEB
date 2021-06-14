<div class="row">
	<div class="col-lg-7">
		<div class="p-5">
			<div class="text-center">
				<h1 class="h4 text-gray-900 mb-4">Edit User</h1>
			</div><?php foreach ($admin as $baris) { ?>
				<form class="user" action="<?php echo base_url('Grup/update_grup'); ?>" method="post">
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $baris->id_grup; ?>">
						<input type="text" class="form-control form-control-user" id="nameGrup" name="nameGrup" placeholder="Change Characther.." value="<?php echo $baris->grup; ?>" require>
					</div>
					<input type="submit" class="btn btn-success btn-icon-split p-2" name="submit" value="Update">
				</form><?php } ?>
			<hr>
			<div class="text-center"><a class="small" href="<?php echo base_url('Grup') ?>">Kembali</a>
			</div>
		</div>
	</div>
</div>