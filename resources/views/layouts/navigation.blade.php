<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About Us</a></li>
        <li><a href="{{ url('/services') }}">Services</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
        @if(Auth::check())
          if(Auth::user()->is_admin == '1')
            <li><a href="{{ url('/admin') }}">Admin</a></li>
            @endif
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/logout') }}">Logout</a></li>
        @else
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @endif
    </ul>
</nav>