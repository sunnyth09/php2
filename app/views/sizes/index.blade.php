@extends('layouts.index')
@section('title', 'Size')
@section('content')
    <a href="/size/them" class="btn btn-sm btn-light border text-succes">Add Size</a>
    <table class="table">
        <tr>
            <th> id </th>
            <th> name </th>
            <th>action</th>
        </tr>
        @foreach ($size as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['name'] }}</td>
                <td>
                    <a href="/size/delete/{{ $item['id'] }}" class="btn btn-sm btn-light border text-danger">Delete
                    </a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
@push('scripts')
<script>
    alert("Size here")
</script>
@endpush
