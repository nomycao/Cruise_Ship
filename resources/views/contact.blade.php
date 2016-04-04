@extends('skeleton')
@section('title', 'Home')

@section('body')
    <div id="map"></div>
@endsection

@section('body-scripts')
    <div class="section contact">
        <div class="vcenter-container">
            <div class="container text-center">
                <div class="row ">
                    <div class="medium-6 columns">
                        <h1 class="title">Contact Us</h1>
                        <p class="subtitle">Questions or comments? Fill out our contact form and we'll get back to you as soon as possible.</p>
                    </div>
                    <div class="medium-6 columns">
                        <form>
                            <label>Name
                                <input type="text">
                            </label>
                            <label>Email
                                <input type="email">
                            </label>
                            <label>Message
                                <textarea></textarea>
                            </label>
                            <button class="button">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('bottombar')
    </div>
@endsection