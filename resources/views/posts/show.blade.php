@extends ('layout')

@section ('content')

<div class="blog-post">
            <h2 class="blog-post-title"><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p class="blog-post-meta">{{ $post->created_at->format('Y-M-d') }} by <a href="#">{{ $post->user->name}}</a></p>

            <p>{{ $post->body }}</p>
            <hr>
            <!-- display comments -->
            
            <div class="comments">
            	<ul class="list-group">
            		@foreach ($post->comments as $comment)
            		<li class="list-group-item">
            			<strong>
            				{{ $comment->created_at->diffForHumans() }}  : &nbsp;
            			</strong>
                 
            			{{ $comment->body }}
                  <br> by
                  <a href="#">{{ $comment->user->name}}</a>
                  
                  
            		</li>
            		@endforeach
            		
            	</ul>
            </div>
            <!-- add comment -->
            <br>
            @if (! Auth::check())
            <div class="alert alert-warning">
            * You should Login to post acomment
          </div>
            @else
            <form method="post" action="/posts/{{$post->id}}/comments">
                 {{csrf_field()}}
                  <div class="form-group">
                      <textarea  name="body" class="form-control" placeholder="Your Comment Here"></textarea> 
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-warning" value="Add Comment" />
                  </div>

            </form>
		@include('layouts.errors')
    @endif
        	
        
          </div><!-- /.blog-post -->


@endsection