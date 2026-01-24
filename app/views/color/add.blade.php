@extends('layouts.index')
@section('title', $title)
@section('content')
    <form action="/color/add" method="post">
        <label for="">colors</label>
        <input name="name" type="text">
        <button type="submit" class="btn">them</button>
    </form>
@endsection
