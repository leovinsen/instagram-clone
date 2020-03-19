@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fcgk18-1.fna.fbcdn.net/v/t51.2885-19/s320x320/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fcgk18-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=iyNgkh1HkjQAX8Ao1x2&oh=390cb247f37d15568deb368df88f2491&oe=5E9F1CC2" class="rounded-circle col-12">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold"> {{ $user->profile->title }} </div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fcgk18-1.fna.fbcdn.net/v/t51.2885-19/s320x320/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fcgk18-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=iyNgkh1HkjQAX8Ao1x2&oh=390cb247f37d15568deb368df88f2491&oe=5E9F1CC2" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcgk18-1.fna.fbcdn.net/v/t51.2885-19/s320x320/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fcgk18-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=iyNgkh1HkjQAX8Ao1x2&oh=390cb247f37d15568deb368df88f2491&oe=5E9F1CC2" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcgk18-1.fna.fbcdn.net/v/t51.2885-19/s320x320/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fcgk18-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=iyNgkh1HkjQAX8Ao1x2&oh=390cb247f37d15568deb368df88f2491&oe=5E9F1CC2" class="w-100">
        </div>
    </div>
</div>
@endsection
