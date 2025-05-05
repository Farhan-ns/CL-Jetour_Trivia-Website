<style>
    .btn-start-bg {
        background-image: url('{{ asset('images/form-active.png') }}');

    }

    .btn-start-bg:hover {
        background-image: url('{{ asset('images/form.png') }}');
    }

    .btn-start-bg:focus {
        background-image: url('{{ asset('images/form.png') }}');
    }
</style>

<button
    class="btn-start-bg size-full bg-cover bg-center rounded-xl shadow-xl transition-all duration-300 text-[2rem] text-white">
    MULAI
</button>