@extends('layouts.app')

@section('content')
<div id="app" class="container">
  <div class="col-12">
    <profile-banner :displayname='@json($user->name)' :username='@json($user->username)'></profile-banner>
    <div class="">
      {{ $user->profile->title }}
    </div>
    <div class="">
      {{ $user->profile->description }}
    </div>
    <div class="">
      <a href="#">{{ $user->profile->url }}</a>
    </div>
    <profile-pictures></profile-pictures>
    @yield('content')
  </div>
</div>
@endsection
