@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="container ptb">

  <p class="has-text-centered">
    <?= $intro_text ?>
  </p>
</div>
<div class="container is-fluid ptb">
  @include('partials.homepage.products')
</div>
<div class="has-background-light is-paddingless ptb">
  @include('partials.homepage.about')
</div>
@endsection
