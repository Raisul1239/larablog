@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h3>{{$post->title}}</h3>
    <h4>{!!$post->body!!}</h4>
    <img class="iron-lazy o-fade initial loaded" width="323" height="396" src="{{asset($post->photo)}}" alt="" />

</div>
@endsection