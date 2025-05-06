<x-layouts.app :title="__('Dashboard')">
  <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
      <flux:heading size="xl">Dashboard</flux:heading>
      <div class="flex justify-end mb-2">
        <flux:button href="/dashboard/user/export" variant="primary" class="cursor-pointer" icon="folder-arrow-down">
            Download Excel
        </flux:button>
      </div>
      <livewire:user-table />

      <flux:modal name="user-answer" class="md:w-96">
        <div class="space-y-6">
          <div>
            <flux:heading size="lg">Data Skor User</flux:heading>
            <flux:text class="mt-2">
              Soal Benar: <span x-text="$store.userScore.data.correctCount"></span> dari <span
                x-text="$store.userScore.data.totalCount"></span> Soal
            </flux:text>
            <flux:text>
              Skor: <span x-text="$store.userScore.data.score"></span>
            </flux:text>

          </div>
          <div class="flex">
            <flux:spacer />
            <flux:button x-on:click="$flux.modal('user-answer').close()" variant="primary">OK</flux:button>
          </div>
        </div>
      </flux:modal>
    </div>
  </div>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.store('userScore', {
        open: false,
        data: {
          correctCount: 0,
          totalCount: 0,
          score: 0
        }
      });
    });

    window.setUserScore = function(data) {
      Alpine.store('userScore').data = data;
      Alpine.store('userScore').open = true;
    }
  </script>
</x-layouts.app>
