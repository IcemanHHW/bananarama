@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="container mt-2">

  <p class="has-text-centered">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis dictum dolor, in ultrices nisi finibus nec.
    Nullam pretium tristique augue, quis cursus dolor malesuada sit amet. Nullam lorem nibh, facilisis ut sem ut,
    bibendum pulvinar risus. Donec lacinia purus et mi scelerisque, in molestie metus mollis. Maecenas fringilla aliquam
    orci sed tincidunt. In hac habitasse platea dictumst. Suspendisse ac dolor justo.
  </p>
</div>
<div class="container is-fluid  mt-2">
  @include('partials.homepage.products')
</div>
<div has-background-light  mt-2">
  @include('partials.homepage.about')
</div>
@endsection
