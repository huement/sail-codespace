@extends('layouts.app')

@section('content')
<div class="container-fluid no-gutters">
  <div class="row">
    <div class="col">
      <div class="dashboard-menu d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="dashboard-title">{{ __('Dashboard') }}</h1>
        <div class="btn-toolbar mb-2 mb-md-4">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            @svg('icons.search', 'i-25 fill-white mr-2')
            This week
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card">
          <div class="card-header">Action Panel</div>
          <div class="card-body">
            {{ __("You're logged in!") }}

            <livewire:counter />
          </div>
      </div>
    </div>
  </div>
</div>




@endsection
