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
    <div data-aos="fade-left" data-aos-duration="300" class="flex flex-col items-center bg-softblack w-full px-4 py-6 rounded-lg shadow-lg ">
      <h1 class="text-3xl text-white">Registrasi</h1>

      <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
        <label class="text-2xl text-white">Nama</label>
        <input type="text" id="first_name"
          class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="Nama" required />
      </div>

      <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
        <label class="text-2xl text-white">Nomor Telepon</label>
        <input type="text" id="first_name"
          class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="08xxxxxxxxxx" required />
      </div>

      <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
        <div class="flex items-center mb-4">
            <input id="checkbox-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500">
            <label for="checkbox-2" class="ms-2 text-sm font-medium text-white">Saya mengetahui dan menyetujui untuk memberikan data pribadi guna kebutuhan layanan dan persetujuan ini memiliki kekuatan hukum yang mengikat.</label>
        </div>
      </div>

      <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
        <div class="flex items-center mb-4">
            <button type="button" class=" shadow shadow-teal-500/50 w-full text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Lanjut</button>
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
