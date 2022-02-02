<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    @stack('styles')
    <script src="/js/jquery.js"></script>
    @stack('scripts')
</head>

                           @guest
                          <div class="d-flex flex-column flex-md-row align-items-center p3-3 px-mb-4 mb-3 bg-primary border-bottom ahsdow-sm">
                              <h5 class="my-0 mr-md-auto font-weig-normal">__Домашняя страница__ </h5>
                            @if (Route::has('login'))
                               <a class="me-2 py-0 text-dark text-decoration-none" href="{{ route('login') }}">{{ __('Авторизация') }}</a>
                            @endif

                            @if (Route::has('register'))
                                    <a class="me-2 py-0 text-dark text-decoration-none" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            @endif
                          </div>
                        @else
                @include('inc.header')
                <a class="me-3 py-2 text-dark text-decoration-none" href="">{{ Auth::user()->name }}
                                </a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                   </nav>
                </div>
                        @endguest

        <main>

        </main>

 @yield('content')
</body>
</html>
