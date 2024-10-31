<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{-- Favicons --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url ('images/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url ('images/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url ('images/favicons/favicon-16x16.png') }}">
        {{-- Alpine.js --}}
        <script src="//unpkg.com/alpinejs" defer></script>
        {{-- Stylesheets --}}
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                            customBlue: '#39AAD8',
                            customBlueDark: '#3C9DC3',
                            customBlack: '#22292E',
                        },
                    }, 
                },
            };
        </script>
        <title>SnipNest</title>
    </head>
    <body class="min-h-screen flex flex-col bg-customBlack">
        <nav class="flex justify-between items-center mt-4 mb-4">
            <a href="{{ url('/') }}">
                <img class="w-24 ms-4" src="{{asset('images/logo_circle.png')}}" alt="The SnipNest logo" class="logo"/>
            </a>
            <ul class="flex space-x-6 mr-6 text-lg text-white">
              @auth
                <li>
                  <span class="font-bold uppercase">
                    {{auth()->user()->name}}
                  </span>
                </li>
                <li>
                  <a href="{{ url ('/listings/manage') }}" class="hover:text-customBlue">
                    <i class="fa-solid fa-rectangle-list"></i>
                      Manage Snippets
                  </a>
                </li>
                <li>
                  <form method="POST" action="{{ url ('/logout') }}" class="inline hover:text-customBlue">
                    @csrf
                    <button type="submit">
                      <i class="fa-solid fa-door-open"></i>Logout
                    </button>
                  </form>
                </li>
              @else
                <li>
                  <a href="{{ url ('/register') }}" class="hover:text-customBlue">
                      <i class="fa-solid fa-user-plus"></i>
                      Register
                  </a>
                </li>
                <li>
                  <a href="{{ url ('/login') }}" class="hover:text-customBlue">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                      Login
                  </a>
                </li>
              @endauth
            </ul>
        </nav>
        <main class="flex-grow pb-10">

          {{-- VIEW OUTPUT --}}
          @yield('content')

        </main>
        <footer
          class="w-full flex flex-col sm:flex-row items-center justify-center font-bold bg-customBlue text-white text-sm h-24 sm:h-14 opacity-90 p-4 sm:fixed sm:bottom-0">
          @auth
            <a
              href="{{ url ('/listings/create') }}"
              class="sm:absolute sm:right-10 mb-2 sm:mb-0 bg-black text-white py-2 px-5 rounded">
              Post Snippet
            </a>
          @else
            <a
              href="{{ url ('/login') }}"
              class="sm:absolute sm:right-10 mb-2 sm:mb-0 bg-black text-white py-2 px-5 rounded">
              Log In
            </a>
          @endauth
          <p class="ml-2 text-center sm:order-2">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Seán Kennelly. All Rights Reserved</p>
        </footer>
        <x-flash-message />

        {{-- To stop bottom of footer disappearing on mobile --}}
        <script>
          function adjustFooterPosition() {
          const footer = document.querySelector('footer');
          const windowHeight = window.innerHeight;
          const footerHeight = footer.offsetHeight;
          const bodyHeight = document.body.offsetHeight;

          // If content height is less than the viewport, keep footer fixed to the bottom
          if (bodyHeight < windowHeight) {
            footer.style.position = 'fixed';
            footer.style.bottom = '0';
          } else {
            footer.style.position = 'relative';
          }
          }

          window.addEventListener('resize', adjustFooterPosition);
          window.addEventListener('scroll', adjustFooterPosition);

          // Initial call to set the footer correctly
          adjustFooterPosition();
        </script>

    </body>
</html>