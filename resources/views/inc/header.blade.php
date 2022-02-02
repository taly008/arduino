

<nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
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
        <div class="d-flex flex-column flex-md-row align-items-center p3-3 px-mb-4 mb-3 bg-success border-bottom ahsdow-sm">
            <h5 class="my-0 mr-md-auto font-weig-normal">Алтайский край Тальменский район р.п.Тальменка пер.Школьный 10-1</h5>
            <a class="me-3 py-2 text-dark text-decoration-none" href="/">Главная</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="/temper">Температура</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="/contact">Контакты</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="">{{ Auth::user()->name }}</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Выход') }}
            </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
    @endguest
</nav>


