@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edit {{$comic->title}}</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
  @endif
    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error ('title') is invalid @enderror" placeholder="inserisci comic" aria-describedby="titleHelper" value="{{$comic->title}}"> 
            <small id="titleHelper" class="text-muted">Type the comic name here</small>
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control @error ('description') is invalid @enderror" name="description" id="description" rows="5" {{$comic->description}}></textarea>
            @error('description')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Thumb Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error ('thumb') is invalid @enderror" placeholder="https://myimage.png" aria-describedby="coverImageHelper" value="{{$comic->thumb}}">
            <small id="coverImageHelper" class="text-muted">Type the thumb image path here</small>
            @error('thumb')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" id="price" class="form-control @error ('price') is invalid @enderror" placeholder="inserisci comic price" aria-describedby="priceHelper" value="{{$comic->price}}">
            <small id="priceHelper" class="text-muted">Type the comic price here</small>
            @error('price')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">series</label>
            <input type="text" name="series" id="series" class="form-control @error ('series') is invalid @enderror" placeholder="inserisci comic series" aria-describedby="seriesHelper" value="{{$comic->series}}">
            <small id="seriesHelper" class="text-muted">Type the comic series here</small>
            @error('series')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">sale_date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control @error ('sale_date') is invalid @enderror" placeholder="inserisci comic sale_date" aria-describedby="sale_dateHelper" value="{{$comic->sale_date}}">
            <small id="sale_dateHelper" class="text-muted">Type the comic sale_date here</small>
            @error('sale_date')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">type</label>
            <input type="text" name="type" id="type" class="form-control @error ('type') is invalid @enderror" placeholder="inserisci comic type" aria-describedby="typeHelper" value="{{$comic->type}}">
            <small id="typeHelper" class="text-muted">Type the comic type here</small>
            @error('type')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add comic</button>



    </form>
</div>
@endsection