@props(['listing'])
<x-card>
  <a href="/listings/{{$listing->id}}" class="block">
    <div class="flex">
      <img
          class="hidden w-48 mr-6 md:block"
          src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
          alt="{{ $listing->logo ? 'Logo for ' . $listing->company : 'No logo available' }}"
      />
      <div>
        <h3 class="text-2xl">
          {{$listing->title}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
        <x-listing-tags :tagsCsv="$listing->tags" text-size="small"/>
        <div class="text-lg mt-4">
          <i class="fa-solid fa-location-dot"></i>
          {{$listing->location}}
        </div>
      </div>
    </div>
  </a>
</x-card>