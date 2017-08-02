<!DOCTYPE html>
<html >
<head>
<title >Directive</title>
@include('directive.fragments.headTag')
</head>
<body>
	<div id="wrapper">
            @include('directive.fragments.bodyHeader')
		<div id="page-wrapper">
			<div class="container-fluid">
			 @yield('content')
			</div>
		</div>
        </div>
	<!--Jquery Bootstrap -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<!--DatePicker ClockPicker  -->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-clockpicker.min.js')}}"></script>
<!--Datatables  -->

<script type="text/javascript"
src="{{asset('vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
<script
src="{{asset('vendors/datatables/dataTables.bootstrap.js')}}"></script>
      
             @yield('scripts')
</body>
</html>