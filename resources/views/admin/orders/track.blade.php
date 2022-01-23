@extends('layouts.app')
@section('title', 'Track Orders')
@section('content')
<div id="page-content">
  <div class="wishlist-page">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="section-title">
            <span class="theme-secondary-color">Track</span> Orders
          </div>
        </div>
      </div>

      <div class="row">
        <form action="{{ route('track') }}" method="get" enctype="multipart/form-data" class="col s12">
          {{csrf_field()}}
          <div class="row">
            <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
              <input id="track" type="text" name="track" class="form-control @error('track') is-invalid @enderror" required autocomplete="track" placeholder="Enter Order Number" class="validate">
                @error('track')
                                      
                  <p style="color:red;">{{ $message }}</p>
                                      
                @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l4 offset-m3 offset-l4 center">
              <input class="waves-effect waves-light btn" value="SEARCH" type="submit"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
