@guest
    <div class="d-flex flex-column flex-md-row align-items-center p3-3 px-mb-4 mb-3 bg-primary border-bottom ahsdow-sm header">
        <h5 class="my-0 mr-md-auto font-weig-normal"> Домашняя страница </h5>
        <div class="header-right">
            <a class="me-2 py-0 text-dark text-decoration-none" href="{{ route('login') }}">{{ __('Авторизация') }}</a>
            <a class="me-2 py-0 text-dark text-decoration-none" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
        </div>
    </div>
@else
    <div class="d-flex flex-column flex-md-row align-items-center p3-3 px-mb-4 mb-3 bg-success border-bottom ahsdow-sm header">
        <h5 class="my-0 mr-md-auto font-weig-normal">Алтайский край Тальменский район р.п.Тальменка пер.Школьный 10-1</h5>
        <div class="header-right">
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('home')}}">Главная</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="/checkcode">Проверка кода</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="/temper">Температура</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="/contact">TVmaze</a>
            @if (Auth::user()->hasRole('admin'))
              <a class="me-3 py-2 text-dark text-decoration-none" href="/setting">Настройки</a>
            @endif
            <a class="me-3 py-2 text-dark text-decoration-none" href="">{{ Auth::user()->name }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="header-link me-3 py-2 text-dark" type="submit" class="me-3 py-2 text-dark text-decoration-none">{{ __('Выход') }}</button>
            </form>
        </div>
    </div>
@endguest


