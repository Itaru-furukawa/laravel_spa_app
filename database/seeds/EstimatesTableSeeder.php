<?php
use App\Estimate;
use Illuminate\Database\Seeder;

class EstimatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            Estimate::create([
                'saidan1'=> 1500 + 1500 * $i,
                'saidan2'=> 1500 + 1500 * $i,
                'butsugu'=> 1500 + 1500 * $i,
                'facility'=> 1500 + 1500 * $i,
                'importCost'=> 1500 + 1500 * $i,
                'bed1'=> 1500 + 1500 * $i,
                'bed2'=> 1500 + 1500 * $i,
                'nokan'=> 1500 + 1500 * $i,
                'specialDeodorant'=> 1500 + 1500 * $i,
                'specialYukan'=> 1500 + 1500 * $i,
                'specialClear'=> 1500 + 1500 * $i,
                'specialLastmake'=> 1500 + 1500 * $i,
                'dryice'=> 1500 + 1500 * $i,
                'dryicePer' => 8500 + 100 * $i,
                'dryiceQ'=> $i,
                'iei1'=> 1500 + 1500 * $i,
                'iei2'=> 1500 + 1500 * $i,
                'reijo'=> 1500 + 1500 * $i,
                'reijoPer' => 8500 + 100 * $i,
                'reijoQ'=> $i,
                'flower1'=> 1500 + 1500 * $i,
                'flower2'=> 1500 + 1500 * $i,
                'mogiri1'=> 1500 + 1500 * $i,
                'mogiri2'=> 1500 + 1500 * $i,
                'kumotsu1'=> 1500 + 1500 * $i,
                'kumotsu2'=> 1500 + 1500 * $i,
                'saidanFlower1'=> 1500 + 1500 * $i,
                'saidanFlower2'=> 1500 + 1500 * $i,
                'garden1'=> 1500 + 1500 * $i,
                'garden2'=> 1500 + 1500 * $i,
                'chochin1'=> 1500 + 1500 * $i,
                'chochin2'=> 1500 + 1500 * $i,
                'mizuhiki1'=> 1500 + 1500 * $i,
                'mizuhiki2'=> 1500 + 1500 * $i,
                'shoko1'=> 1500 + 1500 * $i,
                'shoko2'=> 1500 + 1500 * $i,
                'mainBoard1'=> 1500 + 1500 * $i,
                'mainBoard2'=> 1500 + 1500 * $i,
                'guideBoard1'=> 1500 + 1500 * $i,
                'guideBoard2'=> 1500 + 1500 * $i,
                'tent'=> 1500 + 1500 * $i,
                'reception'=> 1500 + 1500 * $i,
                'consume'=> 1500 + 1500 * $i,
                'moderator'=> 1500 + 1500 * $i,
                'saijo'=> 1500 + 1500 * $i,
                'staff1'=> 1500 + 1500 * $i,
                'staff2'=> 1500 + 1500 * $i,
                'trans1_1'=> 1500 + 1500 * $i,
                'trans1_2'=> 1500 + 1500 * $i,
                'trans2_1'=> 1500 + 1500 * $i,
                'trans2_2'=> 1500 + 1500 * $i,
                'transItem'=> 1500 + 1500 * $i,
                'acting'=> 1500 + 1500 * $i,
                'manage'=> 1500 + 1500 * $i,
                'pillow1'=> 1500 + 1500 * $i,
                'pillow2'=> 1500 + 1500 * $i,
                'decoration1'=> 1500 + 1500 * $i,
                'decoration2'=> 1500 + 1500 * $i,
                'subTotal1'=> 1500 + 1500 * $i,
                'totalTax1'=> 1500 + 1500 * $i,
                'total1'=> 1500 + 1500 * $i,
                'cremation1'=> 1500 + 1500 * $i,
                'cremation2'=> 1500 + 1500 * $i,
                'shukotsu1'=> 1500 + 1500 * $i,
                'shukotsu2'=> 1500 + 1500 * $i,
                'restRoom1'=> 1500 + 1500 * $i,
                'restRoom2'=> 1500 + 1500 * $i,
                'store1'=> 1500 + 1500 * $i,
                'store2'=> 1500 + 1500 * $i,
                'vehicle1'=> 1500 + 1500 * $i,
                'vehicle2'=> 1500 + 1500 * $i,
                'car1'=> 1500 + 1500 * $i,
                'car2'=> 1500 + 1500 * $i,
                'car3'=> 1500 + 1500 * $i,
                'car4'=> 1500 + 1500 * $i,
                'bus1'=> 1500 + 1500 * $i,
                'bus2'=> 1500 + 1500 * $i,
                'fee1'=> 1500 + 1500 * $i,
                'fee2'=> 1500 + 1500 * $i,
                'total2'=> 1500 + 1500 * $i,
            ]);
        }
    }
}
