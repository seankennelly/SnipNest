@if(session()->has('message'))
  <div x-data="{show: true}" x-show="show" x-init="setTimeout(() => show = false, 6000)" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-slate-100 text-black rounded-b-lg px-8 py-3">
    <p class="text-center">
      {{session('message')}}
    </p>
  </div>
@endif