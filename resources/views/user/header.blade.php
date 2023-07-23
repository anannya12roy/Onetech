<header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>{{ $setting['phn'] }}</div>
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="">{{ $setting['email'] }}</a></div>
                    <div class="top_bar_content ml-auto">

                        <div class="top_bar_menu">
                            <ul class="standard_dropdown top_bar_dropdown">
                                {{-- <li>
                                    <a href="#">Profile<i class="fas fa-chevron-down"></i></a>

                                </li> --}}

                            </ul>
                        </div>
                        <div class="top_bar_user">

                            @if (Route::has('login'))
                            @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                            <div><div class="user_icon"><img src="images/user.svg" alt=""></div><a href="{{url('/profile')}}">Profile</a></div>

                            <div><a href="route('logout')"
                                onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a></div>
                        </form>
                        @else

                            <div> <div class="user_icon"><img src="images/user.svg" alt=""></div><a href="{{ route('register') }}">Register</a></div>

                            <div> <div class="user_icon"><img src="images/user.svg" alt=""></div><a href="{{ route('login') }}">Sign in</a></div>
                            @endauth
                            @endif
                            {{-- @if (Route::has('login'))
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li><a href="{{url('profile')}}"><i
                                                class="fa fa-user"></i>Profile</a></li>
                                    <li><a href="route('logout')"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();"><i
                                                class="fa fa-user-o"></i> Logout</a></li>


                                </form>
                            @else
                                <li><a href="{{ route('login') }}"><i class="fa fa-user-o"></i> Login</a></li>
                                <li><a href="{{ route('register') }}"><i class="fa fa-user-o"></i> Registration</a></li>

                            @endauth
                        @endif --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Main -->

    <div class="header_main">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                        <div class="logo"><a href="#">OneTech</a></div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="#" class="header_search_form clearfix">
                                    <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list">
                                            <span class="custom_dropdown_placeholder clc">All Categories</span>
                                            <i class="fas fa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                <li><a class="clc" href="#">All Categories</a></li>
                                                <li><a class="clc" href="#">Computers</a></li>
                                                <li><a class="clc" href="#">Laptops</a></li>
                                                <li><a class="clc" href="#">Cameras</a></li>
                                                <li><a class="clc" href="#">Hardware</a></li>
                                                <li><a class="clc" href="#">Smartphones</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wishlist -->
                <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist_icon"><img src="{{ asset('images/heart.png') }}" alt=""></div>
                            <div class="wishlist_content">
                                <div class="wishlist_text"><a href="{{url('/all-wishlist')}}">Wishlist</a></div>
                                <div class="wishlist_count">{{  $wishlists  }}</div>
                            </div>
                        </div>

                        <!-- Cart -->
                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <img src="{{ asset('images/cart.png') }}" alt="">
                                    <?php
                                            $totalitem = 0;
                                            ?>
                                        @foreach ($carts as $cart)
                                                <?php
                                                $totalitem =$totalitem +  $cart->quantity;
                                                ?>
                                        @endforeach
                                    <div class="cart_count"><span>{{$totalitem}}</span></div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text"><a href="{{url('/view-cart')}}">Cart</a></div>

                                    <div class="cart_price">$10</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->



    <!-- Menu -->


</header>
