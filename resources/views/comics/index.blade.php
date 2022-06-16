@extends('layouts.app')

@section('content')



<div class="container">
    <div class="heading d-flex justify-content-between align-items-center">
        <h1 class="p-5">Comics</h1>
        <div>
            <a class="btn btn-primary d-block" href="{{route('comics.create')}}">Create comic</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>thumb</th>
                <th>price</th>
                <th>series</th>
                <th>sale_date</th>
                <th>type</th>
            </tr>
        </thead>
        <tbody>

            @foreach($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td><img width="50" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td><a href="{{route('comics.show', $comic->id)}}">View</a>- Edit - Delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection