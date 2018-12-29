@extends('layouts.app')

@section('content')

     <h1>Hot</h1>
     <p>
        @if(count($posts) >  0)
        @foreach($posts as $post)
        <div class="well">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/hot/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on{{$post->created_at}} by {{$post->user->name}} </small>
                    
                </div>
                
                <div class="row">
                        @if(!Auth::guest())
                        <button onclick="actOnPost(event);" data-post-id = "{{$post->id}}">Like</button>
                        <span id="likes-count-{{$post->id}}">{{$post->likes_count}}</span>
                        @else
                        <small>Likes{{$post->likes_count}}  </small>
                        @endif
                        
                </div>
                

            </div>
        

        </div>
        @endforeach
        {{$posts->links()}}
      

    @else
        <p>No post found</p>
    @endif
     </p>


@endsection

@section('js')
<script>
    var updatePostStats = {
        Like: function (postId) {
            document.querySelector('#likes-count-' + postId).textContent++;
        },

        Unlike: function(postId) {
            document.querySelector('#likes-count-' + postId).textContent--;
        }
    };


    var toggleButtonText = {
        Like: function(button) {
            button.textContent = "Unlike";
        },

        Unlike: function(button) {
            button.textContent = "Like";
        }
    };

    var actOnPost = function (event) {
        var postId = event.target.dataset.postId;
        var action = event.target.textContent;
        toggleButtonText[action](event.target);
        updatePostStats[action](postId);
        axios.post('/posts/' + postId + '/act',
            { action: action });
    };

</script>
@endsection