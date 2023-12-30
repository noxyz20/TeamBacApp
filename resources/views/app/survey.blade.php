@extends('app.components.layout')
 
@section('title', 'Page Title')
 
@section('app')
    <survey :survey="{{$survey}}"></survey>
@endsection