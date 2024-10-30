@props(['listing', 'flexible' => false])

<x-card :flexible="$flexible">
  <a href="{{ url('/listings/' . $listing->id) }}" class="block">
    <div class="{{ $flexible ? 'flex items-center' : '' }}">
      <img
          class="hidden w-48 mr-6 md:block rounded"
          src="{{ $listing->screenshot ? asset('storage/' . $listing->screenshot) : asset('/images/no-image.png') }}"
          alt="{{ $listing->screenshot ? 'Screenshot of code for ' . $listing->title : 'No screenshot available' }}"
      />
      <div>
        <h3 class="text-2xl mb-3">
          {{$listing->title}}
        </h3>
        <x-listing-tags :tagsCsv="$listing->tags" text-size="small"/>
        <div class="mt-4">
          <i class="fa-solid fa-circle-user"></i>
          {{$listing->user->name}}
        </div>
      </div>
    </div>
  </a>
</x-card>