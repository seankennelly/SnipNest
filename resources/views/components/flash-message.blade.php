@if(session()->has('message'))
  <div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-customBlueDark text-white px-48 py-3">
    <p class="text-center">
      {{session('message')}}
    </p>
  </div>
@endif