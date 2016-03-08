<header class="top-header">
	<div class="container">
		<div class="pull-left">
			<span class="white">
				<i class="fa fa-envelope-o"></i><small> <a class="white" href="mailto:{{$kontak->email}}">{{$kontak->email}}</a></small>
			</span>
			@if(!empty($kontak->hp))
			<span class="hp-top">
				<i class="fa fa-mobile fa-lg"></i><small> {{$kontak->hp}}</small>
			</span>
			@endif
		</div>
		<div class="member-top">
			<span class="white">
				<small>
					@if( is_login() )
						<ul class="navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{URL::to('member')}}">Daftar Pembelian</a></li>
									<li><a href="{{URL::to('member/profile/edit')}}">Ubah Profil</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="{{URL::to('konfirmasiorder')}}">Konfirmasi Pembayaran</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="{{URL::to('logout')}}">Logout</a></li>
								</ul>
							</li>
							<li><a href="{{URL::to('checkout')}}">Checkout</a></li>
							<li><a href="{{URL::to('/')}}" title="Home"><i class="fa fa-home"></i></a></li>
						</ul>
					@else
						<a href="{{URL::to('member')}}" class="white">Log in</a> | <a href="{{URL::to('member/create')}}" class="white">Register</a> | <a class="white home" href="{{URL::to('/')}}" title="Home"><i class="fa fa-home"></i></a>
					@endif
				</small>
			</span>
		</div>
	</div>
</header>