@extends('layout')

@section('content')
	<div class="column is-8 container" style="background-color: white !important; padding-top: 0 !important">
		<div class="tile is-ancestor is-parent">
		<div class="tile is-3" style="padding: 7px; padding-right: 0; background-color: white; 
		border: 1px solid #dddddd; margin-top: 10px;">
		<div class="departments-toggle is-hidden-desktop
		{{ Request::path() ==  'departments' ? 'hide' : ''  }}">
            	Departments
            	<img src="{{asset('img/dropdown.svg')}}" style="width: 15px; float:right; margin: 6px; margin-right: 10px !important;">
            	<img src="{{asset('img/dropup.svg')}}" style="width: 15px; float:right; margin: 6px; margin-right: 10px !important;" class="hide">
            </div>
			<aside class="menu departments-menu
			{{ Request::path() !==  'departments' ? 'is-hidden-mobile' : ''  }}" style="margin-top: 7px;">
				<p class="menu-label">
	    				Engineering Deptartments
	  			</p>
				<ul class="menu-list">
				    	<li><a href="/departments/civil" class=" 
				    	{{ Request::path() ==  'departments/civil' ? 'active' : ''  }}">Civil</a></li>
				   	<li><a href="/departments/mech" class=" 
				    	{{ Request::path() ==  'departments/mech' ? 'active' : ''  }}">Mechnical</a></li>
				    	<li><a href="/departments/mecha" class=" 
				    	{{ Request::path() ==  'departments/mecha' ? 'active' : ''  }}">Mechatronics</a></li>
				    	<li><a href="/departments/ec" class=" 
				    	{{ Request::path() ==  'departments/ec' ? 'active' : ''  }}">Electronics</a></li>
				    	<li><a href="/departments/ep" class=" 
				    	{{ Request::path() ==  'departments/ep' ? 'active' : ''  }}">Electrical Power</a></li>
				    	<li><a href="/departments/ceit" class=" 
				    	{{ Request::path() ==  'departments/ceit' ? 'active' : ''  }}">Computer Engineering & Information Technology</a></li>
				    	<li><a href="/departments/che" class=" 
				    	{{ Request::path() ==  'departments/che' ? 'active' : ''  }}">Chemical</a></li>
				    	<li><a href="/departments/archi" class=" 
				    	{{ Request::path() ==  'departments/archi' ? 'active' : ''  }}">Architecture</a></li>
				</ul>
				<p class="menu-label">
	    				Supporting Deptartments
	  			</p>
	  			<ul class="menu-list">
					<li><a href="/departments/ir" class=" 
				    	{{ Request::path() ==  'departments/ir' ? 'active' : ''  }}">International Relation</a></li>
					<li><a href="/departments/maths" class=" 
				    	{{ Request::path() ==  'departments/maths' ? 'active' : ''  }}">Mathematics</a></li>
					 <li><a href="/departments/eng" class=" 
				    	{{ Request::path() ==  'departments/eng' ? 'active' : ''  }}">English</a></li>
					<li><a href="/departments/myan" class=" 
				    	{{ Request::path() ==  'departments/myan' ? 'active' : ''  }}">Myanmar</a></li>
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