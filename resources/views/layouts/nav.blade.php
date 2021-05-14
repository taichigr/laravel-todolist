<nav class="navbar navbar-dark rgba-deep-orange-strong">
    <a href="#" class="navbar-brand">Todo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu1"
            aria-controls="navmenu1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu1">
        <div class="navbar-nav">

            <li>
                <a class="nav-item nav_link nav-link text-center text-white" href="{{ route('home.index') }}">Home</a>
            </li>
            <li>
                <a class="nav-item nav_link nav-link text-center text-white" href="{{ route('register') }}">登録</a>
            </li>
            <li>
                <a class="nav-item nav_link nav-link text-center text-white" href="{{ route('login') }}">ログイン</a>
            </li>
            <li>
                <button form="logout-button" class="logout_button nav-item nav-link nav_link dropdown-item text-center text-white" type="submit">ログアウト</button>
            </li>
            <form action="{{ route('logout') }}" method="post"  id="logout-button">
                @csrf
            </form>


        </div>
    </div>
</nav>
