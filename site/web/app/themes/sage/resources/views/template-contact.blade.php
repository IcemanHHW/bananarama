{{--
  Template Name: Contact page
--}}

@extends('layouts.app')

@section('content')

  @include('partials.page-header')

  <div class="container ptb">
    <div class="columns">
      <div class="column is-10-touch is-offset-1-touch">
        <p class="has-text-centered">
          <?= $contact_text ?>
        </p>
      </div>
    </div>
  </div>

@endsection