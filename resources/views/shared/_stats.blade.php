<a href="#">
  <strong id="following" class="stat">
    <span>{{count($user->followings)}}</span>
    <span>关注</span>
  </strong>
</a>
<a href="#">
  <strong id="followers" class="stat">
    <span>{{count($user->followers)}}</span>
    <span>粉丝</span>
  </strong>
</a>
<a href="#">
  <strong id="followers" class="stat">
    <span>{{$user->statuses()->count()}}</span>
    <span>微博</span>
  </strong>
</a>
