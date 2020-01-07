<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

<div id="hdSpace">
    <div class="member-header">
        <div id="hd">
            <a href="/" class="logo" style="color: transparent">&nbsp;</a>

            <div class="aro-genre-list">
                <ul id='link-table'>
                    @if (Auth::user()->role_id === 2 || Auth::user()->role_id === 3)
                    <li>
                        <a class="link" href="/products">
                            Produtos
                        </a>
                    </li>
                    @endif
                    @if (Auth::user()->role_id === 2 || Auth::user()->role_id === 3)
                    <li>
                        <a class="link" href="/companies">
                            Companhias
                        </a>
                    </li>
                    @endif
                    @if (Auth::user()->role_id === 2 || Auth::user()->role_id === 3)
                    <li>
                        <a class="link" href="/websites">
                            Sites
                        </a>
                    </li>
                    @endif
                    @if (Auth::user()->role_id === 2 || Auth::user()->role_id === 3)
                    <li>
                        <a class="link" href="/genres">
                            Genres
                        </a>
                    </li>
                    @endif
                    @if (Auth::user()->role_id ===3)
                    <li>
                        <a class="link" href="/users">
                            Utilizadores
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            <div id='page-title'>
                Dashboard
                <div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='content'>
    @yield('content')
</div>