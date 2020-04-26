@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="container ptb">
<div class="columns is-centered">
  <div class="column is-half is-offset-1-touch is-10-touch has-text-centered">
    <p>
      <?= $intro_text ?>
    </p>
  </div>
</div>

</div>
<div class="container is-fluid ptb">
  @include('partials.homepage.products')
</div>
<div class="has-background-light is-paddingless ptb">
  @include('partials.homepage.about')
</div>
@endsection
