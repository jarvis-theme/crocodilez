<div class="recovery">
	<div class="recovery-detail">
		{{ Form::open(array('url'=>'konfirmasiorder','method'=>'post')) }}
			<div class="row">
				<h2 class="title">Konfirmasi Order</h2>
				<div class="col-xs-12 col-sm-10 col-lg-10">
					<input class="form-control" placeholder="Masukkan kode Order" type="text" name="kodeorder" required>
				</div>
				<button type="submit" class="btn btn-main" id="kodeorder">Cari Kode</button>
			</div>
		{{ Form::close() }}
	</div>
</div>