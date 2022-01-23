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
                        <a class="item" align="left" href="{{ route('logout') }}"
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
                        <img src="https://i.imgur.com/qDFttvD.jpg" width=" 70%" align="right" title="logo alertas tempranas" />
                    </a>                                                
             </div>
        </div>
    </nav>
</div>
</body>
