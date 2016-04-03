@extends('skeleton')
@section('title', 'Home')

@section('body')
    <div id="fullpage">
        <div class="section home">
            <div class="row booking">
                <div class="medium-7 large-8 columns text-left">
                    <h1>Book a Cruise</h1>
                </div>
                <div class="medium-5 large-4 columns">
                    <div class="bookingBox">
                        <div class="row columns">
                            <label>Destination
                                <select>
                                    <option selected="selected" disabled>-- Pick One --</option>
                                    <option>Option1</option>
                                    <option>Option2</option>
                                </select>
                            </label>
                        </div>
                        <div class="row">
                            <div class="small-6 columns">
                                <label>From
                                    <input type="date">
                                </label>
                                </div>
                            <div class="small-6 columns">
                                <label>To
                                    <input type="date">
                                </label>
                            </div>
                        </div>
                        <div class="row columns">
                            <button type="button" class="button expanded">Find a Cruise</button>
                        </div>
                    </div>
                </div>
            </div>
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