{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @include('components.hero')
  @include('components.colleagues')
  @include('components.about')
  @include('components.cases')
  @include('components.skills')
  @include('components.goals')
  @include('components.resume')
@endsection
