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
                <th>description</th>
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
                <td>{{$comic->description}}</td>
                <td><img width="50" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}">View</a>
                    <a href="{{route('comics.edit', $comic->id)}}">Edit</a>

                    <!--modal-->

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#delete-comic-{{$comic->id}}">
                      Delete
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="delete-comic-{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$comic->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete comic {{$comic->title}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Body
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection