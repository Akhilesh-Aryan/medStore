<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-warning">
        <a href="" class="navbar-brand">
            <h4 class="text-danger">1MGStore</h4>
        </a>
        <form action="" method="GET" class="form-inline ml-auto">
            <div class="input-group">
                <input type="search" class="form-control " name="search" size="70" placeholder="search by medicine name">
                <div class="input-group-append">    
                <button type="submit" class="btn btn-light">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                      </svg>
                </button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" data-toggle="dropdown" class="btn btn-dark dropdown-toggle">Profile</button>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Profile</a>
                        <a href="" class="dropdown-item">My Order</a>
                        <a href="" class="dropdown-item">Settings</a>
                        <a href="" class="dropdown-item">about us</a>
                        <a href="" class="dropdown-item">contact us</a>
                    </div>
                </div>
            </li>
            <li class="nav-item"><a href="/" class="nav-link">Home</li></a>
            <li class="nav-item"><a href="{{route('insertpage')}}" class="nav-link">Insert</li></a>
        </ul>
    </nav>
    @section('content')
        
    @show
</body>
</html>