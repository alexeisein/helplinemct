<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
{{-- External Links --}}
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- CSS -->
{{-- <link rel="stylesheet" href="{{ asset('css/doctor.css') }}"> --}}
<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet"  media="screen" property="" />
<link rel="stylesheet" href="{{ asset('css/hospital.css') }}">
<!-- //flexslider-css-file -->
<link href="{{ asset('css/easy-responsive-tabs.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" media="all">	<!-- bootstrap-css-file -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" media="all">	<!-- style-css-file -->
<link href="{{ asset('css/accommodation.css') }}" rel="stylesheet">
<!-- gallery -->
<link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
<!-- //gallery -->
<link href="{{ asset('css/facilities.css') }}" rel="stylesheet">
<link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
<link href="{{ asset('css/keyareas.css') }}" rel="stylesheet">
<link href="{{ asset('images/logo/logo.png') }}" rel="icon"  type="image/png" sizes="16x16">
<link href="{{ asset('css/pages.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
@yield('extracss')

<!-- fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:400,300">

 <link href="//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">
 <link href="//fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
 <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

<!-- Default-JavaScript-File -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- //Default-JavaScript-File -->
<script src="{{ asset('js/bootstrap.js') }}"></script>	<!-- //bootstrap-JavaScript-File -->
<script src="{{ asset('js/easy-responsive-tabs.js') }}"></script>
<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<!-- js for smooth scrollings -->
<script src="{{ asset('js/smoothscroll.min.js') }}"></script>
<!-- flexisel -->
<script src="{{ asset('js/jquery.flexisel.js') }}"></script>
<script src="{{ asset('js/move-top.js') }}"></script>
<script src="{{ asset('js/easing.js') }}"></script>
<!-- Scrolling Nav JavaScript --> 
<script src="{{ asset('js/scrolling-nav.js') }}"></script>
<script src="{{ asset('js/templatejs.js') }}"></script>
{{-- Select 2 --}}
{{-- reCAPTCHA --}}
<script src='https://www.google.com/recaptcha/api.js?render=6LcI-3gUAAAAAAB-kIg6LSLu9CCdHu4dTYV8jV7l'></script>
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

@yield('topjs')
</head>
<!-- Head -->

<body>

<div class="container">
    @yield('content')
</div>

@yield('bottomjs')

{{-- Mail Chimp --}}
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"ca52411df38861291bb6b570b","lid":"98e9b708c6"}) })</script>

{{-- To fade away all alerts --}}
<script>
	setTimeout(function(){
		document.getElementById('alert-div').style.display="none";
	}, 5000);
</script>

</body>
</html>