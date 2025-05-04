<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @include('partials.head')

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/93ff56668f.js" crossorigin="anonymous"></script>

  <title>Jetour Trivia</title>
</head>

<body class="">
  <div x-data x-init="$flux.appearance = 'light'">
  </div>

  <div class="max-w-4xl mx-auto flex flex-col items-center p-4">
    <div class="min-h-20">

    </div>

    <div class="flex justify-center mb-10">
      <img data-aos-duration="300" src="{{ asset('images/Logo-Jetour.png') }}" class="max-w-96" data-aos="zoom-in-up"
        alt="Logo Jetour">
    </div>

    <div class="flex justify-center max-w-2xl">
      <h1 data-aos="zoom-in-up" data-aos-duration="500" class="text-4xl text-center font-bold text-softblack mb-10">
        Opening Text Here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua.</h1>
    </div>

    <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
      <div class="flex items-center mb-4">
        <button data-aos="zoom-in-up" data-aos-duration="850" type="button"
          class=" shadow shadow-teal-500/50 w-full text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Lanjut</button>
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
