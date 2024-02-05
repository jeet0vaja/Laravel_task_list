@extends('layouts.app')

@section('title', 'Edit Task')
@section('styles')
<style>
    .error-message{
        color: red;
    }
</style>
@endsection
@section('content')
  @include('form',['task'=>$task])
@endsection
