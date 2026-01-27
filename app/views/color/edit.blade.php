@extends('layouts.index')
@section('title', $title)
@section('content')
    <form action="/color/update/{{$color['id']}}" method="POST">
        <label for="">colors</label>
        <input name="name" value="{{ $color['name'] }}" type="text">
        <button type="submit" class="btn">sua</button>
    </form>
@endsection
