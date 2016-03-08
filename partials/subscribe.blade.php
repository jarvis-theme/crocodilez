<div class="col-xs-12 col-sm-4 col-md-3 newsletter">
	<div class="row-fluid">
		<h4 class="foot-title">Newsletter</h4>
		<p class="title-news">Daftar sekarang untuk menerima informasi produk terkini, promosi, dan tawaran menarik lainnya.</p>
		<form id="newsletter" action="{{@$mailing->action}}" method="post">
			<div class="input-group">
				<input type="email" class="form-control" placeholder="masukkan email" name="email" {{ @$mailing->action==''?'disabled="disabled" style="cursor: default"':'' }} />
				<span class="input-group-btn">
					<button class="btn btn-subscribe" type="button" {{ @$mailing->action==''?'disabled style="cursor:default"':'' }}>Daftar</button>
				</span>
			</div>
		</form>
	</div>
</div>