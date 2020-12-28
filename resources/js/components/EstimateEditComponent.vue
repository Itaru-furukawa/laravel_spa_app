<template>
    <div class="container">
        <LoadingBar v-show="loading1 || loading2"></LoadingBar>
        <div class="row justify-content-center" v-show="!loading1 && !loading2">
            <div class="col-md-8">
                <form v-on:submit.prevent="submitEstimate">
                    <div class="soukaName_estimate">{{soukaName}}家の御葬儀見積金額</div>
                    <div class="info_tag">弊社へのお支払い</div>
                    <div class="big_label_block">
                        <div class="label_top">祭壇</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="saidan1">備考</label>
                                <input class="form-control" id="saidan1" type="text" v-model="estimate.saidan1">
                            </div>
                            <div class="form-group col">
                                <label for="saidan2">価格</label>
                                <input class="form-control" id="saidan2" type="number" v-model="estimate.saidan2">
                            </div>
                        </div>
                        <div class="label_top">仏具一式（御導師用）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="butsugu">価格</label>
                                <input class="form-control" id="butsugu" type="number" v-model="estimate.butsugu">
                            </div>
                        </div>
                        <div class="label_top">付帯設備（一式）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="facility">価格</label>
                                <input class="form-control" id="facility" type="number" v-model="estimate.facility">
                            </div>
                        </div>
                        <div class="label_top">搬入搬出費（基本料）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.importCost">
                            </div>
                        </div>
                        <div class="label_top">御寝棺</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.bed1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.bed2">
                            </div>
                        </div>
                        <div class="label_top">納棺処置(基本料)</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.nokan">
                            </div>
                        </div>
                        <div class="label_top">特別処置</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">防腐・防臭</label>
                                <input class="form-control" id="" type="number" v-model="estimate.specialDeodorant">
                            </div>
                            <div class="form-group col">
                                <label for="">湯灌</label>
                                <input class="form-control" id="" type="number" v-model="estimate.specialYukan">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">清拭</label>
                                <input class="form-control" id="" type="number" v-model="estimate.specialClear">
                            </div>
                            <div class="form-group col">
                                <label for="">ラストメイク</label>
                                <input class="form-control" id="" type="number" v-model="estimate.specialLastmake">
                            </div>
                        </div>
                        <div class="label_top">ドライアイス</div>
                        <div class="form-group">
                            <label for="">価格</label>
                            <div class="form-group col-md-  flex-box">
                                10kg  @  <input class="form-control col-md-4" type="number" v-model="estimate.dryicePer"> × <input type="number" class="form-control col-md-2" v-model="estimate.dryiceQ">
                                <div class="calc-per-box">
                                 = ¥{{calcDryice}}
                                </div>
                                <input type="hidden" v-model="estimate.dryice">
                            </div>
                        </div>
                        <div class="label_top">御遺影</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.iei1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.iei2">
                            </div>
                        </div>
                        <div class="label_top">会葬礼状</div>
                        <div class="form-group">
                            <label for="">価格</label>
                            <div class="form-group col-md-  flex-box">
                                100枚  @  <input class="form-control col-md-4" type="number" v-model="estimate.reijoPer"> × <input type="number" class="form-control col-md-2" v-model="estimate.reijoQ">
                                <div class="calc-per-box">
                                 = ¥{{calcReijo}}
                                </div>
                            </div>
                        </div>
                        <div class="label_top">花束</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.flower1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.flower2">
                            </div>
                        </div>
                        <div class="label_top">もぎり花</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.mogiri1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.mogiri2">
                            </div>
                        </div>
                        <div class="label_top">供物</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.kumotsu1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.kumotsu2">
                            </div>
                        </div>
                        <div class="label_top">祭壇花</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.saidanFlower1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.saidanFlower2">
                            </div>
                        </div>
                        <div class="label_top">庭飾り</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.garden1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.garden2">
                            </div>
                        </div>
                        <div class="label_top">提灯</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.chochin1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.chochin2">
                            </div>
                        </div>
                        <div class="label_top">水引</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.mizuhiki1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.mizuhiki2">
                            </div>
                        </div>
                        <div class="label_top">焼香・受付・式場幕</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="備考" v-model="estimate.shoko1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.shoko2">
                            </div>
                        </div>
                        <div class="label_top">メイン看板</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.mainBoard1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.mainBoard2">
                            </div>
                        </div>
                        <div class="label_top">案内看板</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.guideBoard1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.guideBoard2">
                            </div>
                        </div>
                        <div class="label_top">テントセット（一式）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.tent">
                            </div>
                        </div>
                        <div class="label_top">受付セット（一式）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.reception">
                            </div>
                        </div>
                        <div class="label_top">消耗品（一式）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.consume">
                            </div>
                        </div>
                        <div class="label_top">式進行・司会（基本料）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.moderator">
                            </div>
                        </div>
                        <div class="label_top">斎場随行（基本料）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.saijo">
                            </div>
                        </div>
                        <div class="label_top">セレモニースタッフ</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.staff1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.staff2">
                            </div>
                        </div>
                        <div class="label_top">搬送料金１</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.trans1_1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.trans1_2">
                            </div>
                        </div>
                        <div class="label_top">搬送料金２</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.trans2_1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.trans2_2">
                            </div>
                        </div>
                        <div class="label_top">搬送用具（一式）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.transItem">
                            </div>
                        </div>
                        <div class="label_top">諸手続代行（一式）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.acting">
                            </div>
                        </div>
                        <div class="label_top">運営管理（基本料）</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.manage">
                            </div>
                        </div>
                        <div class="label_top">枕飾りセット</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.pillow1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.pillow2">
                            </div>
                        </div>
                        <div class="label_top">後飾りセット</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.decoration1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.decoration2">
                            </div>
                        </div>
                        <div class="total_box">
                            <div class="shokei">
                                <div class="form-group col">
                                    小計 : {{this.calcTotal1.toLocaleString()}}円
                                </div>
                            </div>
                            <div class="consumptionTax">
                                <div class="form-group col">
                                    <label for="consumptionTax">消費税</label>
                                    <select v-model="consumptionTax" id="consumptionTax">
                                        <option v-for="i in 20" :value="i">{{i}}%</option>
                                    </select>
                                     : 
                                    {{estimate.totalTax1.toLocaleString() }}円
                                </div>
                            </div>
                            <div class="total1">
                                <div class="form-group col">
                                    合計 : {{estimate.total1.toLocaleString() }} 円
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info_tag">弊社以外へのお支払い</div>
                    <div class="big_label_block">
                        <div class="label_top">火葬料</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.cremation1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.cremation2">
                            </div>
                        </div>
                        <div class="label_top">収骨容器</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.shukotsu1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.shukotsu2">
                            </div>
                        </div>
                        <div class="label_top">休憩室</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.restRoom1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.restRoom2">
                            </div>
                        </div>
                        <div class="label_top">保管</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.store1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.store2">
                            </div>
                        </div>
                        <div class="label_top">霊柩自動車</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.vehicle1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.vehicle2">
                            </div>
                        </div>
                        <div class="label_top">移動車１</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.car1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.car2">
                            </div>
                        </div>
                        <div class="label_top">移動車２</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.car3">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.car4">
                            </div>
                        </div>
                        <div class="label_top">マイクロバス</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.bus1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.bus2">
                            </div>
                        </div>
                        <div class="label_top">式場費</div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="">備考</label>
                                <input class="form-control" id="" type="text" v-model="estimate.fee1">
                            </div>
                            <div class="form-group col">
                                <label for="">価格</label>
                                <input class="form-control" id="" type="number" v-model="estimate.fee2">
                            </div>
                        </div>
                        <div class="total_box">
                            <div class="shokei">
                                <div class="form-group col">
                                    小計 : {{calcTotal2.toLocaleString()}}円
                                </div>
                            </div>
                            <div class="consumptionTax">
                                <div class="form-group col">
                                    <label for="consumptionTax">消費税</label>
                                    <select v-model="consumptionTax" id="consumptionTax">
                                        <option v-for="i in 20" :value="i">{{i}}%</option>
                                    </select>
                                     : 
                                    {{(calcTotal2 * (consumptionTax) / 100).toLocaleString() }}円
                                </div>
                            </div>
                            <div class="total1">
                                <div class="form-group col">
                                    合計 : {{(calcTotal2 * (100 + consumptionTax) / 100).toLocaleString() }} 円
                                </div>
                                <input type="hidden" v-model="estimate.total2">
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">入力完了</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import moment from 'moment';
import LoadingBar from './LoadingBar';
export default {
    props:{
        sougiId : String
    },
    data() {
        return {
            estimate :{
                'total1' : 0,
                'total2' : 0,
                'dryicePer' : 8500,
                'dryiceQ' : 0,
                'reijoPer' : 10000,
                'reijoQ' : 0,
                
            },
            emptyEstimate :{
                'id' : parseInt(this.sougiId),
            },
            'consumptionTax' : 10,
            'soukaName' : "",
            'sougiStatus' : "",
            'hoge' : "ほげ〜〜〜〜",
            "loading1" : true,
            "loading2" : true,
        }
    },
    computed:{
        calcTotal1(){
            let all = 0;
            if(!Number.isNaN(parseInt(this.estimate.saidan2,10))){
                all += parseInt(this.estimate.saidan2);
            }
            if(!Number.isNaN(parseInt(this.estimate.butsugu,10))){
                all += parseInt(this.estimate.butsugu);
            }
            if(!Number.isNaN(parseInt(this.estimate.facility,10))){
                all +=parseInt(this.estimate.facility);
            }
            if(!Number.isNaN(parseInt(this.estimate.importCost,10))){
                all +=parseInt(this.estimate.importCost);
            }
            if(!Number.isNaN(parseInt(this.estimate.bed2,10))){
                all +=parseInt(this.estimate.bed2);
            }
            if(!Number.isNaN(parseInt(this.estimate.nokan,10))){
                all +=parseInt(this.estimate.nokan);
            }
            if(!Number.isNaN(parseInt(this.estimate.specialDeodorant,10))){
                all +=parseInt(this.estimate.specialDeodorant);
            }
            if(!Number.isNaN(parseInt(this.estimate.specialYukan,10))){
                all +=parseInt(this.estimate.specialYukan);
            }
            if(!Number.isNaN(parseInt(this.estimate.specialClear,10))){
                all +=parseInt(this.estimate.specialClear);
            }
            if(!Number.isNaN(parseInt(this.estimate.specialLastmake,10))){
                all +=parseInt(this.estimate.specialLastmake);
            }
            if(!Number.isNaN(parseInt(this.estimate.dryice,10))){
                all +=parseInt(this.estimate.dryice);
            }
            if(!Number.isNaN(parseInt(this.estimate.iei2,10))){
                all +=parseInt(this.estimate.iei2);
            }
            if(!Number.isNaN(parseInt(this.estimate.reijo,10))){
                all +=parseInt(this.estimate.reijo);
            }
            if(!Number.isNaN(parseInt(this.estimate.flower2,10))){
                all +=parseInt(this.estimate.flower2);
            }
            if(!Number.isNaN(parseInt(this.estimate.mogiri2,10))){
                all +=parseInt(this.estimate.mogiri2);
            }
            if(!Number.isNaN(parseInt(this.estimate.kumotsu2,10))){
                all +=parseInt(this.estimate.kumotsu2);
            }
            if(!Number.isNaN(parseInt(this.estimate.saidanFlower2,10))){
                all +=parseInt(this.estimate.saidanFlower2);
            }
            if(!Number.isNaN(parseInt(this.estimate.garden2,10))){
                all +=parseInt(this.estimate.garden2);
            }
            if(!Number.isNaN(parseInt(this.estimate.chochin2,10))){
                all +=parseInt(this.estimate.chochin2);
            }
            if(!Number.isNaN(parseInt(this.estimate.mizuhiki2,10))){
                all +=parseInt(this.estimate.mizuhiki2);
            }
            if(!Number.isNaN(parseInt(this.estimate.shoko2,10))){
                all +=parseInt(this.estimate.shoko2);
            }
            if(!Number.isNaN(parseInt(this.estimate.mainBoard2,10))){
                all +=parseInt(this.estimate.mainBoard2);
            }
            if(!Number.isNaN(parseInt(this.estimate.guideBoard2,10))){
                all +=parseInt(this.estimate.guideBoard2);
            }
            if(!Number.isNaN(parseInt(this.estimate.tent,10))){
                all +=parseInt(this.estimate.tent);
            }
            if(!Number.isNaN(parseInt(this.estimate.reception,10))){
                all +=parseInt(this.estimate.reception);
            }
            if(!Number.isNaN(parseInt(this.estimate.consume,10))){
                all +=parseInt(this.estimate.consume);
            }
            if(!Number.isNaN(parseInt(this.estimate.moderator,10))){
                all +=parseInt(this.estimate.moderator);
            }
            if(!Number.isNaN(parseInt(this.estimate.saijo,10))){
                all +=parseInt(this.estimate.saijo);
            }
            if(!Number.isNaN(parseInt(this.estimate.staff2,10))){
                all +=parseInt(this.estimate.staff2);
            }
            if(!Number.isNaN(parseInt(this.estimate.trans1_1,10))){
                all +=parseInt(this.estimate.trans1_1);
            }
            if(!Number.isNaN(parseInt(this.estimate.trans1_2,10))){
                all +=parseInt(this.estimate.trans1_2);
            }
            if(!Number.isNaN(parseInt(this.estimate.trans2_2,10))){
                all +=parseInt(this.estimate.trans2_2);
            }
            if(!Number.isNaN(parseInt(this.estimate.transItem,10))){
                all +=parseInt(this.estimate.transItem);
            }
            if(!Number.isNaN(parseInt(this.estimate.acting,10))){
                all +=parseInt(this.estimate.acting);
            }
            if(!Number.isNaN(parseInt(this.estimate.manage,10))){
                all +=parseInt(this.estimate.manage);
            }
            if(!Number.isNaN(parseInt(this.estimate.pillow2,10))){
                all +=parseInt(this.estimate.pillow2);
            }
            if(!Number.isNaN(parseInt(this.estimate.decoration2,10))){
                all +=parseInt(this.estimate.decoration2);
            }
            this.estimate.subTotal1 = all;
            this.estimate.totalTax1 = all * (this.consumptionTax) / 100;
            this.estimate.total1 = all * (100 + this.consumptionTax) / 100;
            return all;
        },
        calcTotal2(){
            let all = 0;
            if(!Number.isNaN(parseInt(this.estimate.cremation2,10))){
                all += parseInt(this.estimate.cremation2,10);
            }
            if(!Number.isNaN(parseInt(this.estimate.shukotsu2,10))){
                all += parseInt(this.estimate.shukotsu2,10);
            }
            if(!Number.isNaN(parseInt(this.estimate.restRoom2,10))){
                all += parseInt(this.estimate.restRoom2,10);
            }
            if(!Number.isNaN(parseInt(this.estimate.store2,10))){
                all += parseInt(this.estimate.store2,10);
            }
            if(!Number.isNaN(parseInt(this.estimate.vehicle2,10))){
                all += parseInt(this.estimate.vehicle2,10);
            }
            if(!Number.isNaN(parseInt(this.estimate.car2,10))){
                all += parseInt(this.estimate.car2,10);
            }
            if(!Number.isNaN(parseInt(this.estimate.car4,10))){
                all += parseInt(this.estimate.car4,10);
            }
            if(!Number.isNaN(parseInt(this.estimate.bus2,10))){
                all += parseInt(this.estimate.bus2,10);
            }
            if(!Number.isNaN(parseInt(this.estimate.fee2,10))){
                all += parseInt(this.estimate.fee2,10);
            }
            this.estimate.total2 = all;
            return all;
        },
        calcDryice(){
            let price = this.estimate.dryicePer * this.estimate.dryiceQ;
            this.estimate.dryice = price;
            return price;
        },
        calcReijo(){
            let price = parseInt(this.estimate.reijoPer * this.estimate.reijoQ , 10);
            this.estimate.reijo = price;
            return price;
        }
    },
    methods: {
        submitEstimate(){
            axios.put('/api/estimate/' + this.estimate.id , this.estimate)
                .then((res) =>{
                    this.$router.push({name: 'list'});
                });
        },
        getSougi() {
            axios.get('/api/estimate/' + this.sougiId)
                .then((res) => {
                    this.loading1 = false;
                    this.soukaName = res.data.soukaName;
                });
        },
        getEstimate() {
            axios.get('/api/estimate/' + this.sougiId)
                .then((res) =>{
                    this.loading2 = false;
                    this.estimate = res.data;
                });
        },
    },
    created(){
        this.getSougi();
        this.getEstimate();
    },
    components:{
        LoadingBar,
    }

};
</script>
<style>
    form{
        margin-bottom:200px;
    }
    .label_top{
        margin-top:20px;
        font-weight:bold;
        font-size :17px;
    }
    .label_block label{
        font-size:17px;
        font-weight: bold;
    }
    .info_tag{
        font-size:20px;
    }
    .big_label_block{
        border:1px solid #dadada;
        padding: 20px;
        margin-bottom:50px;
    }
    .total_box{
        text-align:right;
        font-size:20px;
    }
    .soukaName_estimate{
        font-size:30px;
        margin:30px 0;
    }
    .flex-box{
        display:flex;
        align-items:center;
        justify-content:space-evenly;
    }
    .calc-per-box{
        width:100px;
        font-size:20px;
    }
</style>