	<div class="product">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12">
					@if(home_product()->count() > 0)
						<form action="#" id="addorder">
						@foreach(home_product() as $key=>$produk)
							@if($key == 0)
							<div class="row product-detail">
								<div class="col-xs-12 col-sm-6">
									<div class="image-container">
										{{HTML::image(product_image_url($produk->gambar1, 'medium'), $produk->nama, array('class'=>'img-responsive centering','title'=>$produk->nama))}}
										<a href="{{product_image_url($produk->gambar1, 'large')}}" class="zoom fancybox" title="{{$produk->nama}}"></a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<h3 class="product-name" id="{{$produk->slug}}">{{$produk->nama}}</h3>
									<p class="description">{{$produk->deskripsi}}</p>
									<h4 class="price">{{price($produk->hargaJual)}}</h4>
									@if($produk->hargaCoret != 0)
									<h5 class="pricecut">{{price($produk->hargaCoret)}}</h5>
									@endif
									<div class="clearfix"></div>
									<div class="qty">
										<div class="form-group">
											<label class="col-sm-3 col-lg-3 control-label">Jumlah :</label>
											<div class="col-sm-6">
												<input type="number" class="form-control" name="qty" value="1">
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="attribute">
										<fieldset class="attribute_fieldset">
											<div class="attribute_list">
												@if(count($produk->opsisku) > 0)
												<div class="form-group">
													<label class="col-sm-3 col-lg-3 control-label">Opsi :</label>
													<div class="col-sm-6">
														<select class="form-control attribute_select" name="opsiproduk">
															<option value="">-- Pilih Opsi --</option>
															@foreach ($produk->opsisku as $key => $opsi)
															<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
																{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} - {{price($opsi->harga)}}
															</option>
															@endforeach
														</select>
													</div>
												</div>
												@endif
											</div>
										</fieldset>
									</div>
									<br>
									<ul class="thumb-product owl-carousel">
										@if(!empty($produk->gambar2))
										<li class="item">
											<a href="{{product_image_url($produk->gambar2, 'large')}}" class="fancybox" title="{{$produk->nama}}">
												{{HTML::image(product_image_url($produk->gambar2,'thumb'),'thumbnail 1')}}
											</a>
										</li>
										@endif
										@if(!empty($produk->gambar3))
										<li class="item">
											<a href="{{product_image_url($produk->gambar3, 'large')}}" class="fancybox" title="{{$produk->nama}}">
												{{HTML::image(product_image_url($produk->gambar3,'thumb'),'thumbnail 2')}}
											</a>
										</li>
										@endif
										@if(!empty($produk->gambar4))
										<li class="item">
											<a href="{{product_image_url($produk->gambar4, 'large')}}" class="fancybox" title="{{$produk->nama}}">
												{{HTML::image(product_image_url($produk->gambar4,'thumb'),'thumbnail 3')}}
											</a>
										</li>
										@endif
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-sm-offset-6">
								<div class="checkout">
									<button class="buy" type="submit">Beli</button>
								</div>
							</div>
							@endif
						@endforeach
						</form>
					@else
						<h3 class="center"><i>Produk anda masih kosong..</i></h3>
					@endif
				</div>
			</div>
		</div>
	</div>

	<div class="about">
		<div class="container aboutus">
			<div class="row">
				<div class="col-xs-12 col-lg-12">
					<h3 class="introduce">What is {{ Theme::place('title') }}?</h3>
					<p>{{about_us()->isi}}</p>
				</div>
			</div>
		</div>
	</div>

	<div class="callus">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12">
					<h3 class="center">Hubungi Kami</h3>
					<p class="description center">Punya pertanyaan mengenai produk kami?</p>
					<form action="{{url('kontak')}}" class="col-sm-offset-2 col-lg-offset-2 form-horizontal" method="post">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-6">
								<input type="text" name="namaKontak" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-sm-6">
								<input type="email" name="emailKontak" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Pesan</label>
							<div class="col-sm-6">
								<textarea class="form-control" rows="3" name="messageKontak" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-6 right">
								<button type="submit" class="btn btn-main">Kirim</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>