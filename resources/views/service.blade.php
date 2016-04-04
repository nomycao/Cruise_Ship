@extends('skeleton')
@section('title', 'Home')

@section('body')
        <div id="map"></div>
@endsection

@section('body-scripts')
<div class="section map">
    <div class="vcenter-container">
        <div class="text-center">
            <img src="/img/worldmap.png" alt="Map" id="worldMap">
        </div>
    </div>
    @include('bottombar')
</div>
@endsection