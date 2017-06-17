<header>
    <nav>
        <ul class="nav_bar">
            <li><img src="/images/oss_logo.png" alt=""></li>
            <li style="padding-left: 0%;"><a href="{{ route('main') }}">Main Page</a></li>
            <li><a href="{{ route('recruiter') }}">Recruiter</a></li>
            <li><a href="{{ route('admin') }}">Admin</a></li>


            <span id="separator"></span>
            @if(!Auth::check())
                <li style="margin-left: 10%;"><a href="{{ route('signup') }}">Sign Up</a></li>
                <li><a href="{{ route('signin') }}">Sign In</a></li>
            @else
                <li style="padding-left:20%;"><a href="{{ route('logout') }}">Logout</a></li>
            @endif
        </ul>
    </nav>
</header>

<style>
    .nav_bar{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        border: 2px solid gray;

    }

    .nav_bar li{
        float: left;
    }

    .nav_bar li a{
        display: block;
        text-align: center;
        padding: 16px;
        text-decoration: none;
    }
</style>