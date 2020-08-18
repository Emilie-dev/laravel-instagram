@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-3">
            <img src="/img/laravel-instagram-logo-full.png" style="height: 150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/img-posts/img-post-1.png" class="w-100"/>
        </div>
        <div class="col-4"><img src="/img/img-posts/img-post-2.png" class="w-100" /></div>
        <div class="col-4"><img src="/img/img-posts/img-post-3.png" class="w-100"/></div>
    </div>
</div>
@endsection
