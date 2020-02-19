@extends('layouts.app')

@section('content')
<div id="app" class="container">
  <div class="col-12">
    <profile-banner :displayname='@json($user->name)' :username='@json($user->username)'></profile-banner>
    <div class="d-flex">
      <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
      <div class="pr-5"><strong>{{ 1302 }}</strong> followers</div>
      <div class="pr-5"><strong>{{ 212 }}</strong> following</div>
    </div>
    <a href="/p/create">Add New Post</a>
    <div class="">
      {{ $user->profile->title }}
    </div>
    <div class="">
      {{ $user->profile->description }}
    </div>
    <div class="">
      <a href="#">{{ $user->profile->url }}</a>
    </div>
    <!-- <profile-pictures></profile-pictures> -->

    <div class="row pt-5">
      @foreach($user->posts as $post)
        <div class="col-4 pb-4">
          <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        @endforeach
    </div>

    @yield('content')
  </div>
</div>
@endsection
