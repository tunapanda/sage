<h2>My Progress</h2>
@if(is_user_logged_in())
<table class="table">
  <tbody>
    <tr>
      <td>Paths in progress</td>
      <td>{{ sizeof($current_user_attempted_swag) }}</td>
    </tr>
      <tr>
      <td>Paths completed</td>
      <td>{{ sizeof($current_user_completed_swag) }}</td>
    </tr>
    </tbody>
</table>
@else
<div>Sign Up/Login to view or save your progress</div>
<a href="/my-account/" class="btn btn-primary">Sign Up</a>

@endif