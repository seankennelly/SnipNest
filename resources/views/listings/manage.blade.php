@extends('layout')

@section('content')
  <x-card class="p-10">
    <header>
        <h1
          class="text-3xl text-center font-bold my-6 uppercase">
          Manage Your Code Snippets
      </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
      <tbody>
        @unless($listings->isEmpty())
          @foreach($listings as $listing)
            <tr class="border-gray-300">
                <td
                  class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                  <a href="show.html">
                    {{$listing->title}}
                  </a>
                </td>
                <td
                  class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                  <a
                    href="/listings/{{$listing->id}}/edit"
                    class="text-blue-400 px-6 py-2 rounded-xl">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit
                  </a>
                </td>
              <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <button class="text-red-500 p-3 hover:bg-red-500 hover:text-white rounded"
                  onclick="openModal('modal-id', {{$listing->id}})">
                  <i class="fa-solid fa-trash"></i>
                  <span class="ml-2">Delete</span>
                </button>
              </td>
            </tr>
          @endforeach
        @else
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <p class="text-center">No Listings Found</p>
          </td>
        </tr>
        @endunless
      </tbody>
    </table>
  </x-card>

  <div id="modal-id" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" style="display:none;">
    <div class="relative top-1/4 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
      
      <h2 class="text-xl mb-4">Are you sure you want to delete this listing?</h2>
      
      <div class="flex justify-end space-x-4">
        <!-- Confirm Delete Button (this actually deletes the listing) -->
        <form method="POST" id="deleteForm" action="">
          @csrf
          @method('DELETE')
          <button class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded">
            Delete
          </button>
        </form>

        <!-- Cancel Button -->
        <button onclick="closeModal('modal-id')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded">Cancel</button>
      </div>
    </div>
  </div>

  <script>
    function openModal(modalId, listingId) {
      const modal = document.getElementById(modalId);
      const deleteForm = document.getElementById('deleteForm');
      deleteForm.action = `/listings/${listingId}`;
      modal.style.display = 'block';
    }

    function closeModal(modalId) {
      document.getElementById(modalId).style.display = 'none';
    }
  </script>
@endsection