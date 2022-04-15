@extends('layouts.master')
@section('title', 'Статьи')
@section('content')
    <div class="col-md-8 blog-main">

        @include('layouts.modal')

        <h3 class="pb-3 mb-4 font-italic border-bottom">
            All articles
        </h3>

        @foreach($articles as $article)
            @include('articles.article')
        @endforeach

        {{ $articles->links() }}

    </div>
@endsection
