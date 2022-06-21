@extends('/layouts/base')

@section('content')
    @foreach ($clients as $client)
        {{ $client->name }}
    @endforeach
@endsection
