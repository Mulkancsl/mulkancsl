@extends('layouts.master')
@section('title', 'Show-Blog')

@section('content')
<section class="bagian-artikel-list" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h2 style="font-size: 48px;">{{ $post->title }}</h2>
                    <br>
                    <p>By Mulkan on {{ $post->created_at }}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <img src="https://source.unsplash.com/collection/190727/1600x900" class="mb-4" width="100%" alt="">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection