@extends('layouts.app')

@section('content')
<img src="{{$comic->thumb}}" alt="" width="">
<h1>{{$comic->title}}</h1>
<div class="content">
  {{$comic->description}}
</div>
@endsection