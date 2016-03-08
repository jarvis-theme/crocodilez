<div class="top-list container">
	<h2 class="myaccount"><i class="fa fa-file-text-o"></i> &nbsp;Daftar Belanja</h2>
	<div class="clr"></div>
	<hr>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="account">
				<div class="title"><h2>My Account</h2></div>
				<ul class="nav">
					<li class="active"><a>Daftar Belanja</a></li>
					<li><a href="{{url('member/profile/edit')}}">Ubah Profil</a></li>
				</ul>
			</div>
		</div>
		<div class="col-xs-12 col-md-9">
			@if($order->count() > 0)
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th><span>Kode Order</span></th>
							<th><span>Tanggal Order</span></th>
							<th><span>Detail Order</span></th>
							<th><span>Total Order</span></th>
							<th><span>No. Resi</span></th>
							<th><span>Status</span></th>
							<th><span>Konfirmasi</span></th>
						</tr>
					</thead>
					<tbody>
						@foreach (list_order() as $item)
						<tr>
							<td>{{ prefixOrder().$item->kodeOrder }}</td>
							<td>{{ waktu($item->tanggalOrder) }}</td>
							<td class="desc">
								<ul>
								@if($pengaturan->checkoutType == 1) 
									@foreach ($item->detailorder as $detail)
									<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
									@endforeach 
								@endif
								</ul>
							</td>
							<td class="quantity">{{ price($item->total)	}}</td>
							<td class="noresi">{{ $item->noResi }}</td>
							<td class="total-price">
							@if($pengaturan->checkoutType == 1) 
								@if($item->status == 0)
								<span class="label label-warning">Pending</span>
								@elseif($item->status == 1)
								<span class="label label-info">Konfirmasi diterima</span>
								@elseif($item->status == 2)
								<span class="label label-success">Pembayaran diterima</span>
								@elseif($item->status == 3)
								<span class="label label-success">Terkirim</span>
								@elseif($item->status == 4)
								<span class="label label-danger">Batal</span>
								@endif 
							@endif
							</td>
							<td class="align-center">
							@if($pengaturan->checkoutType==1) 
								@if($item->status < 1)
								<button onclick="window.open('{{url('konfirmasiorder/'.$item->id)}}','_blank')" class="btn btn-small btn-success" data-title="Konfirmasi" data-placement="top" data-tip="tooltip"><i class="fa fa-check"></i></button>
								@endif 
							@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{list_order()->links()}} 
			@else
			<span>Belum ada data order</span>
			@endif
			</div>
		</div>
	</div>
</div>