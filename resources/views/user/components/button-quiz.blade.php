
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


<div class="flex gap-4 mb-4">
    <div class="btn-quiz-alfabet-bg bg-cover bg-center rounded-full w-14 aspect-square
 ">
        <div class="text-[#1a1564] text-[2rem] text-center size-full aspect-square">A</div>
    </div>
    <button type="button"
        class=" btn-quiz-bg size-full bg-cover bg-center rounded-xl shadow-xl transition-all duration-300 text-[2rem] text-[#1a1564] text-left px-4">Lanjut</button>
</div>