<div class="slider">
	<div id="myCarousel" class="container carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			@for($i = 0; $i < slideshow()->count(); $i++)
			<li data-target="#carousel-example-generic" data-slide-to="{{$i}}" {{$i == 0 ? 'class="active"' : ''}}></li>
			@endfor
		</ol>
		<div class="carousel-inner" role="listbox">
			@foreach (slideshow() as $key=>$val) 
			<div class="item {{$key == 0 ? 'active' : ''}}">
				{{HTML::image(slide_image_url($val->gambar), $val->title)}}
			</div>
			@endforeach 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		</a>
	</div>
</div>