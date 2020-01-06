<link href="{{ asset('css/banner.css') }}" rel="stylesheet">

<div class="banner-wrapper">
    
    <div class="page-logo-wrapper">
        <a href="/">
            <div class="page-logo-base"></div>
            <div class="page-logo"></div>
        </a>
    </div>
    <!-- <div class="social-wrapper"> -->
        <!-- <div class="social-base"></div> -->
    <!-- </div> -->
    <div class="search-wrapper">
        <div class='search-bar'>

        <div class="input-with-icon">
            <div class="icon">&#xf002;</div>
            <div class="input-field-controler">
                    <div class="input-field-div">
                        <form action="">
                            <input class="input-field" type="search" name="search" placeholder="Search" autofocus>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="links-wrapper">
            @guest
                @if (Route::has('login'))
                    <div class="bnt-container">
                        <a href="{{ route('login') }}">
                            <div class="bnt">
                                {{ __('Login') }}
                            </div>        
                        </a>
                        @endif
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <div class="bnt">
                                    {{ __('Register') }}
                                </div>
                            </a>
                        @endif
                    </div>
                @else
                    <div class="bnt-container">
                        @if (Auth::user()->role_id !==1)
                        <a href='/products'>
                            <div class="bnt">
                                dashboard
                            </div>
                        </a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
                            <div class="bnt">
                                {{ __('Logout') }}
                            </div>
                        </a>
                    </div>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endguest
            </div>
    </div>
</div>


