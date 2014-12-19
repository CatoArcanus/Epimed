<html>
	<head>
		<title>Epimed</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
		{{-- dynamically loaded in pages need access to jquery, so we have to put this at the top--}}
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		{{ HTML::style('/css/custom.css') }}
	</head>
	<body>
		{{--
		<div id="environment">
			<span><b>Environment Type:</b> {{ App::environment(); }}</span>
		</div>
		--}}
		<div id="wrapper">
			<header id="header">
				{{-- show a rudimentary navbar--}}
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<a class="navbar-brand" href="{{ route('base') }}"> Epimed Project Manager </a>
					</div>
					@if(Auth::check())
						<ul class="nav navbar-nav">
							<li>
								<a class="navbar-brand" href="{{ route('profile') }}"><i class="fa fa-gear"></i> Profile </a>
							</li>
						</ul>
						<ul class="nav navbar-nav">
							<li>
								<a class="navbar-brand" href="{{ route('users') }}"><i class="fa fa-user"></i> Users </a>
							</li>
						</ul>
						<ul class="nav navbar-nav pull-center">
							<li>
								<a class="navbar-brand" href="{{ route('index_batch_history') }}"><i class="fa fa-book"></i> Batch History Form </a>
							</li>
						</ul>
						<ul class="nav navbar-nav pull-center">
							<li>
								<a class="navbar-brand" href="{{ route('index_product_build_form') }}"><i class="fa fa-archive"></i> Product Build Forms</a>
							</li>
						</ul>
						<ul class="nav navbar-nav pull-center">
							<li>
								<a class="navbar-brand" href="{{ route('bill_of_materials') }}"><i class="fa fa-list"></i> Bill of Materials</a>
							</li>
						</ul>
						<ul class="nav navbar-nav pull-right">
							<li>
								<a class="navbar-brand" href="{{ route('logout') }}">Logout <i class="fa fa-sign-out"></i></a>
							</li>
						</ul>
					@endif
				</nav>
							
				{{-- grab the appropriate header --}}
				<div id="heading">
					@section('header')
						{{--<h1 id="top"><a href="{{ route('base') }}">Epimed ({{ App::environment (); }})</a></h1>--}}
					@show
				</div>
				{{-- check for flash notification message --}}
				@if(Session::has('flash_notice'))
					<?php $flash_type = Session::get('flash_type'); ?>
					@if($flash_type === 'success')
						<div id="flash_notice" class="alert alert-success">
					@elseif($flash_type === 'failure')
						<div id="flash_notice" class="alert alert-danger">
					@else
						<div id="flash_notice" class="alert alert-info">
					@endif
						{{ Session::get('flash_notice') }}</div>
				@endif
							
			</header>
			
			{{-- grab the appropriate content --}}
			<div id="indent" style="padding-left: 1.0em;
									padding-Right: 1.0em;">
				<content id="content">
					@yield ('content')
				</content>
			</div>		
			{{-- display the footer --}}
			<h1 id="bottom"></h1>
		</div>
		<footer id="footer" class="well nomargin">
			<p id="footer_legal" >&copy; 2015 Epimed International  All rights Reserved. 
				<span class="pull-right">
					<a href="{{ URL::to ('about') }}">About<a/> | 
					<a href="{{ URL::to ('about/contact') }}">Contact</a> |
					<a href="{{ URL::to ('about/faq') }}">FAQ</a> |  
					<a href="{{ URL::to ('about/help') }}">Help</a> | 
					<a href="{{ URL::to ('about/terms') }}">Terms &amp; Conditions</a>
				</span>
			</p>
		</footer>
	</body>
</html>