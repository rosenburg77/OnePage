@extends('base')

@section('content')
<!-- Your home page content goes here -->
@foreach($news as $newsItem)
<h2>{{ $newsItem->title }}</h2>
<p>{{ $newsItem->body }}</p>
@endforeach
@endsection