@extends('layouts.website', ["bodyClass" => "big-top crash-bg"])

@section('content')
<section class="d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="w-100 d-block py-0">
          @svg('theLips', 'p-relative d-block mx-auto mt-0')
        </div>
      </div>
    </div>
  </div>
</section>

<div class="ride-the-wave"></div>

<section class="clean-block clean-info background-wave mt-0 pt-100">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="display-2 mb-3 mt-0">WELCOME HOME</h1>
        <p class="lead"><code>@huement/ui</code> is a design system that helps you build beautiful and consistent user interfaces. Its also loaded into this starter kit, which is nice. There are a bunch of other things preloaded and ready to go, this is our 'Jumping off point' for every website we build.</p>
      </div>
    </div>
  </div>
  <div class="spacer h-100px"></div>
</section>

<div class="do-the-wave"></div>


<div class="spacer h-100px"></div>
@endsection
