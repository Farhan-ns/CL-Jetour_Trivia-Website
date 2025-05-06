<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::with('triviaAnswer')
            ->where('email', '!=', 'admin@cyberlabs.co.id')
            ->get();
    }

    public function styles(Worksheet $worksheet)
    {
        return [
            1 => ['font' => ['bold' => true],],
        ];
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Email',
            'Nomor Telepon',
            'Kota',
            'Skor',
            'Jawaban Benar',
            'Jawaban Salah',
            'Tanggal',
        ];
    }

    public function map($user): array
    {
        $answerData = $user->triviaAnswer->first()->getScore();

        return [
            Str::title($user->name),
            $user->email,
            $user->phone,
            Str::title($user->city),
            $answerData['score'],
            $answerData['correctCount'],
            $answerData['totalCount'] - $answerData['correctCount'],
            Carbon::parse($user->created_at)->setTimezone('Asia/Jakarta')->format('d/m/Y H:i:s'),
        ];
    }
}
