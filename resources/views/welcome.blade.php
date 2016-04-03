@extends('skeleton')
@section('title', 'Home')

@section('body')
    <div id="fullpage">
        <div class="section home">
            <img src="/img/logo_cruship.png" alt="CruiseShip" id="midLogo">
        </div>
    </div>
@endsection

@section('body-scripts')
    <script>
        $(document).ready(function() {
            $('#fullpage').fullpage({ scrollOverflow: true });
        });
    </script>
@endsection