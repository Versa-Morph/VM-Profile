
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- bootstrap grid css -->
<link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap-grid.css') }}">
<!-- font awesome css -->
<link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}">
<!-- swiper css -->
<link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
<!-- fancybox css -->
<link rel="stylesheet" href="{{ asset('assets/css/plugins/fancybox.min.css') }}">
<!-- ashley scss -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/x-icon" href="#!"/>

@stack('style-link')

@stack('style')
