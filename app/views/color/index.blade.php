@extends('layouts.index')
@section('title', $title)
@section('content')
    <a href="/color/create" class="btn btn-sm btn-light border text-succes">Add Size</a>
    <table class="table">
        <tr>
            <th> id </th>
            <th> name </th>
            <th>action</th>
        </tr>
        @foreach ($colors as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['name'] }}</td>
                <td>
                    <a href="/color/delete/{{ $item['id'] }}" class="btn btn-sm btn-light border text-danger">Delete
                    </a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection

