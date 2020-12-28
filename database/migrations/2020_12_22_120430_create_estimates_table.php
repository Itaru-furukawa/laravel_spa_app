<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('saidan1',100)->nullable();
            $table->bigInteger('saidan2')->nullable();
            $table->bigInteger('butsugu')->nullable();
            $table->bigInteger('facility')->nullable();
            $table->bigInteger('importCost')->nullable();
            $table->string('bed1',100)->nullable();
            $table->bigInteger('bed2')->nullable();
            $table->bigInteger('nokan')->nullable();
            $table->bigInteger('specialDeodorant')->nullable();
            $table->bigInteger('specialYukan')->nullable();
            $table->bigInteger('specialClear')->nullable();
            $table->bigInteger('specialLastmake')->nullable();
            $table->bigInteger('dryice')->nullable();
            $table->bigInteger('dryicePer')->nullable();
            $table->bigInteger('dryiceQ')->nullable();
            $table->string('iei1',100)->nullable();
            $table->bigInteger('iei2')->nullable();
            $table->bigInteger('reijo')->nullable();
            $table->bigInteger('reijoPer')->nullable();
            $table->bigInteger('reijoQ')->nullable();
            $table->string('flower1',100)->nullable();
            $table->bigInteger('flower2')->nullable();
            $table->string('mogiri1',100)->nullable();
            $table->bigInteger('mogiri2')->nullable();
            $table->string('kumotsu1',100)->nullable();
            $table->bigInteger('kumotsu2')->nullable();
            $table->string('saidanFlower1',100)->nullable();
            $table->bigInteger('saidanFlower2')->nullable();
            $table->string('garden1',100)->nullable();
            $table->bigInteger('garden2')->nullable();
            $table->string('chochin1',100)->nullable();
            $table->bigInteger('chochin2')->nullable();
            $table->string('mizuhiki1',100)->nullable();
            $table->bigInteger('mizuhiki2')->nullable();
            $table->string('shoko1',100)->nullable();
            $table->bigInteger('shoko2')->nullable();
            $table->string('mainBoard1',100)->nullable();
            $table->bigInteger('mainBoard2')->nullable();
            $table->string('guideBoard1',100)->nullable();
            $table->bigInteger('guideBoard2')->nullable();
            $table->bigInteger('tent')->nullable();
            $table->bigInteger('reception')->nullable();
            $table->bigInteger('consume')->nullable();
            $table->bigInteger('moderator')->nullable();
            $table->bigInteger('saijo')->nullable();
            $table->string('staff1',100)->nullable();
            $table->bigInteger('staff2')->nullable();
            $table->string('trans1_1',100)->nullable();
            $table->bigInteger('trans1_2')->nullable();
            $table->string('trans2_1',100)->nullable();
            $table->bigInteger('trans2_2')->nullable();
            $table->bigInteger('transItem')->nullable();
            $table->bigInteger('acting')->nullable();
            $table->bigInteger('manage')->nullable();
            $table->string('pillow1',100)->nullable();
            $table->bigInteger('pillow2')->nullable();
            $table->string('decoration1',100)->nullable();
            $table->bigInteger('decoration2')->nullable();
            $table->string('subTotal1',100)->nullable();
            $table->string('totalTax1',100)->nullable();
            $table->bigInteger('total1')->nullable();
            $table->string('cremation1',100)->nullable();
            $table->bigInteger('cremation2')->nullable();
            $table->string('shukotsu1',100)->nullable();
            $table->bigInteger('shukotsu2')->nullable();
            $table->string('restRoom1',100)->nullable();
            $table->bigInteger('restRoom2')->nullable();
            $table->string('store1',100)->nullable();
            $table->bigInteger('store2')->nullable();
            $table->string('vehicle1',100)->nullable();
            $table->bigInteger('vehicle2')->nullable();
            $table->string('car1',100)->nullable();
            $table->bigInteger('car2')->nullable();
            $table->string('car3',100)->nullable();
            $table->bigInteger('car4')->nullable();
            $table->string('bus1',100)->nullable();
            $table->bigInteger('bus2')->nullable();
            $table->string('fee1',100)->nullable();
            $table->bigInteger('fee2')->nullable();
            $table->bigInteger('total2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimates');
    }
}
