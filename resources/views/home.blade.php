@extends('layouts.app')

@section('content')
<div id="app" class="container">
  <div class="col-12">
    <profile-banner v-bind:displayname="{{ json_encode(Auth::user()->name) }}" :username="{{ json_encode(Auth::user()->email) }}"></profile-banner>
    <profile-pictures></profile-pictures>
    @yield('content')
  </div>
</div>
@endsection
