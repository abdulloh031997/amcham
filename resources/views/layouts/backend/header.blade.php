<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
            <a id="questionDropdown" href="#" class="nav-link bg-transparent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
                <i class="far fa-question-circle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="questionDropdown">
                <div class="container" style="max-width: 20em">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis enim et eum, laborum maiores modi. Aliquam, cupiditate delectus doloremque in ipsa natus, perferendis quia sed tempora velit vero voluptate?
                </div>
            </div>
        </li>
        @guest
        <li class="nav-item">
            <a class="nav-link" href="/login">
                Tizimga kirish
                <i class="fas fa-sign-in-alt"></i>
            </a>
        </li>
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link bg-transparent font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
                {{ Auth::user()->name . ' ' }}
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
  </nav>
  <!-- /.navbar -->
