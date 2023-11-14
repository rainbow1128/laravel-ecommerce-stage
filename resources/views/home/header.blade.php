<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html"><img width="50" src="images/lo1.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="#catagory">New <span class="sr-only">(current)</span></a>
                   <ul class="dropdown-menu">
                    <li><a href="about.html">Pagne</a></li>
                    <li><a href="testimonial.html">Robe</a></li>
                 </ul>
                </li>
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                  Women <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                      <li><a href="#product"></a>Colle</li>
                      <li><a href="#product">Jupe</a></li>
                   </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                     Men <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="#product">Chemise</a></li>
                       <li><a href="#product">Lacoste</a></li>
                    </ul>
                 </li>

                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                     Bags <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="#product">Sac a main</a></li>
                       <li><a href="#product"></a>Sac a dos</li>
                    </ul>
                 </li>

                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Accessoiries <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="#product">Boule d'oreille</a></li>
                       <li><a href="#product">Montre</a></li>
                    </ul>
                 </li>

                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Collections 
                     <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="#product">Women</a></li>
                       <li><a href="#product">Men</a></li>
                    </ul>
                 </li>
                {{-- <li class="nav-item">
                   <a class="nav-link" href="blog_list.html">Bags</a>
                </li> --}}
                <li class="nav-item">
                   <a class="nav-link" href="contact.html">Contact</a>
                </li>
                
                <form class="form-inline">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                 </form>

                @if (Route::has('login'))

                @auth
                    
                <li class="nav-item">
                   <x-app-layout>
                    
                   </x-app-layout>
                </li>

                  @else

               <li class="nav-item">
                   <a class="btn btn-primary" id="logincss" 
                   href="{{ route('login')}}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-success"  
                    href="{{ route('register')}}">Register</a>
                 </li>
                 @endauth

                 @endif
             </ul>
          </div>
       </nav>
    </div>
 </header>