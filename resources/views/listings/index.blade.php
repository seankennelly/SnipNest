@extends('layout')

@section('content')
  @include('partials._hero')
  @include('partials._search')

  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @unless(count($listings) == 0)
      @foreach($listings as $listing)
        <!-- Item -->
        <x-listing-card :flexible="true" :listing="$listing" />
      @endforeach
    @else
      <p class="text-white">No listings found</p>
    @endunless

  </div>

  {{-- Pagination --}}
  <div class="mt-6 p-4">
    {{$listings->links()}}
  </div>

@endsection