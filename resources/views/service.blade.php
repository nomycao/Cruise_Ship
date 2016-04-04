@extends('skeleton')
@section('title', 'Service')

@section('body')
<div class="section map">
    <div class="vcenter-container">
        <div class="text-center">
            <img src="/img/worldmap.png" alt="Map" id="worldMap">
        </div>
    </div>
    @include('bottombar')
</div>
@endsection