@extends('layouts.default')
@section('title','主页')
@section('content')
  <div class="static-home">
    <div>
      @include('shared._status_form')
    </div>
    <div class="col-md-4">
      <div class="offset-md-2 col-md-8">
        <section class="user_info">
          @include('shared._user_info',['user'=>$user])
        </section>
      </div>
    </div>
  </div>

@stop
