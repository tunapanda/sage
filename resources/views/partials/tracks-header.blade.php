<div class="header-container">
  @if(is_tax('swagtrack'))
    @include('partials.page-header')
  @else
  <div class="page-header">
    <h1>Tracks</h1>
    <p>Learn a new skill! The tracks represent the different disciplines available. Select  a track to follow through and monitor your progress</p>
  </div>
  @endif
  <div class="user-info">
    @include('partials.track-userinfo')
  </div>
</div>