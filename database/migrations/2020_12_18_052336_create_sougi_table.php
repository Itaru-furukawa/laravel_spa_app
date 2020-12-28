<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSougiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sougi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('compName', 100);
            $table->string('reqYear', 100)->nullable();
            $table->string('reqMonth', 100)->nullable();
            $table->string('reqDay', 100)->nullable();
            $table->string('tuyaYear', 100)->nullable();
            $table->string('tuyaMonth', 100)->nullable();
            $table->string('tuyaDay', 100)->nullable();
            $table->string('tuyaHours', 100)->nullable();
            $table->string('tuyaMins', 100)->nullable();
            $table->string('tuyaHourf', 100)->nullable();
            $table->string('tuyaMinf', 100)->nullable();
            $table->string('tuyaHourg', 100)->nullable();
            $table->string('tuyaMing', 100)->nullable();
            $table->string('kokubetsuYear', 100)->nullable();
            $table->string('kokubetsuMonth', 100)->nullable();
            $table->string('kokubetsuDay', 100)->nullable();
            $table->string('kokubetsuHours', 100)->nullable();
            $table->string('kokubetsuMins', 100)->nullable();
            $table->string('kokubetsuHourf', 100)->nullable();
            $table->string('kokubetsuMinf', 100)->nullable();
            $table->string('kokubetsuHourg', 100)->nullable();
            $table->string('kokubetsuMing', 100)->nullable();
            $table->string('kasouYear', 100)->nullable();
            $table->string('kasouMonth', 100)->nullable();
            $table->string('kasouDay', 100)->nullable();
            $table->string('kasouHours', 100)->nullable();
            $table->string('kasouMins', 100)->nullable();
            $table->string('kasouHourf', 100)->nullable();
            $table->string('kasouMinf', 100)->nullable();
            $table->string('kasouHourg', 100)->nullable();
            $table->string('kasouMing', 100)->nullable();
            $table->string('soukaSpell' , 100)->nullable();
            $table->string('soukaName' , 100)->nullable();
            $table->string('kojinSpell' , 100)->nullable();
            $table->string('kojinName' , 100)->nullable();
            $table->string('kojinAddress' , 100)->nullable();
            $table->string('kojinHead' , 100)->nullable();
            $table->string('kojinPermAddress' , 100)->nullable();
            $table->string('kojinPrinciple' , 100)->nullable();
            $table->string('spouse' , 100)->nullable();
            $table->string('spouseAge' , 100)->nullable();
            $table->string('spouseStatus' , 100)->nullable();
            $table->string('kojinBirthYear' , 100)->nullable();
            $table->string('kojinBirthMonth' , 100)->nullable();
            $table->string('kojinBirthDay' , 100)->nullable();
            $table->string('kojinAge' , 100)->nullable();
            $table->string('kojinSex' , 100)->nullable();
            $table->string('deadYear' , 100)->nullable();
            $table->string('deadMonth' , 100)->nullable();
            $table->string('deadDay' , 100)->nullable();
            $table->string('deadHour' , 100)->nullable();
            $table->string('deadMin' , 100)->nullable();
            $table->string('moshuSpell' , 100)->nullable();
            $table->string('moshuName' , 100)->nullable();
            $table->string('moshuBirthYear' , 100)->nullable();
            $table->string('moshuBirthMonth' , 100)->nullable();
            $table->string('moshuBirthDay' , 100)->nullable();
            $table->string('moshuRelation' , 100)->nullable();
            $table->string('moshuTel1' , 100)->nullable();
            $table->string('moshuTel2' , 100)->nullable();
            $table->string('moshuAddress' , 100)->nullable();
            $table->string('moshuHead' , 100)->nullable();
            $table->string('moshuPermAddress' , 100)->nullable();
            $table->string('moshuPrinciple' , 100)->nullable();
            $table->string('repSpell' , 100)->nullable();
            $table->string('repName' , 100)->nullable();
            $table->string('repBirthYear' , 100)->nullable();
            $table->string('repBirthMonth' , 100)->nullable();
            $table->string('repBirthDay' , 100)->nullable();
            $table->string('repRelation' , 100)->nullable();
            $table->string('repTel1' , 100)->nullable();
            $table->string('repTel2' , 100)->nullable();
            $table->string('repAddress' , 100)->nullable();
            $table->string('repHead' , 100)->nullable();
            $table->string('repPermAddress' , 100)->nullable();
            $table->string('repPrinciple' , 100)->nullable();
            $table->string('demName' , 100)->nullable();
            $table->string('temTel' , 100)->nullable();
            $table->string('demAddress' , 100)->nullable();
            $table->string('payWay' , 100)->nullable();
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
        Schema::dropIfExists('sougi');
    }
}
