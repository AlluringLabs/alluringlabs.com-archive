<section class="section bg-none m-t-2 m-b-2">
  <div class="container">
    <div class="header m-b-1 text-xs-center">Recent Posts</div>
    <div class="content">
      <div class="row-eq-height">
        @foreach($posts as $post)
          <div class="col-md-4 col-lg-4 col-sm-6">
            @include('partials.post-card', ['post' => $post])
          </div>
        @endforeach
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="footer m-t-1">
      <a href="/blog" class="center-block large-link text-xs-center text-uppercase">
        Read more on our blog
      </a>
    </div>
  </div>
</section>
