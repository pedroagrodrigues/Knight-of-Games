<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@if (Auth::user()->role_id ===3)

<div id="hdSpace">
    <div class="member-header">
        <div id="hd">
            <a href="/" class="logo">&nbsp;</a>

            <div class="aro-genre-list">
                <ul id='link-table'>
                    <li>
                        <a class="link" href="/products">
                            Produtos
                        </a>
                    </li>
                    <li>
                        <a class="link" href="/companies">
                            Sites
                        </a>
                    </li>
                    <li>
                        <a class="link" href="/users">
                            Utilizadores
                        </a>
                    </li>
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
@endif