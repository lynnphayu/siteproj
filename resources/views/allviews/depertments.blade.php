@extends('layout')

@section('content')
	<div class="column is-8 container" style="background-color: white !important; padding-top: 0 !important">
		<div class="tile is-ancestor is-parent">
		<div class="tile is-3" style="padding: 8px; padding-right: 0; border-right: 1px solid #cccccc;  background-color: #dddddd;">
		<div class="departments-toggle is-hidden-desktop">
            	Departments
            	<img src="{{asset('img/dropdown.svg')}}" style="width: 15px; float:right; margin: 5px;">
            	<img src="{{asset('img/dropup.svg')}}" style="width: 15px; float:right; margin: 5px;" class="hide">
            </div>
			<aside class="menu departments-menu
			{{ Request::path() !==  'depertments' ? 'is-hidden-mobile' : ''  }}">
				<p class="menu-label">
	    				Engineering Deptartments
	  			</p>
				<ul class="menu-list">
				    	<li><a href="/depertments/civil" class=" 
				    	{{ Request::path() ==  'depertments/civil' ? 'active' : ''  }}">Civil</a></li>
				   	<li><a href="/depertments/mech">Mechnical</a></li>
				    	<li><a href="/depertments/mecha">Mechatronics</a></li>
				    	<li><a href="/depertments/ec">Electronics</a></li>
				    	<li><a href="/depertments/ep">Electrical Power</a></li>
				    	<li><a href="/depertments/ceit">Computer Engineering & Information Technology</a></li>
				    	<li><a href="/depertments/che">Chemical</a></li>
				    	<li><a href="/depertments/archi">Architecture</a></li>
				</ul>
				<p class="menu-label">
	    				Supporting Deptartments
	  			</p>
	  			<ul class="menu-list">
					    	<li><a href="/depertments/ir">International Relation</a></li>
					   	<li><a href="/depertments/maths">Mathematics</a></li>
					    	<li><a href="/depertments/eng">English</a></li>
					    	<li><a href="/depertments/myan">Myanmar</a></li>
				</ul>
		</aside>
		</div>
		@yield('info')
	</div>
	<style type="text/css">
		.menu-list>li:hover{
			border-right: 4px solid #3273dc;
		}
		.menu-list>li:hover a{
			color: #3273dc !important;
		}
		.active{
			color: white !important;
			background-color: #3273dc !important;
			border-bottom-right-radius: 0 !important;
			border-top-right-radius: 0 !important;
		}
	</style>
@endsection