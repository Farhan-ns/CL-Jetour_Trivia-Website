<?php

namespace App\Livewire;

use App\Models\User;
use Flux\Flux;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\Rule;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class UserTable extends PowerGridComponent
{
    public string $tableName = 'user-table-p9vyyk-table';
    public int $selectedUserId;
    public ?User $selectedUser = null;
    public ?array $selectedUserAnswerData = null;

    public function setUp(): array
    {
        // $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return User::query()
            ->where('email', '!=', 'admin@cyberlabs.co.id');
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('phone')
            ->add('name_lower', fn(User $model) => strtolower(e($model->name)))
            ->add('score', fn(User $model) => $model->triviaAnswer->first()->getScore()['score'])
            ->add('created_at')
            ->add('created_at_formatted', fn(User $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Skor', 'score')
                ->sortable(),

            Column::make('Nama', 'name')
                ->searchable()
                ->sortable(),

            Column::make('Nomor Telepon', 'phone')
                ->searchable(),

            Column::make('Email', 'email')
                ->searchable(),

            Column::make('Kota', 'city')
                ->searchable(),

            Column::make('Created at', 'created_at')
                ->hidden(),

            Column::make('Tanggal', 'created_at_formatted', 'created_at')
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            // Filter::inputText('name'),
            // Filter::datepicker('created_at_formatted', 'created_at'),
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert(' . $rowId . ')');
    }

    #[\Livewire\Attributes\On('showAnswer')]
    public function showAnswer($rowId): void
    {
        $this->selectedUserId = $rowId;
        $this->selectedUser = User::with('triviaAnswer')->findOrFail($this->selectedUserId);
        $this->selectedUserAnswerData = $this->selectedUser->triviaAnswer->first()->getScore();

        $this->js('window.setUserScore(' . json_encode([
            'correctCount' => $this->selectedUserAnswerData['correctCount'],
            'totalCount' => $this->selectedUserAnswerData['totalCount'],
            'score' => $this->selectedUserAnswerData['score'],
        ]) . ')');

        Flux::modal('user-answer')->show();
    }

    public function actions(User $row): array
    {
        return [
            Button::add('edit')
                ->slot('Lihat Skor')
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('showAnswer', ['rowId' => $row->id])
        ];
    }

    /*
    public function actionRules(User $row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
