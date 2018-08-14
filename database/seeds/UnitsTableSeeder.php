<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 14/08/2018
 * Time: 19:30
 */
use Illuminate\Database\Seeder;
use App\Unit;
class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name'    => 'TEU',
        ]);
        Unit::create([
            'name'    => 'Hidrogênio',
        ]);
        Unit::create([
            'name'    => 'Movimentação',
        ]);
        Unit::create([
            'name'    => 'TMA',
        ]);
        Unit::create([
            'name'    => 'Utilidades',
        ]);
    }
}
