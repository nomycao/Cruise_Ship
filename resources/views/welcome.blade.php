@extends('skeleton')
@section('title', 'Home')

@section('body')
    <div class="section home">
        <div class="vcenter-container">
            <div class="text-center">
                <h1 class="title l2">Welcome to Cruise Ship</h1>
                <h1 class="title l2">Book a Ticket and Enjoy the Journey</h1>
                <p class="subtitle">We aim to bring you a fresh and fantastic feeling<br/>
                    with interesting ocean knowledge</p>
            </div>
        </div>
        @include('bottombar')
    </div>
@endsection