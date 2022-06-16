@extends('layouts.app')

@section('content')

<div class="container">
    <h1> Create a new comic</h1>
  
    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="price">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="inserisci comic" aria-describedby="titleHelper">
            <small id="titleHelper" class="text-muted">Type the comic name here</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumb Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://myimage.png" aria-describedby="coverImageHelper">
            <small id="coverImageHelper" class="text-muted">Type the thumb image path here</small>
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="inserisci comic price" aria-describedby="priceHelper">
            <small id="priceHelper" class="text-muted">Type the comic price here</small>
        </div>
        <div class="form-group">
            <label for="series">series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="inserisci comic series" aria-describedby="seriesHelper">
            <small id="seriesHelper" class="text-muted">Type the comic series here</small>
        </div>
        <div class="form-group">
            <label for="sale_date">sale_date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="inserisci comic sale_date" aria-describedby="sale_dateHelper">
            <small id="sale_dateHelper" class="text-muted">Type the comic sale_date here</small>
        </div>
        <div class="form-group">
            <label for="type">type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="inserisci comic type" aria-describedby="typeHelper">
            <small id="typeHelper" class="text-muted">Type the comic type here</small>
        </div>

        <button type="submit" class="btn btn-primary">Add comic</button>



    </form>
</div>
@endsection