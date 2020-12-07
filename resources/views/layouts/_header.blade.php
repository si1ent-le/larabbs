<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- Branding Image -->
    <a class="navbar-brand " href="{{ url('/') }}">
      LaraBBS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
        @else
        <li class="nav-item dropdown"><a class="nav-link dropdown" href="#" id="nav-Dropown" rol="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="https://avatars3.githubusercontent.com/u/56815669?s=460&u=84b06bdabe9bae3e8f8c918356e8a58bfc152f85&v=4" class="img-responsive img-circle" width="30px" height="30px">
        {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="">个人中心</a>
        <a class="dropdown-item" href="">编辑资料</a>
        <div class="drop-divider"></div>
        <a class="dropdown-item" id="logout" href="#">
          <form action="{{ route('logout') }}" method="POST">
          {{ csrf_field() }}
          <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
          </form>
        </a>
        </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
