@include('layout.head')
@include('layout.sidebar')
<div class="container-full">
	<div id="main" class="row">
    	@yield('content')
     </div>
</div>
@include('layout.footer')