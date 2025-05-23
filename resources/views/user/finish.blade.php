<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @include('partials.head')

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/93ff56668f.js" crossorigin="anonymous"></script>
  <style>
    @font-face {
      font-family: 'Manrope';
      src: url('/resources/assets/fonts/Manrope-VariableFont_wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: normal;
      font-display: swap;
    }

    body {
      font-family: 'Manrope', sans-serif;
    }

    .btn-start-bg {
      background-image: url('{{ asset('images/form-active.png') }}');

    }

    .btn-start-bg:hover {
      background-image: url('{{ asset('images/form.png') }}');
    }

    .btn-start-bg:focus {
      background-image: url('{{ asset('images/form.png') }}');
    }
  </style>
  <title>Jetour Trivia</title>
</head>

<body class="bg-[#27afb0]">
  <div x-data x-init="$flux.appearance = 'light'">
  </div>

  <div class="max-w-4xl mx-auto flex flex-col items-center p-4 px-4">
    <div class="min-h-20">

    </div>

    <div class="flex justify-center mb-4">
      <img data-aos-duration="300" src="{{ asset('images/logo-jetour-white.png') }}" class="w-100 max-w-96 px-4"
        data-aos="zoom-in-up" alt="Logo Jetour">
    </div>

    {{-- <div class="flex justify-center max-w-2xl">
      <h1 data-aos="zoom-in-up" data-aos-duration="500" class="text-4xl text-center font-bold text-white mb-40">
        TRIVIA QUIZ
      </h1>
    </div> --}}

    <div class="p-1 w-full max-w-2xl flex flex-col justify-center gap-1 mb-4 min-h-96">
      <form action="/user/finish" method="POST">
        @csrf
        <div class="flex items-center justify-center mb-4 ">
          <div class="w-lg h-12">
            <button type="submit"
              class="btn-start-bg size-full bg-cover bg-center rounded-xl shadow-xl transition-all duration-300 text-[2rem] text-white">
              SUBMIT
            </button>
          </div>
        </div>
      </form>
    </div>

  </div>
  </div>

  @fluxScripts
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
