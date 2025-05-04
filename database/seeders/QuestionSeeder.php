<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'image' => 'Logo-Jetour.png',
                'question' => 'Dari negara mana brand JETOUR berasal?',
                'choices' => [
                    ['Cina' => true],
                    ['Jepang' => false],
                    ['Korea' => false],
                    ['Indonesia' => false],
                ],
            ],
            [
                'image' => 'soal1.png',
                'question' => 'Siapakah presiden ketiga Indonesia?',
                'choices' => [
                    ['Susilo Bambang Yudhoyono' => false],
                    ['Megawati' => false],
                    ['B.J. Habibie' => true],
                    ['Abdurrahman Wahid' => false],
                ],
            ],
            [
                'image' => 'soal2.png',
                'question' => 'Mana yang merupakan produk JETOUR?',
                'choices' => [
                    ['Caring' => false],
                    ['Daring' => false],
                    ['Dashing' => true],
                    ['Darjeeling' => false],
                ],
            ],
            [
                'image' => 'soal3.png',
                'question' => 'Pusat sistem tatasurya adalah?',
                'choices' => [
                    ['Bumi' => false],
                    ['Bulan' => false],
                    ['Matahari' => true],
                    ['Planet' => false],
                ],
            ],
            [
                'image' => 'soal4.png',
                'question' => 'Apa nama ibukota Negara Australia?',
                'choices' => [
                    ['Sydney' => false],
                    ['Perth' => false],
                    ['Adelaide' => false],
                    ['Canberra' => true],
                ],
            ],
            [
                'image' => 'soal5.png',
                'question' => 'Siapakah Global Brand Ambassador JETOUR?',
                'choices' => [
                    ['Avicii' => false],
                    ['Alan Walker' => true],
                    ['Winky Wiryawan' => false],
                    ['Wishnu Santika' => false],
                ],
            ],
            [
                'image' => 'soal6.png',
                'question' => 'Berapa jumlah provinsi di Indonesia saat ini?',
                'choices' => [
                    ['35' => false],
                    ['36' => false],
                    ['37' => false],
                    ['38' => true],
                ],
            ],
            [
                'image' => 'soal7.png',
                'question' => 'Salah satu gunung di Nusa Tenggara Barat?',
                'choices' => [
                    ['Merapi' => false],
                    ['Rinjani' => true],
                    ['Kerinci' => false],
                    ['Lawu' => false],
                ],
            ],
            
        ];

        foreach ($questions as $question) {
            Question::create([
                'image' => $question['image'],
                'question' => $question['question'],
                'choices' => $question['choices'],
            ]);
        }
    }
}
