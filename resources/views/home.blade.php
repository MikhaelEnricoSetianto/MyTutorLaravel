@extends('layout')
@section('title')
<title>Home - Tutor Raya</title>
@endsection

@section('content')
<table class="table table-striped table-hover" style="margin-top: 13%; margin-bottom: 15%;">
    <thead>
        <tr class="table-warning">
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Total Learning Hours</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($subjects as $subs)
        <tr>
            <td>
                {{$subs->id}}
            </td>
            <td>
                {{$subs->title}}
            </td>
            <td>
                {{$subs->description}}
            </td>
            <td>
                RM {{$subs->price}}
            </td>
            <td>
                {{$subs->total_learning_hours}} Hour(s)
            </td>
        </tr>
        @empty
        <tr>
            <td>
                No data...
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="container" style="margin-top: 2rem; justify-content: center;">
    {{ $subjects->links('pagination::bootstrap-4') }}
</div>

@endsection