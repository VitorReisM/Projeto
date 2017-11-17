<nav class="navbar navbar-light navbar-expand-md bg-light justify-content-between">
  <a href="/" class="navbar-brand">Nome Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse justify-content-between" id="collapsingNavbar2">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Noticias<span class="sr-only">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url("/News/Create/")}}">Create News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Something else :)</a>
      </li>
    </ul>
    <div>{{--placeholder to evenly space flexbox items and center links--}}</div>
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item">

        <a class="nav-link button_to_link" type="" href="{{url("/login")}}"  style="display:inline-block">Login </a>/<a class="nav-link button_to_link" href="{{url("/register")}}"  style="display:inline-block"> Register</a>
      </li>
    </ul>
  </div>
</nav>

