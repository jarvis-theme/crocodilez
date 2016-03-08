<div class="recovery">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4 col-lg-offset-2">
				<h2>Lupa Password</h2><hr><br>
				<form action="{{url('member/forgetpassword')}}" method="post">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Email anda" name="recoveryEmail" autofocus required>
						<span class="input-group-btn">
							<button class="btn btn-main" type="submit">Reset Password</button>
						</span>
					</div>
				</form>
				<br><br>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<h2>Pelanggan Baru</h2><hr><br>
				<p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
				<a href="{{url('member/create')}}" class="btn btn-default">Daftar</a>
			</div>
			<div class="clearfix"></div>
			<br>
			<div class="col-xs-12 col-sm-12 col-lg-12" id="adv-bottom">
				@foreach(horizontal_banner() as $banners)
				{{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive'))}}
				<br>
				@endforeach
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>