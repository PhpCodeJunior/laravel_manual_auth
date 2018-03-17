<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">MANUAL AUTH LARAVEL</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="{{url('/login')}}">Login</a></li>
            <li><a href="{{url('/reg')}}">Register</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    @yield("content")
</div>
</body>
</html>