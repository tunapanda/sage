<div class="my-swag row">
  <div class="profile-info col-md-4">
    <h2>Profile</h2>
    <div class="profile-username">{{ $current_user->user_login }}</div>
    <p>share your swag profile</p>
    <p><a href="{{ get_author_posts_url($current_user->ID) }}">{{ get_author_posts_url($current_user->ID) }}</a></p>
    <h3>Settings</h3>
    <p>email address</p>
    {{ $current_user->user_email }}
    <p><a href="{{ wp_logout_url() }}" class="btn btn-primary">Log Out ></a></p>
  </div>
  <div class="swag-info col-md-8">
    <h2>Dashboard</h2>
    <h3>Completed</h3>
    @foreach($completed_swagpaths as $swagpath)
      <a href="{{ $swagpath['path_permalink']}}">{{ $swagpath['name'] }}</a> completed on {{ $swagpath['date_issued'] }} <a href="{{ $swagpath['badge_permalink'] }}" class="btn btn-sm btn-primary">View Badge</a>
    @endforeach
    <h3>In Progress</h3>
    @foreach($current_swag_user->getAttemptedSwagpaths() as $swagpath)
      {{ $swagpath->getPost()->post_title }}
    @endforeach
  </div>
</div>