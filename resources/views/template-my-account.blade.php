{{--
  Template Name: My Account Template
--}}
@extends('layouts.app')

@section('content')
  @if(is_user_logged_in())
    <a href="{{ wp_logout_url() }}"> Log Out</a>
    {!! do_shortcode('[my-swag]') !!}
  @else
  <div class="page-header">
  <h1>Sign Up / Login</h1>
</div>
  <div class="my-account-content">
    <div class="my-account-image">
      <p>Study at your own pace and make the most of your learning experience.</p>
    </div>
    <div class="my-account-form">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="true">Sign Up</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" id="recover-tab" data-toggle="tab" href="#recover" role="tab" aria-controls="recover" aria-selected="false">Recover Password</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="signup" role="tabpanel" aria-labelledby="signup-tab">
    @if(get_option( 'users_can_register'))
    {!! do_shortcode('[wppb-register]') !!}
    @else
      User registration is currently disabled
    @endif
  </div>
  <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
        {!! do_shortcode('[wppb-login]') !!}
  </div>
  <div class="tab-pane fade"  id="recover" role="tabpanel" aria-labelledby="recover-tab">
    {!! do_shortcode('[wppb-recover-password]') !!}
  </div>
</div>
</div>
</div>
    

  @endif
@endsection
