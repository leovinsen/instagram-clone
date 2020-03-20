@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fcgk18-1.fna.fbcdn.net/v/t51.2885-19/s320x320/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fcgk18-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=iyNgkh1HkjQAX8Ao1x2&oh=390cb247f37d15568deb368df88f2491&oe=5E9F1CC2"
                class="rounded-circle col-12">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile )
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>


            @can('update', $user->profile )
                <a href="/profile/{{  $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"> {{ $user->profile->title }} </div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        @foreach( $user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{  $post-> id  }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>

        @endforeach
    </div>
</div>
@endsection
