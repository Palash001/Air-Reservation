<div id="fh5co-wrapper">
<div id="fh5co-page">

<header id="fh5co-header-section" class="sticky-banner">
  <div class="container">
    <div class="nav-header">
      <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
      <h1 id="fh5co-logo"><a href="#"><i class="icon-airplane"></i>Air world</a></h1>
      <!-- START #fh5co-menu-wrap -->
      <nav id="fh5co-menu-wrap" role="navigation">
        <ul class="sf-menu" id="fh5co-primary-menu">
          <li class="active"><a href="{{route('user.home')}}">Home</a></li>
          <li>

            <a href="{{route('user_search.create')}}">Flights</a></li>
          <li>
            <a href="#" class="fh5co-sub-ddown">Booking</a>
          </li>

          <li>
            <a href="{{route('flightUser.create')}}" class="fh5co-sub-ddown">Passenger Info</a>
          </li>

          @guest
        	<li><a href="{{route('login')}}"><button class="btn btn-primary custom-nav">Login</button></a> </li>
          @else
          <li> {{ Auth::user()->name }} <span class="caret"></span> </li>
          <li>
          <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre></a> -->



              <a  href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

        </li>

          @endguest

          <!-- <li><a href="{{route('login')}}">Login</a></li>
          <li><a href="contact.html">Registration</a></li> -->
        </ul>

      </nav>
    </div>
  </div>
</header>
