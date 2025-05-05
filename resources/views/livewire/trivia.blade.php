<div class="flex flex-col items-center bg-softblack w-full px-4 py-6 rounded-lg shadow-lg ">

  <div class="p-1 w-full max-w-2xl flex flex-col items-center gap-1 mb-4">
    <img src="{{ asset('images/' . $question->image) }}" class="border-white border-2 rounded-lg" alt="">
  </div>

  <div class="p-1 w-full max-w-2xl font-bold flex-col gap-1 mb-4">
    <label class="text-2xl text-white">
      {{ $question->question }}
    </label>
  </div>

  <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4">
    @foreach ($choices as $choice)
      @foreach ($choice as $text => $isCorrect)
        <div class="flex items-center mb-4">
          <div class="rounded-full bg-teal-600 py-1 px-3 mr-2">
            <span class="text-white text-lg font-bold">
              {{ chr(65 + $loop->parent->index) }} {{-- A = 65 in ASCII --}}
            </span>
          </div>
          <button type="button" wire:click='selectAnswer(@json($choice))'
            class="cursor-pointer shadow shadow-teal-400/50 w-full text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">
            {{ $text }}
          </button>
        </div>
      @endforeach
    @endforeach

  </div>
</div>
