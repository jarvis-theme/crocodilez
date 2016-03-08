<div class="login">
	<div class="login-detail">
		<h2 class="title">Log in ke {{Theme::place('title')}}</h2>
		<br>
		<p>Silahkan Login untuk menikmati kemudahan dalam berbelanja. Cepat dan Mudah dalam bertransaksi. Dapat mengetahui daftar belanja dan status pemesanan.</p>
		{{ Form::open(array('url' => 'member/login', 'class' => 'form-horizontal')) }}
			<div class="form-group">
				<label class="col-lg-2 control-label">Email</label>
				<div class="col-lg-8">
					<input type="email" class="form-control" name="email" placeholder="Email" value="{{Input::old('email')}}" autofocus required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Password</label>
				<div class="col-lg-8">
					<input class="form-control" type="password" name="password" placeholder="Password" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<small>
						<a href="#" data-toggle="modal" data-target="#resetPassword">Lupa password?</a>
					</small>
				</div>
			</div>
			<div class="form-group">
				<div class="pull-left col-sm-2">
					<button type="submit" class="btn btn-main">Log in</button>
				</div>
				<div class="pull-right col-sm-5">
					<small>Belum punya akun?</small>
					<a href="{{url('member/create')}}" class="btn btn-default">Daftar</a>
				</div>
			</div>
		{{Form::close()}}
	</div>
</div>

<div class="modal fade" id="resetPassword" tabindex="-1" role="dialog" aria-labelledby="resetPasswordLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			{{ Form::open(array('url' => 'member/forgetpassword', 'class' => 'form-horizontal')) }}
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="resetPasswordLabel">Lupa Password</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" name="recoveryEmail" placeholder="Email anda" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-main">Kirim</button>
				</div>
			{{ Form::close() }}
		</div>
	</div>
</div>