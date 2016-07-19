<div class="top-bar"></div>
<header class="main-header" id="header">
  <div class="container">
    {{-- <div class="row">
      <div class="col-md-6 col-"></div>
    </div> --}}


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
