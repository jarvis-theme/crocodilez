<div class="recovery">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTos">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#tos" aria-expanded="true" aria-controls="tos">
									Kebijakan Layanan
								</a>
							</h4>
						</div>
						<div id="tos" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTos">
							<div class="panel-body">
								{{$service->tos}}
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingRefund">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#refund" aria-expanded="false" aria-controls="refund">
									Kebijakan Pengembalian
								</a>
							</h4>
						</div>
						<div id="refund" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingRefund">
							<div class="panel-body">
								{{$service->refund}}
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingPrivacy">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#privacy" aria-expanded="false" aria-controls="privacy">
									Kebijakan Privasi
								</a>
							</h4>
						</div>
						<div id="privacy" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPrivacy">
							<div class="panel-body">
								{{$service->privacy}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>