@extends('layout')

@section('content')
    <h1>"{{$category->name}}"Kategoria módosítása</h1>

    @error('name')
    <div class="alert alert-warning">{{$message}}</div>
    @enderror
    <form action="{{route('categories.update', $category->id)}}" method="post">
        @csrf
        @method('PUT')
        <fieldset>
            <label for="name">Kategória név módosítása:</label>
            <input type="text" name="name" id="name" value="{{old('name', $category)}}">
        </fieldset>
        <button type="submit">Ment</button>

    </form>
@endsection
