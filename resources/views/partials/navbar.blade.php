<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary laNav">
    <a class="navbar-brand leLogo text-light" href="#">SiteSav</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="{{route('about')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nous contacter
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('sav')}}">Sav</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('part')}}">Partenariat</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('info')}}">Info</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Equipe
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('front')}}">Front end</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('back')}}">Backend</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>