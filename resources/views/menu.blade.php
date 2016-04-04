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
                    <h3>Slow Roasted Atlantic Salmon</h3>
                    <p>The Atlantic salmon is a species unto itself (Salmo salar). Found in the cold waters of the North Atlantic, they migrate to an area near the coast of Greenland, and after hanging out for a year or more, return home to the rivers of their origin. Rich in beneficial Omega 3 fatty acids, and set apart by its delicate, pink flesh, Atlantic salmon is a treat for both your body and your senses.

                        <br><br>Salmon filet served on a drizzle of creamy white dill sauce, with buttered green beans and steamed rice.</p>
                    <h2>$18</h2>
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
                    <h2>$16</h2>
                </div>
            </div>
            <div class="medium-6 columns" did="eq3" data-equalizer-watch>
                <img src="/img/catfish.png" alt="Wild Freshwater Catfish" class="featuredImg"  data-equalizer-watch data-swap-img="/img/catfish1.png">
            </div>
        </div>
        <div class="row" data-equalizer>
            <div class="medium-6 columns">
                <img src="/img/tuna_tartare.jpg" alt="Tuna Tartare" class="featuredImg"  data-equalizer-watch data-swap-img="/img/tuna1.png">
            </div>
            <div class="medium-6 columns">
                <div class="menu-textbox"  data-equalizer-watch>
                    <h3>Tuna Tartare</h3>
                    <p>The Atlantic bluefin tuna is one of the largest, fastest, and most gorgeously colored of all the world’s fishes. Unfortunately for the species however, bluefin meat also happens to be regarded as surpassingly delicious, and overfishing has driven their numbers to critically low levels. Luckily our providers follow an impeccable set of rules, delivering the most succulent meat possible, with a keen eye to conservation.
                        <br><br>
                        Tuna tartare dressed with lime, ginger, tamari and sesame served with crispy toasts, avocado, mango and micro mix salad.</p>
                    <h2>$14</h2>
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
                    <h2>$20</h2>
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
                                $6
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
                                $4
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
                                $9
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
                                $14
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
                                $19
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
                                $18
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