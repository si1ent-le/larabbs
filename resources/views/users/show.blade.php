@extends('layouts.app')

@section('title',$user->name . '的个人中心')

@section('content')

<div class="row">

<div class="col-lg-3 col-md-3 hidden-xs user-infor">
<div class="crad">
    <img class="card-img-top" src="https://static001.geekbang.org/account/avatar/00/17/91/14/9d0066bf.jpg" alt="{{ $user->name }}">
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
    暂无数据^_^
  </div>
</div>

</div>
</div>
@stop
