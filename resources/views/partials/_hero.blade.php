<section
  class="relative h-72 bg-customBlue flex flex-col justify-center align-center text-center space-y-4 mb-4">
  <div
    class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    style="background-image: url('images/logo_hero.png')">
  </div>

  <div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-white">
        Snip<span class="text-black">Nest</span>
    </h1>
    <p class="text-2xl text-gray-200 font-bold my-4">
        Store and share essential code snippets
    </p>
    <div>
      @auth
        <a
          href="/listings/create"
          class="inline-block border-2 border-black bg-black text-white py-2 px-4 rounded-xl uppercase mt-2 hover:bg-white hover:text-black hover:border-customBlue">
          Post Your Latest Snippet
        </a>
      @else
        <a
          href="/register"
          class="inline-block border-2 border-black bg-black text-white py-2 px-4 rounded-xl uppercase mt-2 hover:bg-white hover:text-black">
          Sign Up to Post Your Snippet
        </a>
      @endauth
    </div>
  </div>
</section>