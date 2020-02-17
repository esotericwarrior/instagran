@extends('layouts.app')

@section('content')
<div id="app" class="container">
  <div class="col-12">
    <profile-banner :displayname='@json($user->name)' :username='@json($user->username)'></profile-banner>
    <profile-pictures></profile-pictures>
    @yield('content')
  </div>
</div>
@endsection
