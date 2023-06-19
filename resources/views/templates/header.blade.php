<header class="header">
    <div class="header-inner container">
        <div class="header-branding col-4">
            <a href="{{ route('index') }}">
                <h1><?php echo env('APP_NAME'); ?></h1>
            </a>
        </div>
        <div class="header-nav col-8">
            <ul>
                @if(Auth::check())
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}">Logout</a>
                    </li>                    
                @else
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>