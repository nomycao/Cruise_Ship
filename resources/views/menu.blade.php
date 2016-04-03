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
        <div class="section food second">
            <div class="foodscroll">
                <h1>Featured Dishes</h1>
                <div class="row" data-equalizer>
                    <div class="medium-6 columns" id="eq1" data-equalizer-watch>
                        <img src="/img/salmon.png" alt="Atlantic Salmon">
                    </div>
                    <div class="medium-6 columns" data-equalizer-watch>
                        <div class="menu-textbox">
                            <h3>Farmed Atlantic Salmon</h3>
                            <p>Those high levels of omega-3s come with a cost: Soy-fed, farm-raised salmon
                                (99 percent of Atlantic salmon is now farm-raised due to overfishing and pollution)
                                is also packed with around 1,900 mg omega-6s, which actually increase
                                the inflammation omega-3s combat. Also: Farmed salmon are usually dyed
                                pink, have been found to be high in PCBs, and have only one-fourth the belly-
                                flattening vitamin D of their wild cousins.</p>
                            <h2>$42.70</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns" id="eq2" data-equalizer-watch>
                        <div class="menu-textbox">
                            <h3>Wild Freshwater Catfish</h3>
                            <p>They might fulfill your daily minimum omega-3 requirement, but catfish are
                                not that clean. Because catfish are bottom feeders who swim in shallow, muddy
                                river water, they are typically exposed to toxins like man-made polychlorinated
                                biphenyls (PCBs) that have been found to influence cognitive deficiencies
                                in exposed infants as well as affect hormone metabolism in adult</p>
                            <h2>$35.50</h2>
                        </div>
                    </div>
                    <div class="medium-6 columns" did="eq3" ata-equalizer-watch>
                        <img src="/img/catfish.png" alt="Wild Freshwater Catfish">
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns" data-equalizer-watch>
                        <img src="/img/tuna.png" alt="Light Canned Tuna">
                    </div>
                    <div class="medium-6 columns" data-equalizer-watch>
                        <div class="menu-textbox">
                            <h3>Light Canned Tuna</h3>
                            <p>Canned tuna is a pantry staple because it’s a quick, cheap source of protein and rich in vitamins
                                and minerals. It’s also a prime source of one of the two active omega-3 fatty acids: docosahexaenoic
                                acid (DHA). A study in the Journal of Lipid Research showed that omega-3 fatty acid supplementation
                                had the profound ability to turn off abdominal fat genes. DHA, specifically, can be
                                40 to 70 percent more effective than it’s sister omega-3, EPA, at down regulating fat genes in the
                                abdomen, which can prevent belly fat cells from expanding in size.</p>
                            <h2>$32.80</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns" id="eq4" data-equalizer-watch>
                        <div class="menu-textbox">
                            <h3></h3>
                            <p>While you won’t be boosting immunity with this fish, research does suggest a regular
                                serving of Atlantic cod may help you stay trim. An eight-week study of 120 men published
                                in Nutrition, Metabolism & Cardiovascular Diseases found that when combined
                                with a calorie-restricted diet, participants who consumed cod I've times a week lost more
                                weight and visceral fat and showed better improvements in their blood pressure than
                                those who ate cod just one or three times per wee</p>
                            <h2>$39.60</h2>
                        </div>
                    </div>
                    <div class="medium-6 columns" data-equalizer-watch>
                        <img src="/img/cod.png" alt="Wild Atlantic Cod">
                    </div>
                </div>
            </div>
        </div>
        <div class="section food third">
            <div class="row">
                <div class="medium-6 columns">
                    <div class="row">
                        Pineapple Juice
                    </div>
                    <div class="row">
                        $13.50
                    </div>
                </div>
                <div class="medium-6 columns">
                    <div class="row">
                        Grilled Beef
                    </div>
                    <div class="row">
                        $37.50
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="medium-6 columns">
                    <div class="row">
                        Soft Drinks
                    </div>
                    <div class="row">
                        $11.50
                    </div>
                </div>
                <div class="medium-6 columns">
                    <div class="row">
                        Italian Sausages
                    </div>
                    <div class="row">
                        $47.50
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="medium-6 columns">
                    <div class="row">
                        Carlo Rosee
                    </div>
                    <div class="row">
                        $17.50
                    </div>
                </div>
                <div class="medium-6 columns">
                    <div class="row">
                        Chicken with Tomato
                    </div>
                    <div class="row">
                        $44.50
                    </div>
                </div>
            </div>
            <div class="footer">
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