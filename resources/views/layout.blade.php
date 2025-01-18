<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ai eszközök listája</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('favicon.icon')}}" type="image/x-icon">
</head>
<body>
    <header>
        <img src="{{asset('halo.jpg')}}" alt="logo">
        <nav>
            <ul>
                <li><a href="{{route('aitools.index')}}">AI eszközök</a></li>
                <li><a href="{{route('categories.index')}}">Kategóriák</a></li>
                <li><a href="{{route('categories.create')}}">Új kategória</a></li>

                <li><a href="{{route('tags.index')}}">Tegek</a></li>
                <li><a href="{{route('tags.create')}}">Új kategória</a></li>
                @if(auth()->check())
                    <li>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit">Logout {{auth()->user()->name}}</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{route('login')}}">Login</a></li>
                @endif

            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Barna Levente 20025.01.18 (a css-t kimásoltam git-ről)</p>
    </footer>
    </body>
</html>
