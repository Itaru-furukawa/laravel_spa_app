<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">依頼年月日/<br>担当社名</th>
                <th scope="col">喪主名</th>
                <th scope="col">電話番号1</th>
                <th scope="col">電話番号2</th>
                <th scope="col">メールアドレス</th>
                <th scope="col">住所</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="s in sougi">
                <th scope="row" v-if="s.reqYear+s.reqMonth+s.reqDay > 0">{{s.reqYear+"年"+s.reqMonth+"月"+s.reqDay + "日"}}/<br>{{getCompName(s.compId)}}</th>
                <td v-else>未入力</td>
                <td v-if="s.moshuName !== null">{{s.moshuName}}</td>
                <td v-else>未入力</td>
                <td v-if="s.moshuTel1 !== null">{{s.moshuTel1}}</td>
                <td v-else>未入力</td>
                <td v-if="s.moshuTel2 !== null">{{s.moshuTel2}}</td>
                <td v-else>未入力</td>
                <td v-if="s.moshuMail !== null">{{s.moshuMail}}</td>
                <td v-else>未入力</td>
                <td v-if="s.moshuAddress !== null">{{s.moshuAddress}}</td>
                <td v-else>未入力</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
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
                axios.get('/api/manage/show1')
                    .then((res) =>{
                        for(let i in res.data){
                            this.compsName[res.data[i].id] = res.data[i].name;
                        }
                    });
            },
            getCompName(id){
                return this.compsName[id];
            }
        },
        mounted(){
            this.getSougis();
        }
    }
</script>