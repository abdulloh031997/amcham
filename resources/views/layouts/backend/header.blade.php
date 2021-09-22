  <div class="header">
    <div class="header-left">
        <a href="/admin" class="logo"> <img src="{{asset('amcham_logo.png')}}" width="50" height="70" alt="logo"> <span class="logoclass"></span> </a>
        <a href="/admin" class="logo logo-small"> <img src="{{asset('amcham_logo_edited.jpg')}}" alt="Logo" width="30" height="30"> </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
    <ul class="nav user-menu">
        @guest
        <li class="nav-item">
            <a class="nav-link" href="/login">
                Login
                <i class="fas fa-sign-in-alt"></i>
            </a>
        </li>
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link bg-transparent font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;font-size:20px">
                <i class="ml-2 fas fa-sign-out-alt"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>

</div>
