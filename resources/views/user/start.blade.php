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

    <div class="flex justify-center max-w-2xl">
      <h1 data-aos="zoom-in-up" data-aos-duration="500" class="text-4xl text-center font-bold text-white mb-40">
        TRIVIA QUIZ
      </h1>
    </div>

    <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
      <a href="/user/registrasi">
        <div class="flex items-center justify-center mb-4 ">
          <div class="w-lg h-12">
            @include('user.components.button')

          </div>
        </div>
      </a>
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
