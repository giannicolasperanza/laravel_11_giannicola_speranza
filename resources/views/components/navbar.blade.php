<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">BLOG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('index')}}">Articoli</a>
        </li>
        
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('create')}}">Create</a>
        </li>
        @endauth
         
         @guest
          <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Login </a>
            </li>
  
          <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">Registrati </a>
            </li>
          @endguest
       

        @auth            
            <li><form 
              class="nav-item" 
              method="POST"
              action="{{route('logout')}}">
              @csrf
              <button type="submit">Logout</button>
              </form></li>
          @endauth


      </ul>
    </div>
  </div>
</nav>