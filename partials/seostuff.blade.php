	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{{$description}}">
	<meta name="keywords" content="{{$keywords}}">
	<meta name="rating" content="general">
	<meta name="robots" content="index, follow">
	<meta http-equiv="classification" content="Toko online">
	<meta name="url" content="{{URL::current()}}">
	<meta name="revisit-after" content="7 days">
	<meta name="DC.Title" content="{{$title}}">
	<meta name="DC.Subject" content="{{$keywords}}">
	<meta name="DC.Description" content="{{$description}}">
	<meta name="theme_path" content="{{theme_path()}}">
	<meta property="og:url"           content="{{URL::full()}}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{$title}}" />
	<meta property="og:description"   content="{{$description}}" />
	<meta property="og:image"         content="{{@$img!='' ? product_image_url($img):''}}" />
	<title>{{$title}}</title>
	<link rel="canonical" href="{{URL::full()}}">
	{{ pluginHeader() }}
