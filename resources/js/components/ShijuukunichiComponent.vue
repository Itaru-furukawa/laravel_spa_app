<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">依頼年月日</th>
                <th scope="col">喪家名/<br>故人名</th>
                <th scope="col">担当社名/<br>担当者名</th>
                <th scope="col">死亡日</th>
                <th scope="col">四十九日予定日残り</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="s in activeSougi">
                <th scope="row" v-if="s.reqYear+s.reqMonth+s.reqDay > 0">{{s.reqYear+"年"+s.reqMonth+"月"+s.reqDay + "日"}}</th>
                <td v-else>未入力</td>
                <td v-if="s.soukaName !== null && s.kojinName !== null">{{s.soukaName}}家 /<br>故{{s.kojinName}}様</td>
                <td v-else-if="s.soukaName !== null">故{{s.kojinName}}様</td>
                <td v-else-if="s.kojinName !== null">{{s.soukaName}}家</td>
                <td v-else>未入力</td>
                <td v-if="s.employeeName !== null">{{s.employeeName}} /<br>{{compsName[s.compId]}}</td>
                <td v-else>未入力</td>
                <td>{{s.deadYear}}年{{s.deadMonth}}月{{s.deadDay}}日</td>
                <td>{{sijuukunichi(s.deadYear,s.deadMonth,s.deadDay)}}(あと{{sijuuLast(s.deadYear,s.deadMonth,s.deadDay)}}日)</td>
            </tr>
            </tbody>
        </table>
    </div>
    
</template>

<script>
import moment from 'moment';
    export default {
        
        data(){
            return{
                sougi : [],
                compsName :[],
            } 
        },
        methods:{
            getSougis(){
                axios.get('/api/list')
                    .then((res)=>{
                        this.sougi = res.data;
                    });
            },
            getCompName(){
                axios.get('/api/manage/show1')
                    .then((res) =>{
                        for(let i in res.data){
                            this.compsName[res.data[i].id] = res.data[i].name;
                        }
                    });
            },
            sijuukunichi(deadYear,deadMonth,deadDay){
                return moment(deadYear+"-"+deadMonth+"-"+deadDay).add(48,'d').format("YYYY-MM-DD");
            },
            momentNow(){
                return moment().format("YYYY-MM-DD 00:00:00")
            },
            sijuuLast(deadYear,deadMonth,deadDay){
                return moment(this.sijuukunichi(deadYear,deadMonth,deadDay)+" 00:00:00").diff(this.momentNow(),'days');
            },
        },
        computed:{
            activeSougi(){
                const data = this.sougi;
                const result = data.filter(x => this.sijuuLast(x.deadYear,x.deadMonth,x.deadDay) >= 0);
                return result;
            }
            
        },
        filters: {
            moment: function (date) {
                return moment(date).format('YYYY/MM/DD HH:mm');
            }
        },
        mounted(){
            this.getSougis();
            this.getCompName();
        }
    }
</script>