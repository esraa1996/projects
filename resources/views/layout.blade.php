
@include ('layouts.header')
@include ('layouts.nav')

    <div class="container">
    	 <div class="blog-header">
	        <h1 class="blog-title">The Bootstrap Blog</h1>
	        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
	      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

      @yield ('content')
  </div>
      @include ('layouts.sidebar')
  </div>
</div>
    
     
@include ('layouts.footer')
   

