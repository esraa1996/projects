    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="/">Home</a>
          @if (! Auth::check())
          <a class="blog-nav-item" href="/register">Register</a>
          <a class="blog-nav-item" href="/login">Login</a>
          @endif
          
          @if (Auth::check())
          <a class="blog-nav-item" href="/posts/create">Create Post</a>
          <a class="blog-nav-item" href="/logout">logout</a>
          <a class="blog-nav-item" href="#" style="float: right;">{{ Auth::user()->name }}</a>
          @endif
        </nav>
      </div>
    </div>