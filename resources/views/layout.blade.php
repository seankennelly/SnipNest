<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{-- Favicons --}}
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
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
    <body class="mb-48 bg-customBlack">
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
        <main>

          {{-- VIEW OUTPUT --}}
          @yield('content')

        </main>
        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-customBlue text-white h-14 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Seán Kennelly. All Rights Reserved</p>
            @auth
              <a
                href="{{ url ('/listings/create') }}"
                class="absolute right-10 bg-black text-white py-2 px-5 rounded">
                Post Snippet
              </a>
            @else
              <a
                href="{{ url ('/login') }}"
                class="absolute right-10 bg-black text-white py-2 px-5 rounded">
                Log In
              </a>
            @endauth
        </footer>
        <x-flash-message />
    </body>
</html>