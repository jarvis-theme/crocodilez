<div class="page">
	<div class="container">
		<h2 class="myaccount"><i class="fa fa-cart-arrow-down"></i> Detail Order</h2>
		<hr />
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th><span>Kode Order</span></th>
						<th><span>Tanggal Order</span></th>
						<th><span>Detail Order</span></th>
						<th><span>Jumlah</span></th>
						<th><span>No. Resi</span></th>
						<th><span>Status</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ prefixOrder().$order->kodeOrder }}</td>
						<td>{{ waktu($order->tanggalOrder) }}</td>
						<td>
							<ul class="detailorder">
								@foreach ($order->detailorder as $detail)
								<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku['opsi1'].($detail->opsisku['opsi2'] != '' ? ' / '.$detail->opsisku['opsi2']:'').($detail->opsisku['opsi3'] !='' ? ' / '.$detail->opsisku['opsi3']:'').')':''}} - {{$detail->qty}}</li>
								@endforeach
							</ul>
						</td>
						<td>{{ price($order->total) }}</td>
						<td class="noresi">{{ $order->noResi}}</td>
						<td>
							@if($order->status==0)
							<span class="label label-warning">Pending</span>
							@elseif($order->status==1)
							<span class="label label-danger">Konfirmasi diterima</span>
							@elseif($order->status==2)
							<span class="label label-success">Pembayaran diterima</span>
							@elseif($order->status==3)
							<span class="label label-info">Terkirim</span>
							@elseif($order->status==4)
							<span class="label label-default">Batal</span>
							@endif
						</td>
					</tr>
				</tbody>
			</table>
			<hr>
		</div>
		<div class="row">
			@if($order->jenisPembayaran==1 && $order->status == 0)
			<div class="col-md-5 col-md-offset-3">
				<h3 class="align-center">{{trans('content.step5.confirm_btn')." ".trans('content.step3.transfer')}}</h3>
				{{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put'))}}
					<div class="form-group">
						<label  class="control-label"> Nama Pengirim:</label>
						<input type="text" class="form-control" placeholder="Nama Pengirim" name="nama" autofocus required>
					</div>
					<div class="form-group">
						<label  class="control-label"> No Rekening:</label>
						<input type="text" class="form-control" placeholder="No Rekening" name="noRekPengirim" required>
					</div>
					<div class="form-group">
						<label  class="control-label"> Rekening Tujuan:</label>
						<select name="bank" class="form-control">
							<option value="">-- Pilih Bank Tujuan --</option>
							@foreach (list_banks() as $bank)
							<option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label  class="control-label"> Jumlah:</label>
						<input type="text" class="form-control" placeholder="Jumlah Transfer" name="jumlah" value="{{$order->status==0 ? $order->total : ''}}" required>
					</div>
					<button type="submit" class="btn btn-main">{{trans('content.step5.confirm_btn')}}</button>
				{{Form::close()}}
			</div>
			@endif
		</div>

		@if($paymentinfo!=null)
		<h3><center>Paypal Payment Details</center></h3><br>
		<hr>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
				</tr>
				<tr>
					<td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
				</tr>
				<tr>
					<td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
				</tr>
				<tr>
					<td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
				</tr>
				<tr>
					<td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
				</tr>
				<tr>
					<td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
				</tr>
				<tr>
					<td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
				</tr>
			</table>
		</div>
		<p>Thanks you for your order.</p><br>
		@endif 

		@if($order->jenisPembayaran==2)
		<hr>
		<center>
			<h3><b>{{trans('content.step5.confirm_btn')}} Paypal</b></h3><br>
			<p>{{trans('content.step5.paypal')}}</p><br>
		</center>
		<center id="paypal">{{$paypalbutton}}</center>
		<br>
		@elseif($order->jenisPembayaran==5 && $order->status == 0)
		<center>
			<h3><strong>{{trans('content.step5.confirm_btn')}} DOKU MyShortCart</strong></h3><br>
			<p>{{trans('content.step5.doku')}}</p>
			{{ $doku_button }}
		</center>
		<br>
		@elseif($order->jenisPembayaran==6 && $order->status == 0)
		<center>
			<h3><b>{{trans('content.step5.confirm_btn')}} Bitcoin</b></h3><br>
			<p>{{trans('content.step5.bitcoin')}}</p>
			{{$bitcoinbutton}}
		</center>
		<br>
		@elseif($order->jenisPembayaran == 8 && $order->status == 0)
		<center>
			<h3><b>{{trans('content.step5.confirm_btn')}} Veritrans</b></h3><br>
			<p>{{trans('content.step5.veritrans')}}</p>
			<button class="btn btn-info" onclick="location.href='{{ $veritrans_payment_url }}'">{{trans('content.step5.veritrans_btn')}}</button>
		</center>
		<br>
		@endif
	</div>
</div>