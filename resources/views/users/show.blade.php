@extends('layouts.app')

@section('title',$user->name . '的个人中心')

@section('content')

<div class="row">

<div class="col-lg-3 col-md-3 hidden-xs user-infor">
<div class="crad">
    <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}">
    <div class="card-body">
      <h3><strong>个人简介</strong></h3>
      <p>{{ $user->introduction }}</p>
      <hr>
      <h5><strong>注册于</strong></h5>
      <p>{{ $user->created_at->diffForHumans() }}</p>
    </div>
  </div>
</div>

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <div class="crad">
    <div class="card-body">

      <h3 class="mb-0" style="font-size:22px">{{ $user->name }} <small>{{ $user->email }}</small></h3>

    </div>
  </div>
  <hr>

{{-- 用户发布数据 --}}
<div class="card">
  <div class="card-body">
    <ul class="nav nav-tabs">
      <li class="nav-item"><a class="nav-link active bg-transparent" href="#">Ta的话题</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Ta的回复</a></li>
    </ul>
    @include('users._topics',['topics' => $user->topics()->recent()->paginate(5)])
  </div>
</div>

</div>
</div>
@stop
