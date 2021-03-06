@section('includes')
<title>@yield('title')</title>

<!-- CSS -->
<link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('/assets/css/theme.css') }}" rel="stylesheet" type="text/css"/>

<!-- JS -->
<script src="{{ asset('/assets/js/app.js') }}"></script>

<script>
    $(document).ready(function() {

        $("#progress-brand").hover(function() {
            // On hover
            $("#progress-brand i").addClass('fa-spin')
        }, function() {
            // End hover
            $("#progress-brand i").removeClass('fa-spin')
        })

    })
</script>
@endsection