<form wire:submit='save'>
  <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
    <label class="text-2xl text-white">Nama</label>
    @error('name')
      <p class="bg-white py-1 px-2 rounded-lg text-red-600">{{ $message }}</p>
    @enderror
    <input wire:model="name" type="text" id="name"
      class="mt-2 bg-gray-50 border shadow-[inset_0_8px_8px_rgba(0,0,0,0.2)] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      placeholder="Nama" required />
  </div>

  <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
    <label class="text-2xl text-white">Nomor Telepon</label>
    @error('phone')
      <p class="bg-white py-1 px-2 rounded-lg text-red-600">{{ $message }}</p>
    @enderror
    <input wire:model="phone" type="text" id="phone"
      class="mt-2 bg-gray-50 border border-gray-300 shadow-[inset_0_8px_8px_rgba(0,0,0,0.2)] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      placeholder="08xxxxxxxxxx" required />
  </div>

  <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
    <label class="text-2xl text-white">Email</label>
    @error('email')
      <p class="bg-white py-1 px-2 rounded-lg text-red-600">{{ $message }}</p>
    @enderror
    <input wire:model="email" type="email" id="email"
      class="mt-2 bg-gray-50 border shadow-[inset_0_8px_8px_rgba(0,0,0,0.2)] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      placeholder="Email" required />
  </div>

  <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
    <label class="text-2xl text-white">Kota</label>
    @error('city')
      <p class="bg-white py-1 px-2 rounded-lg text-red-600">{{ $message }}</p>
    @enderror
    <input wire:model="city" type="text" id="city"
      class="mt-2 bg-gray-50 border shadow-[inset_0_8px_8px_rgba(0,0,0,0.2)] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      placeholder="Kota" required />
  </div>

  <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
    <div class="flex items-center mb-4">
      @include('user.components.button')
    </div>
  </div>

</form>
