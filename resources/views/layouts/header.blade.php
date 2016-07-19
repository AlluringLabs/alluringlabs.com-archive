<div class="top-bar">
  <div class="container">
    <div class="contact pull-xs-right">
      <div class="item">
        <i class="fa fa-phone"></i>
        <a href="tel:7576553387">757.655.3387</a>
      </div>
      <div class="item">
        <i class="fa fa-envelope"></i>
        <a href="mailto:hello@alluringlabs.com">hello@alluringlabs.com</a>
      </div>
      <div class="item">
        <i class="fa fa-twitter"></i>
        <a href="https://twitter.com/alluring_labs" target="_blank"> @alluring_labs</a>
      </div>
    </div>
  </div>
</div>

<header class="main-header" id="header">
  <div class="container">
    <div class="pull-md-left">
      <div class="site-name">
        <span>Alluring</span>
        {{-- @include('partials.logo-svg') --}}
        <span>Labs</span>
      </div>
    </div>
    <div class="pull-md-right">
      <nav class="nav">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
        <a class="nav-link" href="https://blog.alluringlabs.com" target="_blank">Blog</a>
        <a class="nav-link {{ Request::is('services*') ? 'active' : '' }}" href="/services">Services</a>
        <a class="nav-link {{ Request::is('/work') ? 'active' : '' }}" href="/work">Work</a>
      </nav>
    </div>
  </div>
</header>
