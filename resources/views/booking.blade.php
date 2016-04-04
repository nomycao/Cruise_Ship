@extends('skeleton')
@section('title', 'Tickets')

@section('body')
    <div class="tickets">
            <div class="container">
                <div class="row booking">
                    <div class="medium-7 large-8 columns text-left">
                        <h1 class="title">Book a Cruise</h1>
                    </div>
                    <div class="small-12 columns">
                        <div class="bookingBox">
                            <h3>Alaska</h3>
                            <table>
                                <thead>
                                    <th>Date</th>
                                    <th>Single Ticket</th>
                                    <th>Couples Ticket (x2)</th>
                                    <th>Family Ticket (x3)</th>
                                    <th>Buy</th>
                                </thead>
                                <tr>
                                    <td>May 12, 2016</td>
                                    <td>$199</td>
                                    <td>$299</td>
                                    <td>$399</td>
                                    <td><input type="number" value="1" class="inline-form-elm"><button class="button">Buy</button></td>
                                </tr><tr>
                                    <td>June 21, 2016</td>
                                    <td>$199</td>
                                    <td>$299</td>
                                    <td>$399</td>
                                    <td><input type="number" value="1" class="inline-form-elm"><button class="button">Buy</button></td>
                                </tr>
                            </table>
                            <h3>Australia</h3>
                            <table>
                                <thead>
                                <th>Date</th>
                                <th>Single Ticket</th>
                                <th>Couples Ticket (x2)</th>
                                <th>Family Ticket (x3)</th>
                                <th>Buy</th>
                                </thead>
                                <tr>
                                    <td>June 6, 2016</td>
                                    <td>$229</td>
                                    <td>$329</td>
                                    <td>$429</td>
                                    <td><input type="number" value="1" class="inline-form-elm"><button class="button">Buy</button></td>
                                </tr><tr>
                                    <td>July 15, 2016</td>
                                    <td>$229</td>
                                    <td>$329</td>
                                    <td>$429</td>
                                    <td><input type="number" value="1" class="inline-form-elm"><button class="button">Buy</button></td>
                                </tr><tr>
                                    <td>August 7, 2016</td>
                                    <td>$229</td>
                                    <td>$329</td>
                                    <td>$429</td>
                                    <td><input type="number" value="1" class="inline-form-elm"><button class="button">Buy</button></td>
                                </tr>
                            </table>
                            <h3>Portugal</h3>
                            <table>
                                <thead>
                                <th>Date</th>
                                <th>Single Ticket</th>
                                <th>Couples Ticket (x2)</th>
                                <th>Family Ticket (x3)</th>
                                <th>Buy</th>
                                </thead>
                                <tr>
                                    <td>May 12, 2016</td>
                                    <td>$199</td>
                                    <td>$299</td>
                                    <td>$399</td>
                                    <td><input type="number" value="1" class="inline-form-elm"><button class="button">Buy</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @include('bottombar')
    </div>
@endsection