@extends('skeleton')
@section('title', 'Menu')

@section('body')
    <div class="section food first">
        <div class="vcenter-container">
            <div class="text-center">
                <div class="title l1 cursive">Food</div>
                <div class="title l2 cursive">on</div>
                <div class="title l3 cursive">Cruise Ship</div>
            </div>
        </div>
        @include('bottombar')
    </div>
    <div class="food second">
        <div class="row" id="menuList">
        <h1>Featured Dishes</h1>
        <div class="row" data-equalizer>
            <div class="medium-6 columns" id="eq1">
                <img src="/img/salmon.png" alt="Atlantic Salmon" class="featuredImg" data-equalizer-watch data-swap-img="/img/salmon1.png">
            </div>
            <div class="medium-6 columns">
                <div class="menu-textbox" data-equalizer-watch>
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
        <div class="row" data-equalizer>
            <div class="medium-6 columns" id="eq2">
                <div class="menu-textbox"  data-equalizer-watch>
                    <h3>Wild Freshwater Catfish</h3>
                    <p>They might fulfill your daily minimum omega-3 requirement, but catfish are
                        not that clean. Because catfish are bottom feeders who swim in shallow, muddy
                        river water, they are typically exposed to toxins like man-made polychlorinated
                        biphenyls (PCBs) that have been found to influence cognitive deficiencies
                        in exposed infants as well as affect hormone metabolism in adult</p>
                    <h2>$35.50</h2>
                </div>
            </div>
            <div class="medium-6 columns" did="eq3" data-equalizer-watch>
                <img src="/img/catfish.png" alt="Wild Freshwater Catfish" class="featuredImg"  data-equalizer-watch data-swap-img="/img/catfish1.png">
            </div>
        </div>
        <div class="row" data-equalizer>
            <div class="medium-6 columns">
                <img src="/img/tuna.png" alt="Light Canned Tuna" class="featuredImg"  data-equalizer-watch data-swap-img="/img/tuna1.png">
            </div>
            <div class="medium-6 columns">
                <div class="menu-textbox"  data-equalizer-watch>
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
        <div class="row" data-equalizer>
            <div class="medium-6 columns" id="eq4">
                <div class="menu-textbox" data-equalizer-watch>
                    <h3>Wild Atlantic Cod</h3>
                    <p>While you won’t be boosting immunity with this fish, research does suggest a regular
                        serving of Atlantic cod may help you stay trim. An eight-week study of 120 men published
                        in Nutrition, Metabolism & Cardiovascular Diseases found that when combined
                        with a calorie-restricted diet, participants who consumed cod I've times a week lost more
                        weight and visceral fat and showed better improvements in their blood pressure than
                        those who ate cod just one or three times per wee</p>
                    <h2>$39.60</h2>
                </div>
            </div>
            <div class="medium-6 columns">
                <img src="/img/cod.png" alt="Wild Atlantic Cod" class="featuredImg" data-equalizer-watch data-swap-img="/img/cod1.png">
            </div>
        </div>
        </div>
        <div id="smallMenu">
            <h1>Food Menu</h1>
            <div class="row">
                <div class="small-12 medium-6 columns">
                    <img src="/img/drinkIcon.png" alt="Drinks" class="icon">
                    <div class="row item">
                        <div class="small-3 columns">
                            <img src="/img/pineappleJuice.png" alt="Pineapple Juice">
                        </div>
                        <div class="small-9 columns">
                            <div class="name">
                                Pineapple Juice
                            </div>
                            <div class="price">
                                $13.50
                            </div>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="small-3 columns">
                            <img src="/img/softDrink.png" alt="Soft Drinks">
                        </div>
                        <div class="small-9 columns">
                            <div class="name">
                                Soft Drinks
                            </div>
                            <div class="price">
                                $11.50
                            </div>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="small-3 columns">
                            <img src="/img/carloRosee.png" alt="Carlo Rosee">
                        </div>
                        <div class="small-9 columns">
                            <div class="name">
                                Carlo Rosee
                            </div>
                            <div class="price">
                                $17.50
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-12 medium-6 columns">
                    <img src="/img/steakIcon.png" alt="Food" class="icon">
                    <div class="row item">
                        <div class="small-3 columns">
                            <img src="/img/grilledBeef.png" alt="Pineapple Juice">
                        </div>
                        <div class="small-9 columns">
                            <div class="name">
                                Grilled Beef
                            </div>
                            <div class="price">
                                $37.50
                            </div>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="small-3 columns">
                            <img src="/img/italianSausage.png" alt="Italian Sausage">
                        </div>
                        <div class="small-9 columns">
                            <div class="name">
                                Italian Sausage
                            </div>
                            <div class="price">
                                $47.50
                            </div>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="small-3 columns">
                            <img src="/img/chickenTomato.png" alt="Chicken with Tomato">
                        </div>
                        <div class="small-9 columns">
                            <div class="name">
                                Chicken with Tomato
                            </div>
                            <div class="price">
                                $44.50
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="preload">
        <img src="/img/catfish1.png">
        <img src="/img/cod1.png">
        <img src="/img/tuna1.png">
        <img src="/img/salmon1.png">
    </div>
    <div class="footer">
    </div>

@endsection

@section('body-scripts')
    <script>
        $('.featuredImg').hover(function(){
            temp = $(this).attr('src');
            $(this).attr('src', $(this).attr('data-swap-img'));
            $(this).attr('data-swap-img', temp);
        });
    </script>
@endsection