@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="/svg/code0.jpg" />
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user -> username }}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div class=""><Strong>153k</Strong> post</div>
                <div class="ps-3"><Strong>23k</Strong> followers</div>
                <div class="ps-3"><Strong>212</Strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user -> profile -> title}}</div>
            <div>{{$user -> profile -> description}}</div>
            <div><a href="#">{{$user -> profile -> url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="/svg/code1.jpg" />
        </div>
        <div class="col-4">
            <img class="w-100" src="/svg/code1.jpg" />
        </div>
        <div class="col-4">
            <img class="w-100" src="/svg/code1.jpg" />
        </div>
    </div>
</div>
@endsection