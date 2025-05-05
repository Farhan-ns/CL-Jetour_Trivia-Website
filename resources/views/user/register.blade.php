<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @include('partials.head')

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/93ff56668f.js" crossorigin="anonymous"></script>

  <title>Registrasi - Jetour Trivia</title>

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
</head>

<body class="bg-[#27afb0]">
  <div x-data x-init="$flux.appearance = 'light'">
  </div>

  <div class="max-w-4xl mx-auto min-h-screen">
    <div class="flex">
      <div class="shadow-[25px_0px_25px_-5px_rgba(0,0,0,0.3)] w-[20%] md:w-[10%]">

      </div>
      <div class="flex-auto p-4 min-h-screen">
        <div class="flex justify-center sm:justify-end mb-4">
          <img src="{{ asset('images/logo-jetour-white.png') }}" class="max-w-52" alt="Logo Jetour">
        </div>
        <div data-aos="fade-left" data-aos-duration="300" class="flex flex-col items-cente w-full px-4 py-6 ">

          <livewire:register-form />
          
          <div class="flex justify-end mt-4">
            <img src="{{ asset('images/Jetour - DNA.png') }}" class="max-w-52" alt="Logo Jetour">
          </div>
        </div>

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
