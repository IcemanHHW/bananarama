{{--
  Template Name: Contact page
--}}

@extends('layouts.app')

@section('content')

  @include('partials.page-header')

  <div class="container ptb">
    <p class="has-text-centered">
      <?= $contact_text ?>
    </p>
  </div>

@endsection