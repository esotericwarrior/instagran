@extends('layouts.app')

@section('content')
<div class="container">
  <div class="">
    <profile-banner v-bind:displayname="{{ json_encode(Auth::user()->name) }}" :username="{{ json_encode(Auth::user()->email) }}" />
    @yield('content')
  </div>
</div>
@endsection
