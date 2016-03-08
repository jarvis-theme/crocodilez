<div class="recovery">
	<div class="recovery-detail">
		<h2 class="title">Update Password</h2>
		<br>
		<p>Untuk me-reset password lama anda, silahkan masukkan password baru ke dalam kolom yang telah tersedia</p>
		{{ Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'form-horizontal')) }}
			<div class="form-group">
				<label class="col-lg-3 control-label">Password Baru</label>
				<div class="col-lg-8">
					<input class="form-control" type="password" name="password" placeholder="Password baru" autofocus required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Konfirmasi Password Baru</label>
				<div class="col-lg-8">
					<input class="form-control" type="password" name="password_confirmation" placeholder="Konfirmasi password baru" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-offset-3 col-lg-8">
					<button type="submit" class="btn btn-info">Update</button>
				</div>
			</div>
		{{Form::close()}}
	</div>
</div>