@extends('layout')
@section('content')

<x-card class="p-10 max-w-lg mx-auto mt-24">
  <header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
      Post A Snippet
    </h2>
    <p class="mb-4">Share with the community </p>
  </header>

  <form method="POST" action="/listings" enctype="multipart/form-data">
    @csrf
    
    <div class="mb-6">
      <label for="title" class="inline-block text-lg mb-2"
          >Code Snippet Title</label
      >
      <input
          type="text"
          class="border border-gray-200 rounded p-2 w-full"
          name="title"
          placeholder="Example: Sorting An Array"
          value="{{old('title')}}"
      />
      @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="tags" class="inline-block text-lg mb-2">
          Tags (Comma Separated)
      </label>
      <input
          type="text"
          class="border border-gray-200 rounded p-2 w-full"
          name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc"
          value="{{old('tags')}}"
      />
      @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label
          for="description"
          class="inline-block text-lg mb-2"
      >
          Code Description
      </label>
      <textarea
          class="border border-gray-200 rounded p-2 w-full"
          name="description"
          rows="5"
          placeholder="An overview of what the code does"
      >{{old('description')}}</textarea>
      @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label
          for="explanation"
          class="inline-block text-lg mb-2"
          >Explanation of Code</label
      >
      <textarea
          class="border border-gray-200 rounded p-2 w-full"
          name="explanation"
          rows="5"
          placeholder="Example: The sort() method is called on the numbers array, which takes..."
      >{{old('explanation')}}</textarea>
      @error('explanation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="screenshot" class="inline-block text-lg mb-2">
          Screenshot of Code
      </label>
      <input
          type="file"
          class="border border-gray-200 rounded p-2 w-full"
          name="screenshot"
      />
      @error('screenshot')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <button
          class="bg-customBlue text-white rounded py-2 px-4 hover:bg-customBlueDark"
      >
          Post
      </button>

      <a href="/" class="text-black ml-4"> Back </a>
    </div>
  </form>
</x-card>

@endsection