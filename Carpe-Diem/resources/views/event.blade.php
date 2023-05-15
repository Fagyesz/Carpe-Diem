@extends('layout')

@section('content')

<h2>
    {{ $event['title'] }}
</h2>
<p>
    {{ $event['description'] }}
</p>


@endsection
