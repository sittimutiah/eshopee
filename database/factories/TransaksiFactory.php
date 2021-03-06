<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaksi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tgl_sekarang = today();
        $length = 5;
        return [
            'tanggal' => $tgl_sekarang,
            'no_resi' => Str::random(5)
        ];
    }
}
