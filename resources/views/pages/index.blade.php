@extends('layouts.app')

@section('content')
<!--
    <div class="jumbotron text-center">
       <h1> Welcome To Chrollo!</h1>
           <p>This is a social Neswfeed WebApp</p>
           <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
              <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
       </p>        
    </div>
-->
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-1">
                <span>like</span>
            </div>
            <div class="col-md-11">
                <span>
                        @if(count($posts)>0)
                        <table class="table table-striped">
                            <tr>
                                <th> Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                            <td>{{$post->title}}</td>
                            
                                    <td>
                                            {!!Form::open(['action'=>['PostController@destroy',$post->id], 'method'=> 'POST','class' => 'btn btn-default pull-right'])!!}
                                            
                                    </td>
                            </tr>
                               
                            @endforeach
                        </table>
                        @else
                             <p>You have no posts</p>
                        @endif
                                   
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            <h6>r/all</h6>
        </div>
        <div class="row">
            <span>The most active posts from all of Reddit. Come here to see new posts rising and be a part of the conversation.</span>
        </div>
    </div>
<div> 
@endsection
