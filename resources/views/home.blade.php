<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@if (Auth::user()->role_id ===3)

<div id="hdSpace">
    <div class="member-header">
        <div id="hd">
            <a href="/" class="logo">&nbsp;</a>

            <div class="aro-genre-list">
                <ul id='link-table'>
                    <li>
                        <a class="link" href="/">Home</a>
                    </li>
                    <li>
                        <a class="link" href="">
                            Cenas
                        </a>
                    </li>
                    <li>
                        <a class="link" href="">
                            Coisas
                        </a>
                    </li>
                    <li>
                        <a class="link" href="">
                            Mais Cenas
                        </a>
                    </li>
                    <li>
                        <a class="link" href="">
                            Mais coisas
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


<div class="responsive-account-container">
    <div>
        <h1 class="account-header">Account</h1>
        <div class="account-messages-container"></div>
    </div>
</div>
@endif