<template>
    <div class="container show2">
        <div class="head_flex">
            <div class="name">故　{{sougi.kojinName}}</div>
            <h1>御葬儀見積金額</h1>
            <div class="NO">No. {{estimate.id}}</div>
        </div>
        <div class="cost">
            <span>¥{{numberWithCommas(estimate.total1)}}</span>
        </div>
        <div class="table_flex">
            <div>
                <table class="table1">
                    <tr>
                        <td>祭壇</td>
                        <td>{{estimate.saidan1}}</td>
                        <td>¥{{numberWithCommas(estimate.saidan2)}}</td>
                    </tr>
                    <tr>
                        <td>仏具一式</td>
                        <td>御導師用</td>
                        <td>¥{{numberWithCommas(estimate.butsugu)}}</td>
                    </tr>
                    <tr>
                        <td>付帯設備</td>
                        <td>一式</td>
                        <td>¥{{numberWithCommas(estimate.facility)}}</td>
                    </tr>
                    <tr>
                        <td>搬入搬出費</td>
                        <td>基本料</td>
                        <td>¥{{numberWithCommas(estimate.importCost)}}</td>
                    </tr>
                    <tr>
                        <td>御寝棺</td>
                        <td>{{estimate.bed1}}</td>
                        <td>¥{{numberWithCommas(estimate.bed2)}}</td>
                    </tr>
                    <tr>
                        <td>納棺処置</td>
                        <td>基本料</td>
                        <td>¥{{numberWithCommas(estimate.nokan)}}</td>
                    </tr>
                    <tr>
                        <td>特別処置</td>
                        <td>防腐・防臭</td>
                        <td>¥{{numberWithCommas(estimate.specialDeodorant)}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>湯灌</td>
                        <td>¥{{numberWithCommas(estimate.specialYukan)}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>清拭</td>
                        <td>¥{{numberWithCommas(estimate.specialClear)}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ラストメイク</td>
                        <td>¥{{numberWithCommas(estimate.specialLastmake)}}</td>
                    </tr>
                    <tr>
                        <td>ドライアイス</td>
                        <td>10kg@¥{{numberWithCommas(estimate.dryicePer)}}×{{estimate.dryiceQ}}</td>
                        <td>¥{{numberWithCommas(estimate.dryice)}}</td>
                    </tr>
                    <tr>
                        <td>御遺影</td>
                        <td>{{estimate.iei1}}</td>
                        <td>¥{{numberWithCommas(estimate.iei2)}}</td>
                    </tr>
                    <tr>
                        <td>会葬礼状</td>
                        <td>100枚@¥{{numberWithCommas(estimate.reijoPer)}}×{{estimate.reijoQ}}</td>
                        <td>¥{{numberWithCommas(estimate.reijo)}}</td>
                    </tr>
                    <tr>
                        <td>花束</td>
                        <td>{{estimate.flower1}}</td>
                        <td>¥{{numberWithCommas(estimate.flower2)}}</td>
                    </tr>
                    <tr>
                        <td>もぎり花</td>
                        <td>{{estimate.mogiri1}}</td>
                        <td>¥{{numberWithCommas(estimate.mogiri2)}}</td>
                    </tr>
                    <tr>
                        <td>供物</td>
                        <td>{{estimate.kumotsu1}}</td>
                        <td>¥{{numberWithCommas(estimate.kumotsu2)}}</td>
                    </tr>
                    <tr>
                        <td>祭壇花</td>
                        <td>{{estimate.saidanFlower1}}</td>
                        <td>¥{{numberWithCommas(estimate.saidanFlower2)}}</td>
                    </tr>
                    <tr>
                        <td>庭飾り</td>
                        <td>{{estimate.garden1}}</td>
                        <td>¥{{numberWithCommas(estimate.garden2)}}</td>
                    </tr>
                    <tr>
                        <td>提灯</td>
                        <td>{{estimate.chochin1}}</td>
                        <td>¥{{numberWithCommas(estimate.chochin2)}}</td>
                    </tr>
                    <tr>
                        <td>水引</td>
                        <td>{{estimate.mizuhiki1}}</td>
                        <td>¥{{numberWithCommas(estimate.mizuhiki2)}}</td>
                    </tr>
                    <tr>
                        <td>焼香・受付・式場幕</td>
                        <td>{{estimate.shoko1}}</td>
                        <td>¥{{numberWithCommas(estimate.shoko2)}}</td>
                    </tr>
                    <tr>
                        <td>メイン看板</td>
                        <td>{{estimate.mainBoard1}}</td>
                        <td>¥{{numberWithCommas(estimate.mainBoard2)}}</td>
                    </tr>
                    <tr>
                        <td>案内看板</td>
                        <td>{{estimate.guideBoard1}}</td>
                        <td>¥{{numberWithCommas(estimate.guideBoard2)}}</td>
                    </tr>
                    <tr>
                        <td>テントセット</td>
                        <td>一式</td>
                        <td>¥{{numberWithCommas(estimate.tent)}}</td>
                    </tr>
                    <tr>
                        <td>受付セット</td>
                        <td>一式</td>
                        <td>¥{{numberWithCommas(estimate.reception)}}</td>
                    </tr>
                    <tr>
                        <td>消耗品</td>
                        <td>一式</td>
                        <td>¥{{numberWithCommas(estimate.consume)}}</td>
                    </tr>
                    <tr>
                        <td>式進行・司会</td>
                        <td>基本料</td>
                        <td>¥{{numberWithCommas(estimate.moderator)}}</td>
                    </tr>
                    <tr>
                        <td>斎場随行</td>
                        <td>基本料</td>
                        <td>¥{{numberWithCommas(estimate.saijo)}}</td>
                    </tr>
                    <tr>
                        <td>セレモニースタッフ</td>
                        <td>{{estimate.staff1}}</td>
                        <td>¥{{numberWithCommas(estimate.staff2)}}</td>
                    </tr>
                </table>
                <div class="company">
                    <h2>{{comp.name}}</h2>
                    <h3>TEL {{comp.tel1}}<br>FAX {{comp.tel2}}</h3>
                </div>
            </div>
            <div>
                <table class="table2">
                    <tr>
                        <td>搬送料金①</td>
                        <td>{{estimate.trans1_1}}</td>
                        <td>¥{{numberWithCommas(estimate.trans1_2)}}</td>
                    </tr>
                    <tr>
                        <td>搬送料金②</td>
                        <td>{{estimate.trans2_1}}</td>
                        <td>¥{{numberWithCommas(estimate.trans2_2)}}</td>
                    </tr>
                    <tr>
                        <td>搬送用具</td>
                        <td>一式</td>
                        <td>¥{{numberWithCommas(estimate.transItem)}}</td>
                    </tr>
                    <tr>
                        <td>諸手続代行</td>
                        <td>一式</td>
                        <td>¥{{numberWithCommas(estimate.acting)}}</td>
                    </tr>
                    <tr>
                        <td>運営管理</td>
                        <td>基本料</td>
                        <td>¥{{numberWithCommas(estimate.manage)}}</td>
                    </tr>
                    <tr>
                        <td>枕飾りセット</td>
                        <td>{{estimate.pillow1}}</td>
                        <td>¥{{numberWithCommas(estimate.pillow2)}}</td>
                    </tr>
                    <tr>
                        <td>後飾りセット</td>
                        <td>{{estimate.decoration1}}</td>
                        <td>¥{{numberWithCommas(estimate.decoration2)}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <table class="table3">
                    <tr>
                        <td class="fc">小計</td>
                        <td colspan="2">¥{{numberWithCommas(estimate.subTotal1)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">消費税</td>
                        <td colspan="2">¥{{numberWithCommas(estimate.totalTax1)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">合計</td>
                        <td colspan="2">¥{{numberWithCommas(estimate.total1)}}</td>
                    </tr>
                </table>
                <table class="table3">
                    <tr>
                        <td class="fc" colspan="3">弊社以外へのお支払い（当日必要）</td>
                    </tr>
                    <tr>
                        <td class="fc">火葬料</td>
                        <td>{{estimate.cremation1}}</td>
                        <td>¥{{numberWithCommas(estimate.cremation2)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">収骨容器</td>
                        <td>{{estimate.shukotsu1}}</td>
                        <td>¥{{numberWithCommas(estimate.shukotsu2)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">休憩室</td>
                        <td>{{estimate.restRoom1}}</td>
                        <td>¥{{numberWithCommas(estimate.restRoom2)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">保管</td>
                        <td>{{estimate.store1}}</td>
                        <td>¥{{numberWithCommas(estimate.store2)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">霊柩自動車</td>
                        <td>{{estimate.vehicle1}}</td>
                        <td>¥{{numberWithCommas(estimate.vehicle2)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">移動車</td>
                        <td>{{estimate.car1}}</td>
                        <td>¥{{numberWithCommas(estimate.car2)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">移動車</td>
                        <td>{{estimate.car3}}</td>
                        <td>¥{{numberWithCommas(estimate.car4)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">マイクロバス</td>
                        <td>{{estimate.bus1}}</td>
                        <td>¥{{numberWithCommas(estimate.bus2)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">式場費</td>
                        <td>{{estimate.fee1}}</td>
                        <td>¥{{numberWithCommas(estimate.fee2)}}</td>
                    </tr>
                    <tr>
                        <td class="fc">飲食費</td>
                        <td></td>
                        <td>実費</td>
                    </tr>
                    <tr>
                        <td class="fc">合計</td>
                        <td></td>
                        <td>¥{{numberWithCommas(estimate.total2)}}</td>
                    </tr>
                </table>
                <div class="itaku1">
                    <span class="itakuD">上記見積金額にて施行を委託いたします。</span>
                    <div class="itakuName">
                        <div>氏名</div><div class="long-name"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="notice">上記見積金額の他に<b>御布施・料理・返礼品・生花・心付け</b>が加算されます。</div>
    </div>
</template>

<script>
export default {
    props:{
        sougiId : String
    },
    data() {
        return {
            estimate :{
            },
            sougi :{},
            comp : {}
        }
    },
    methods: {
        getEstimate() {
            axios.get('/api/estimate/' + this.sougiId)
                .then((res) =>{
                    this.estimate = res.data;
                });
        },
        getSougi() {
            axios.get('/api/list/' + this.sougiId)
                .then((res)=>{
                    this.sougi = res.data;
                    this.getData();
                    this.loading = true;
                });
        },
        getData(){
            axios.get('/api/manage/' + this.sougi.compId)
                .then((res)=>{
                    this.comp = res.data;
                });
        },
        numberWithCommas(x) {
            if(x === undefined || x === null){
                return null;
            }else{
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        }
    },
    created(){
        this.getEstimate();
        this.getSougi();
    },

};
</script>

    <style>
        .show2{
            margin-bottom: 60px;
        }
        .show2 h2{
            margin-top :10px;
            margin-block-end: 3px;
        }
        .show2 h3{
            margin-block-start: 0;
            font-weight: normal;
            font-size: 17px;
        }
        .show2 table {
            border: 1px solid;
            font-size:14px ;
            border-spacing: 0px;
            border-collapse:collapse;
            text-align: center;
        }
        .show2 table tr {
            border:1px solid;
            height: 35px;
        }
        .show2 table td {
            border:1px solid;
            min-width: 120px;
            width: 12vw;
        }
        .show2 .wrapper{
            margin: 0 auto;
            width: 78vw;
            min-width: 750px;
        }
        .show2 .head_flex{
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            width: 80vw;
            margin: 0 auto;
        }
        .show2 .table_flex{
            display: flex;
            justify-content: space-between;
            min-width: 750px;
            width:78vw;
            margin-bottom: 20px;
        }
        .show2 .table1{
            width: 39vw;
            min-width: 400px;
        }
        .show2 .table2{
            width: 39vw;
            min-width: 375px;
            border-top: 0px;
        }   
        .show2 .table3{
            width: 38vw;
            min-width: 365px;
            margin-left: auto;
            border: 3px solid;
            margin-top: 14px;
        }
        .show2 .fc{
            width: 11vw;
            min-width: 110px;
        }
        .show2 .nb{
            border-top: 0px;
        }
        .show2 .nb td{
            border-top: 0px;
        }
        .show2 .cost{
            margin:20px auto;
            width: 40vw;
            height: 50px;
            border: 3px solid;
            font-size: 30px;
            text-align: center;
        }
        .show2 .cost span{
            vertical-align: middle;
        }
        .show2 .name{
            border-bottom:1px solid;
            height: 25px;
            font-size: 18px;
        }
        .show2 .NO{
            width: 13vw;
        }
        .show2 .company{
            text-align: center;
        }
        .show2 .notice{
            text-align: center;
            font-size:14px;
        }
        .itaku1{
            text-align:center;
            width: 100%;
            border: 3px solid;
            margin-top: 14px;
        }
        .itakuD{
            font-size:15px;
        }
        .itakuName{
            display: flex;
            align-items: center;
            height: 60px;
            justify-content: space-evenly;
        }
        .long-name{
            width: 80%;
        }
    </style>