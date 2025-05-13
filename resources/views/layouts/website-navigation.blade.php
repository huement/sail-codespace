{{-- Two Row Header Template --}}
<div class="container-fluid {{ $headerBackground ?? '' }} no-gutters">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="pt-3 pb-1 px-1">
          <a href="{{ url('/') }}">
            <x-nav-logo />
          </a>
        </div>
      </div>
    </div>
    <div class="row pt-1">
      <div class="col-7">
        <nav class="navbar navbar-light navbar-expand-md" style="padding: 8px 0;font-size: 20px;">
          <div class="container-fluid no-gutters">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-3">
              <span class="visually-hidden">Toggle navigation</span>
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-white" id="navcol-3">
              <ul class="navbar-nav">
                @guest
                    <x-hui-navlink :route="Route::is('login')" :href="route('login')" icon="bxs-contact" label="Contact" />
                @else
                    <x-hui-navlink :route="Route::is('dashboard')" :href="route('dashboard')" icon="bxs-contact" label="Contact" />
                @endguest
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-5">
        <nav class="navbar navbar-light navbar-expand-md text-right float-right" style="font-size: 20px;">
          <div class="container-fluid no-gutters">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2">
              <span class="visually-hidden">Toggle navigation</span>
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-2">
              <ul class="navbar-nav">

              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>


<div class="modal fade animated animateIn" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Site Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" method="GET">

          <input value="" type="text" class="search-input form-control form-control-lg mb-3" name="q" placeholder="Search..." aria-label="Search Term Input" aria-describedby="search-submit-button">

          <x-hui-button class="mt-5" color="success" size="lg" type="submit" icon="bx-search">Search</x-hui-button>
        </form>
      </div>
    </div>
  </div>
</div>
