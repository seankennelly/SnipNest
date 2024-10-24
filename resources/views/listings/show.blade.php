@extends('layout')

@section('content')
@include('partials._search')

<a href="/" class="inline-block text-customBlue hover:text-customBlueDark ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
  <x-card class="p-10">
    <div
        class="flex flex-col items-center justify-center text-center">
      <img
        class="w-48 mr-6 mb-6"
        src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
        alt="{{ $listing->logo ? 'Logo for ' . $listing->company : 'No logo available' }}"
      />

      <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
      <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
      <x-listing-tags :tagsCsv="$listing->tags" />
      <div class="text-lg my-4">
        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
      </div>
      <div class="border border-gray-200 w-full mb-6"></div>
      <div>
        <h3 class="text-3xl font-bold mb-4">
          Code Description
        </h3>
        <div class="text-lg space-y-6">
          {{$listing->description}}
          <a
              href="{{$listing->email}}"
              class="block bg-customBlue text-white mt-6 py-2 rounded-xl hover:opacity-80"
              ><i class="fa-solid fa-envelope"></i>
              Contact Employer
              </a>
          <a
              href="{{$listing->website}}"
              target="_blank"
              class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
              ><i class="fa-solid fa-globe"></i> Visit
              Website
          </a>
        </div>
      </div>
    </div>
  </x-card>

  {{-- Edit button --}}
  <x-card class="mt-4 mx-auto inline-flex justify-center">
    <a href="/listings/{{$listing->id}}/edit" class="p-3 hover:bg-customBlue hover:text-white rounded">
      <i class="fa-solid fa-pencil"></i>
      <span class="ml-2">Edit</span>
    </a>

    <button class="text-red-500 p-3 hover:bg-red-500 hover:text-white rounded"  onclick="openModal('modal-id')">
        <i class="fa-solid fa-trash"></i>
        <span class="ml-2">Delete</span>
    </button>
  </x-card>

  {{-- Hidden modal to confirm delete --}}
  <div id="modal-id" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" style="display:none;">
    <div class="relative top-1/4 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
      
      <h2 class="text-xl mb-4">Are you sure you want to delete this listing?</h2>
      
      <div class="flex justify-end space-x-4">
        <!-- Cancel Button -->
        <button onclick="closeModal('modal-id')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded">Cancel</button>

        <!-- Confirm Delete Button (this actually deletes the listing) -->
        <form method="POST" action="/listings/{{$listing->id}}">
          @csrf
          @method('DELETE')
          <button class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded">
            Delete
          </button>
        </form>
      </div>
    </div>
  </div>

</div>

<script>
  function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
  }

  function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
  }
</script>

@endsection