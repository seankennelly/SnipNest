@extends('layout')

@section('content')
@include('partials._search')

<a href="{{ url ('/') }}" class="inline-block text-customBlue hover:text-customBlueDark ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
  <x-card class="p-10">
    <div
    class="flex flex-col items-center justify-center text-center">
      <h3 class="text-3xl font-bold mb-4">{{$listing->title}}</h3>
      
      <x-listing-tags :tagsCsv="$listing->tags" />
      <div class="text-lg my-4">
        <i class="fa-solid fa-circle-user mr-3"></i>Posted by {{$listing->user->name}}
      </div>
      <div class="border border-gray-200 w-full mb-6"></div>
      <div>
        <h3 class="text-2xl mb-4">
          Description
        </h3>
        <div class="text-lg space-y-6">
          {{$listing->description}}
        </div>
        <a href="{{ $listing->screenshot ? asset('storage/' . $listing->screenshot) : asset('/images/no-image.png') }}">
          <img
            class="inline max-w-full sm:max-w-lg my-6"
            src="{{ $listing->screenshot ? asset('storage/' . $listing->screenshot) : asset('/images/no-image.png') }}"
            alt="{{ $listing->screenshot ? 'Screenshot of ' . $listing->title .' code' : 'No screenshot available' }}"
          />
        </a>
        <div class="mb-4">{{$listing->explanation}}</div>
      </div>
    </div>
  </x-card>
</div>
@endsection