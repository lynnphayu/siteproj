@extends('layout')

@section('content')
	<div class="column is-8 container">
		<div class="tile is-ancestor is-parent">
		<div class="tile is-3" style="padding: 0; border-right: 1px solid #cccccc">
			<aside class="menu">
				<ul class="menu-list">
				    	<li><a href="/depertments/civil" class=" 
				    	{{ Request::path() ==  'depertments/civil' ? 'is-active' : ''  }}">Civil</a></li>
				   	<li><a href="/depertments/mech">Mechnical</a></li>
				    	<li><a href="/depertments/mecha">Mechatronics</a></li>
				    	<li><a href="/depertments/ec">Electronics</a></li>
				    	<li><a href="/depertments/ep">Electrical Power</a></li>
				    	<li><a href="/depertments/ceit">Computer Engineering and Information Technology</a></li>
				    	<li><a href="/archi">Architecture</a></li>
				</ul>
		</aside>
		</div>
		@yield('info')
	</div>
	<style type="text/css">
		li:hover{
			border-right: 4px solid #3273dc;
		}
		li:hover a{
			color: #3273dc !important;
		}
		.is-active{
			background-color: #3273dc !important;
			border-bottom-right-radius: 0 !important;
			border-top-right-radius: 0 !important;
		}
	</style>
@endsection