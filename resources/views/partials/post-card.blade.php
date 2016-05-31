<a href="{{ url('/blog', $post->slug) }}">
  <div class="post-card">
    <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=300%C3%97200&w=300&h=200" alt="">
    <div class="info">
      <div class="title">{{ $post->title }}</div>
      <div class="meta">
        <div class="user pull-sm-left">{{ $post->user->username }}</div>
        <div class="time pull-sm-right">{{ $post->created_at }}</div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</a>
