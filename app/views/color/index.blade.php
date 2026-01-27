@extends('layouts.index')
@section('title', $title)
@section('content')
    <a href="/color/create" class="btn btn-primary">Add Size</a>
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
                <td>
                    <a href="/color/update/{{ $item['id'] }}" class="btn btn-sm btn-light border text-danger">Edit
                    </a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection

