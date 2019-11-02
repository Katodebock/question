<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'defaulttitle')</title>


    </head>
    <body>
        <ul>
            <li> <a href="/">Home </a>  </li>
            <li> <a href="/about">about us </a>  </li>
           <li> <a href="/contact">contact us </a> </li>
           <li> <a href="/projects">projects </a> </li>

        </ul>
        <div class="container">
          @yield('content')
        </div>


    </body>
</html>
