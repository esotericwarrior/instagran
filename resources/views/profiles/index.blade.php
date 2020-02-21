@extends('layouts.app')

@section('content')
<div id="app" class="container">
  <div class="col-12">
    <!-- If user is authenticated and is the owner of the current profile -->
    @if (Auth::user() && Auth::user()->id == $user->id)
      <!-- Display the owner's version of the profile header -->
      <profile-banner
        :count='@json($user->posts->count())'
        :description='@json($user->profile->description)'
        :displayname='@json($user->name)'
        :title='@json($user->title)'
        :url='@json($user->url)'
        :username='@json($user->username)'
      >
      </profile-banner>
    <!-- Otherwise, display the public version of the profile header -->
    @else
      <public-profile-banner
        :count='@json($user->posts->count())'
        :description='@json($user->profile->description)'
        :displayname='@json($user->name)'
        :title='@json($user->title)'
        :url='@json($user->url)'
        :username='@json($user->username)'
      >
      </public-profile-banner>
    @endif

    <div class="row pt-5">
        <profile-pictures :user='@json($user->posts)'></profile-pictures>
    </div>

    @yield('content')
  </div>
</div>
@endsection
