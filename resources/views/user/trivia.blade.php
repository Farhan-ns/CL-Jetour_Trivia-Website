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
</head>

<body class="">
  <div x-data x-init="$flux.appearance = 'light'">
  </div>

  <div class="max-w-4xl mx-auto p-4">
    <div class="flex justify-center sm:justify-end mb-4">
      <img src="{{ asset('images/Logo-Jetour.png') }}" class="max-w-52" alt="Logo Jetour">
    </div>
    <div class="flex flex-col items-center bg-softblack w-full px-4 py-6 rounded-lg shadow-lg ">
      {{-- <h1 class="text-3xl text-white">Registrasi</h1> --}}

      <div class="p-1 w-full max-w-2xl flex flex-col items-center gap-1 mb-4">
        <img src="{{ asset('images/soal1.png') }}" class="border-white border-2 rounded-lg" alt="">
      </div>

      <div class="p-1 w-full max-w-2xl font-bold flex-col gap-1 mb-4">
        <label class="text-2xl text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor incididunt ut labore et.</label>

      </div>

      {{-- <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
        <div class="flex items-center mb-4">
          <input id="country-option-1" type="radio" name="countries" value="USA"
            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-teal-300 accent-teal-500" checked>
          <label for="country-option-1" class="block ms-2 text-lg font-medium text-white">
            United States
          </label>
        </div>
      </div> --}}

      <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
        <div class="flex items-center mb-4">
          <div class="rounded-full bg-teal-600 py-1 px-3 mr-2">
            <i class="fa-solid fa-a text-white "></i>
          </div>
          <button type="button"
            class=" shadow shadow-teal-400/50 w-full text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Lanjut</button>
        </div>
        <div class="flex items-center mb-4">
          <div class="rounded-full bg-teal-600 py-1 px-3 mr-2">
            <i class="fa-solid fa-a text-white "></i>
          </div>
          <button type="button"
            class=" shadow shadow-teal-400/50 w-full text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Lanjut</button>
        </div>
        <div class="flex items-center mb-4">
          <div class="rounded-full bg-teal-600 py-1 px-3 mr-2">
            <i class="fa-solid fa-a text-white "></i>
          </div>
          <button type="button"
            class=" shadow shadow-teal-400/50 w-full text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Lanjut</button>
        </div>
        <div class="flex items-center mb-4">
          <div class="rounded-full bg-teal-600 py-1 px-3 mr-2">
            <i class="fa-solid fa-a text-white "></i>
          </div>
          <button type="button"
            class=" shadow shadow-teal-400/50 w-full text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Lanjut</button>
        </div>

      </div>

    </div>

    <div class="flex justify-end mt-4">
      <img src="{{ asset('images/Jetour - DNA.png') }}" class="max-w-52" alt="Logo Jetour">
    </div>
  </div>

  @fluxScripts
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
