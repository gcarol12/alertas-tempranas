<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">             

                <!-- Left Side -->               
                    <!-- Authentication Links -->
                       @guest
                            @if (Route::has('login'))                                
                            @endif 
                        @else                           
                        <a class="item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>                         
                            
                        @endguest

              <!-- Right Side -->  
                        <a class="navbar-brand " href="{{ url('home') }}">
                        <img src="https://i.imgur.com/qDFttvD.jpg" width=" 300vw" title="logo alertas tempranas" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                             <span class="navbar-toggler-icon"></span>
                        </button>
             </div>
        </div>
    </nav>
</body>
