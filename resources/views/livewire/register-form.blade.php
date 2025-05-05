<form wire:submit="save">
  <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
    <label class="text-2xl text-white">Nama</label>
    @error('name')
      <p class="bg-white py-1 px-2 rounded-lg text-red-600">{{ $message }}</p>
    @enderror
    <input wire:model="name" type="text" id="first_name"
      class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      placeholder="Nama" />
  </div>

  <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
    <label class="text-2xl text-white">Nomor Telepon</label>
    @error('phone')
      <p class="bg-white py-1 px-2 rounded-lg text-red-600">{{ $message }}</p>
    @enderror
    <input wire:model="phone" type="tel" id="phone"
      class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      placeholder="08xxxxxxxxxx" />
  </div>

  <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
    @error('is_agree_to_terms')
        <p class="bg-white py-1 px-2 rounded-lg text-red-600">{{ $message }}</p>
      @enderror
    <div class="flex items-center mb-4">
      <input wire:model="is_agree_to_terms" id="checkbox-2" type="checkbox" value="1" name="is_agree_to_terms"
        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500">
      <label for="checkbox-2" class="ms-2 text-sm font-medium text-white">Saya mengetahui dan menyetujui untuk
        memberikan data pribadi guna kebutuhan layanan dan persetujuan ini memiliki kekuatan hukum yang
        mengikat.</label>
    </div>
  </div>

  <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
    <div class="flex items-center mb-4">
      <button type="submit"
        class="cursor-pointer shadow shadow-teal-500/50 w-full text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Lanjut</button>
    </div>
  </div>
</form>
