@include('layouts.header')
@include('layouts.sidebar')
@include('layouts.includes')
<!doctype html>
<html>
<head>
@yield('includes')
</head>
<body>
@yield('header')

<div class="container-fluid">
    <div class="row">
        @yield('sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>