			<footer>
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="center">
									<a href="{{URL::to('/')}}">
										<img src="{{ url(logo_image_url()) }}" class="footer-logo" alt="Logo {{Theme::place('title')}}">
									</a>
								</div>
								<div class="block-content">
									<p>{{short_description(about_us()->isi,500)}}</p>
								</div>
							</div>

							<div class="col-xs-12 col-sm-4 col-md-3">
								<h4 class="foot-title">Alamat Kami</h4>
								<div class="block-content">
									<p>{{@$kontak->alamat}}</p>
									<p>
										@if(!empty($kontak->telepon))
										<div class="phone" title="Telepon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="inline">
											{{$kontak->telepon}}
										</div>
										<br>
										@endif
										@if(!empty($kontak->hp))
										<div class="hp" title="SMS">
											<i class="fa fa-mobile fa-lg"></i>
										</div>
										<div class="inline">
											{{$kontak->hp}}
										</div>
										<br>
										@endif
										@if(!empty($kontak->bb))
										<div class="mail" title="BBM">
											<i class="fa fa-comment fa-1x"></i>
										</div>
										<div class="inline">
											{{$kontak->bb}}
										</div>
										<br>
										@endif
										<div class="mail" title="Email">
											<i class="fa fa-envelope-o"></i>
										</div>
										<div class="inline">
											{{$kontak->email}}
										</div>
										<br>
										@if(!empty($kontak->ym))
										{{ymyahoo($kontak->ym)}}
										<br>
										@endif
									</p>
									<div class="clearfix"></div>
								</div>
								<ul class="confirm">
									<li>
										<a href="{{URL::to('konfirmasiorder')}}">{{trans('content.step5.confirm_btn')}}</a>
									</li>
								</ul>
							</div>

							{{ Theme::partial('subscribe') }} 

							<div class="col-sm-2 col-md-2 col-lg-1 payment">
								@foreach(list_banks() as $value)  
								<img src="{{bank_logo($value)}}" alt="{{$value->bankdefault->nama}}" title="{{$value->bankdefault->nama}}" />
								@endforeach  
								@foreach(list_payments() as $pay)
									@if($pay->nama == 'paypal' && $pay->aktif == 1)
									<img src="{{url('img/bank/paypal.png')}}" alt="Paypal" title="Paypal" />
									@endif
									@if($pay->nama == 'ipaymu' && $pay->aktif == 1)
									<img src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" title="Ipaymu" />
									@endif
									@if($pay->nama == 'bitcoin' && $pay->aktif == 1)
									<img src="{{url('img/bitcoin.png')}}" alt="Bitcoin" title="Bitcoin" />
									@endif
								@endforeach
								@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
									<img src="{{url('img/bank/doku.jpg')}}" alt="doku" title="Doku Myshortcart" />
								@endif
								@if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
									<img src="{{url('img/bank/veritrans.png')}}" alt="Veritrans" title="Veritrans">
								@endif
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="container">
						<div class="col-sm-12 col-xs-12">
							<div class="pull-left">
								<p>&copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a target="_blank" href="//jarvis-store.com">Jarvis Store</a></p>
							</div>
							<div class="pull-right sosmed-footer">
								@if(!empty($kontak->fb))
								<a href="{{url($kontak->fb)}}">
									<i class="fa fa-facebook" title="Facebook"></i>
								</a>
								@endif
								@if(!empty($kontak->tw))
								<a href="{{url($kontak->tw)}}">
									<i class="fa fa-twitter" title="Twitter"></i>
								</a>
								@endif
								@if(!empty($kontak->gp))
								<a href="{{url($kontak->gp)}}">
									<i class="fa fa-google-plus" title="Google+"></i>
								</a>
								@endif
								@if(!empty($kontak->pt))
								<a href="{{url($kontak->pt)}}">
									<i class="fa fa-pinterest" title="Pinterest"></i>
								</a>
								@endif
								@if(!empty($kontak->ig))
								<a href="{{url($kontak->ig)}}">
									<i class="fa fa-instagram" title="Instagram"></i>
								</a>
								@endif
								@if(!empty($kontak->tl))
								<a href="{{url($kontak->tl)}}">
									<i class="fa fa-tumblr" title="Tumblr"></i>
								</a>
								@endif
							</div>
					   </div>
					</div>
				</div>
			</footer>
			{{pluginPowerup()}} 