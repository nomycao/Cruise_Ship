@extends('skeleton')
@section('title', 'Menu')

@section('body')
    <div id="fullpage">
        <div class="section food first">
            <div class="text-center">
                <div class="title l1">Food</div>
                <div class="title l2">on</div>
                <div class="title l3">Cruise Ship</div>
            </div>
        </div>
        <div class="section food second">Section2</div>
        <div class="section">Section3</div>
    </div>
@endsection

@section('body-scripts')
    <script>
        $(document).ready(function() {
            $('#fullpage').fullpage();
        });
    </script>
@endsection