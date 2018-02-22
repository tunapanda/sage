{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  <div class="jumbotron jumbotron-fluid homepage-hero">
    <p class="lead">Study at your own pace and make the most of your learning experience.</p>
    <h1 class="display-4">Welcome to Swag</h1>
  </div>
  <div class="homepage-get-started">
    <div class="homepage-get-started-desc">
      <p>Swag is to school books what Wikipedia is to encyclopedias</p>
    </div>
    <div class="homepage-get-started-link">
      Get started <i class="fas fa-angle-right"></i>
    </div>
  </div>
   <div class="homepage-video-container">
    <div class="homepage-video">video</div>
    </div>
    <div class="homepage-description">
      <div class="homepage-unique">
      what makes swag unique?
      </div>
      <div class="swag-full-desc">
        <p>Swag is a gamified open source elearning platform meant for delivering education content especially in areas without internet connection. It allow users to create and share their content within the platform without the need for internet.</p>
      </div>
    </div>
    <div class="swag-key-points">
      <div class="swag-key-point">
        <div class="key-point-icon"><img src="{!! \App\asset_path('images/gamified.png') !!}" alt=""></div>
        <div class="keypoint-text">Gamified learning</div>
      </div>
      <div class="swag-key-point">
        <div class="key-point-icon"><img src="{!! \App\asset_path('images/offline.png') !!}" alt=""></div>
        <div class="keypoint-text">Learn even when offline</div>
      </div>
      <div class="swag-key-point">
        <div class="key-point-icon"><img src="{!! \App\asset_path('images/tracking.png') !!}" alt=""></div>
        <div class="keypoint-text">Track your progress</div>
      </div>
      <div class="swag-key-point">
        <div class="key-point-icon"><img src="{!! \App\asset_path('images/adapt.png') !!}" alt=""></div>
        <div class="keypoint-text">Easy to adapt and customize</div>
      </div>
    </div>
@endsection
