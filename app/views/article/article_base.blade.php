@extends('layouts.base')

@section('content')

<div class="title">
    {{ $article->title }}
</div>
<div class="text">
    {{ $article->text }}
</div>

@stop