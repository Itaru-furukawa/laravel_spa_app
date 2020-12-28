<template>
    <div class="container showComponent">
        <h1>御葬儀打合わせ事項</h1>
        <div class="table_flex">

            <table class="table1 show1">
                <tr>
                    <td class="fc">依頼年月日</td>
                    <td class="sc">{{sougi.reqYear}}年{{sougi.reqMonth}}月{{sougi.reqDay}}日</td>
                </tr>
                <tr class="spell">
                    <td class="fc">よみかた</td>
                    <td>{{sougi.soukaSpell}}</td>
                </tr>
                <tr>
                    <td td class="fc">喪家名</td>
                    <td>{{sougi.soukaName}}</td>
                </tr>
                <tr class="spell">
                    <td td class="fc">よみかた</td>
                    <td>{{sougi.kojinSpell}}</td>
                </tr>
                <tr>
                    <td td class="fc">故人名</td>
                    <td>{{sougi.kojinName}}</td>
                </tr>
            </table>
            <table class="table2">
                <tr><td>通夜式　{{sougi.tuyaYear}}年{{sougi.tuyaMonth}}月{{sougi.tuyaDay}}日{{sougi.tuyaHours}}時{{sougi.tuyaHours}}分〜{{sougi.tuyaHourf}}時{{sougi.tuyaMins}}分<br>集合時間　{{sougi.tuyaHourf}}時{{sougi.tuyaMinf}}分</td></tr>
                <tr><td>告別式　{{sougi.kokubetsuYear}}年{{sougi.kokubetsuMonth}}月{{sougi.kokubetsuDay}}日{{sougi.kokubetsuHours}}時{{sougi.kokubetsuHours}}分〜{{sougi.kokubetsuHourf}}時{{sougi.kokubetsuMins}}分<br>集合時間　{{sougi.kokubetsuHourf}}時{{sougi.kokubetsuMinf}}分</td></tr>
                <tr><td>火葬式　{{sougi.kasouYear}}年{{sougi.kasouMonth}}月{{sougi.kasouDay}}日{{sougi.kasouHours}}時{{sougi.kasouHours}}分〜{{sougi.kasouHourf}}時{{sougi.kasouMins}}分<br>集合時間　{{sougi.kasouHourf}}時{{sougi.kasouMinf}}分</td></tr>
            </table>
        </div>
        <div class="second_div">
            <table class="table3">
                <tr class="col1">
                    <td>住民登録地</td>
                    <td colspan="3">{{sougi.kojinAddress}}</td>
                    <td>世帯主</td>
                    <td>{{sougi.kojinHead}}</td>
                </tr>
                <tr class="col2">
                    <td>本籍地</td>
                    <td colspan="3">{{sougi.kojinPermAddress}}</td>
                    <td>筆頭者</td>
                    <td>{{sougi.kojinPrinciple}}</td>
                </tr>
                <tr class="col3">
                    <td>配偶者</td>
                    <td colspan="5">{{sougi.spouse}}（満{{sougi.spouseAge}}歳）</td>
                </tr>
                <tr class="col4">
                    <td>生年月日</td>
                    <td colspan="3">{{sougi.kojinBirthYear}}年{{sougi.kojinBirthMonth}}月{{sougi.kojinBirthDay}}日</td>
                    <td>年齢・性別</td>
                    <td>{{sougi.kojinAge}}歳・{{sougi.kojinSex}}</td>
                </tr>
                <tr class="col5">
                    <td>死亡したとき</td>
                    <td colspan="5">{{sougi.deadYear}}年{{sougi.deadMonth}}月{{sougi.deadDay}}日{{sougi.deadHour}}時{{sougi.deadMin}}分</td>
                </tr>
                <tr class="col6 spell2">
                    <td>よみかた</td>
                    <td>{{sougi.moshuSpell}}</td>
                    <td>生年月日</td>
                    <td colspan="3">{{sougi.moshuBirthYear}}年{{sougi.moshuBirthMonth}}月{{sougi.moshuBirthDay}}日</td>
                </tr>
                <tr class="col7">
                    <td>喪主名</td>
                    <td>{{sougi.moshuName}}</td>
                    <td>続柄</td>
                    <td>{{sougi.moshuRelation}}</td>
                    <td>電話</td>
                    <td>{{sougi.moshuTel1}}</td>
                </tr>
                <tr class="col8">
                    <td>住民登録地</td>
                    <td colspan="3" >{{sougi.moshuAddless}}</td>
                    <td>世帯主</td>
                    <td>{{sougi.moshuHead}}</td>
                </tr>
                <tr class="col9">
                    <td>本籍地</td>
                    <td  colspan="3">{{sougi.moshuPermAddress}}</td>
                    <td>筆頭者</td>
                    <td>{{sougi.moshuPrinciple}}</td>
                </tr>
                <tr class="col10 spell2">
                    <td>よみかた</td>
                    <td>{{sougi.repSpell}}</td>
                    <td>生年月日</td>
                    <td colspan="3">{{sougi.repBirthYear}}年{{sougi.repBirthMonth}}月{{sougi.repBirthDay}}日</td>
                </tr>
                <tr class="col11">
                    <td class="fc">届出人名</td>
                    <td class="td2">{{sougi.repName}}</td>
                    <td class="td3">続柄</td>
                    <td class="td4">{{sougi.repRelation}}</td>
                    <td class="td5">電話</td>
                    <td class="td6">{{sougi.repTel1}}</td>
                </tr>
                <tr class="col12">
                    <td>住民登録地</td>
                    <td colspan="3">{{sougi.repAddress}}</td>
                    <td>世帯主</td>
                    <td>{{sougi.repHead}}</td>
                </tr>
                <tr class="col13">
                    <td>本籍地</td>
                    <td colspan="3">{{sougi.repPermAddress}}</td>
                    <td>筆頭者</td>
                    <td>{{sougi.repPrinciple}}</td>
                </tr>
                <tr class="col14">
                    <td>請求先名</td>
                    <td colspan="3">{{sougi.demName}}</td>
                    <td>電話</td>
                    <td>{{sougi.demTel}}</td>
                </tr>
                <tr class="col15">
                    <td>請求先ご住所</td>
                    <td colspan="3">{{sougi.demAddress}}</td>
                    <td>精算方法</td>
                    <td>{{sougi.payWay}}</td>
                </tr>
            </table>
        </div>
        <div class="table_flex margin_div">
            <table class="table4">
                <tr>
                    <td class="fc">式場名</td>
                    <td class="ttd2">{{cere.name}}</td>
                </tr>
                <tr>
                    <td>式場住所</td>
                    <td>{{cere.address}}</td>
                </tr>
                <tr>
                    <td>式場電話</td>
                    <td>{{cere.tel1}}</td>
                </tr>
                <tr>
                    <td>火葬場</td>
                    <td>{{cre.name}}</td>
                </tr>
                <tr>
                    <td>宗派・寺院名</td>
                    <td>{{sougi.shuha}}</td>
                </tr>
                <tr>
                    <td>御布施</td>
                    <td>{{sougi.ohuse}}</td>
                </tr>
                <tr>
                    <td>返礼品</td>
                    <td>{{sougi.returnItem}}</td>
                </tr>
            </table>
            <table class="table5">
                <tr class="longtr"><td class="std">{{sougi.specialArea}}</td></tr>
                <tr class="nonborder cn"><td>{{comp.name}}</span></td></tr>
                <tr class="nonborder"><td>TEL {{comp.tel1}}</td></tr>
                <tr class="nonborder"><td>FAX {{comp.tel2}}</td></tr>
            </table>
        </div>
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
            comp :{},
            cere :{},
            cre :{},
            loading : false,
        }
    },
    methods: {
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
            axios.get('/api/manage/' + this.sougi.cereId)
                .then((res)=>{
                    this.cere = res.data;
                });
            axios.get('/api/manage/' + this.sougi.creId)
                .then((res)=>{
                    this.cre = res.data;
                });
        }
    },
    mounted(){
        this.getSougi();
    },

};
</script>


    <style>
        .showComponent{
            margin-bottom :100px;
        }
        .showComponent h1{
            text-align: center;
        }
        .showComponent table {
            border: 1px solid;
            font-size:14px ;
            border-spacing: 0px;
            border-collapse:collapse;
        }
        .showComponent tr {
            border:1px solid;
            height: 35px;
        }
        .showComponent td {
            border:1px solid;
        }
        .showComponent .table_flex{
            display: flex;
            justify-content: space-between;
            width: 80vw;
            margin-left: auto;
            margin-right: auto;
            align-items: flex-start;
            min-width: 750px;
        }
        .showComponent .spell{
            height:20px;
            font-size:11px;
        }
        .showComponent .spell2{
            height:25px;
            font-size:11px;
        }
        .showComponent .table1{
            flex-shrink:0;
            text-align:center;
            border:0px;
            width: 40vw;
        }
        .showComponent .table2{
            flex-shrink:0;
            border:0px;
            width: 38vw;
        }
        .showComponent .table2 td{
            min-width: 350px;
        }
        .showComponent .second_div{
            width: 80vw;
            margin-left: auto;
            margin-right: auto;
            min-width: 750px;
            margin-top: 20px;
        }
        .showComponent .table3{
            width: 80vw;
            text-align: center;
            min-width: 750px;
        }
        .showComponent .fc{
            width: 10vw;
            text-align: center;
            min-width:100px;
        }
        .showComponent .sc{
            min-width: 250px;
        }
        .showComponent .td2{
            width:20vw;
            text-align: center;
            min-width:220px;
        }
        .showComponent .ttd2{
            min-width: 300px;
        }
        .showComponent .td3{
            width:8vw;
            min-width:100px;
            text-align: center;
        }
        .showComponent .td4{
            width:7vw;
            min-width:50px;
            text-align: center;
        }
        .showComponent .td5{
            width:5vw;
            min-width:50px;
            text-align: center;
        }
        .showComponent .td6{
            text-align: center;
            min-width: 200px;
        }
        .showComponent .showComponent .table4{
            width: 40vw;
            min-width: 320px;
            text-align: center;
        }
        .showComponent .table5{
            border:0px;
        }
        .showComponent .longtr{
            height: 140px;
        }
        .showComponent .std{
            width: 38vw;
            min-width: 300px;
        }
        .showComponent .margin_div{
            margin-top: 20px;
        }
        .showComponent .nonborder td{
            border:0px;
        }
        .showComponent .nonborder{
            border: 0px;
            text-align: center;
            font-size:19px;
        }
        .showComponent .cn{
            padding-top: 2px;
            font-size:22px;
        }
        .showComponent .cn td{
            padding-top: 5px;
        }
    </style>