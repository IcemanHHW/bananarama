{{--
  Template Name: Contact page
--}}

@extends('layouts.app')

@section('content')

  @include('partials.page-header')

  <div class="container">
      <div class="columns">
        @include('partials.contact.contact-form')
        @include('partials.contact.contact-details') 
      </div>
  </div>

  @include('partials.contact.google-maps')

@endsection