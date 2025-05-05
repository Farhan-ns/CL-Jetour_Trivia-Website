<div>
  <style>
    .btn-quiz-bg {
      background-image: url('{{ asset('images/form.png') }}');
    }

    .btn-quiz-bg:hover {
      background-image: url('{{ asset('images/form-active.png') }}');
    }

    .btn-quiz-bg:focus {
      background-image: url('{{ asset('images/form-active.png') }}');
    }

    .btn-quiz-alfabet-bg {
      background-image: url('{{ asset('images/circle.png') }}');
    }

    .btn-quiz-alfabet-bg:hover {
      background-image: url('{{ asset('images/circle-active.png') }}');
    }

    .btn-quiz-alfabet-bg:focus {
      background-image: url('{{ asset('images/circle-active.png') }}');
    }
  </style>

  <div class="w-full flex flex-col items-center gap-1 mb-4">
    <img src="{{ asset('images/' . $question->image) }}" class="" alt="">
  </div>
  <div class="flex flex-col w-full px-4 py-6 rounded-lg ">
    {{-- <h1 class="text-3xl text-white">Registrasi</h1> --}}

    <div class="p-1 w-full max-w-2xl font-bold flex-col gap-1 mb-4">
      <label class="text-2xl text-[#1a1564]">
        {{ $question->question }}
      </label>
    </div>

    <div class="p-1 w-full max-w-2xl flex-col gap-1 mb-4 md:ml-[-6%] ml-[-14%]">
      @foreach ($choices as $choice)
        @foreach ($choice as $text => $isCorrect)
          <div class="flex gap-4 mb-4">
            <div class="btn-quiz-alfabet-bg bg-cover bg-center rounded-full w-14 aspect-square
       ">
              <div class="text-[#1a1564] text-[2rem] text-center size-full aspect-square">
                {{ chr(65 + $loop->parent->index) }} {{-- A = 65 in ASCII --}}</div>
            </div>
            <button type="button" wire:click='selectAnswer(@json($choice))'
              class=" btn-quiz-bg size-full bg-cover bg-center rounded-xl shadow-xl transition-all duration-300 text-[2rem] text-[#1a1564] text-left px-4">
              {{ $text }}
            </button>
          </div>
        @endforeach
      @endforeach
    </div>

  </div>

</div>
