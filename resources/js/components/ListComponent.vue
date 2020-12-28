<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">依頼年月日</th>
                <th scope="col">喪家名/<br>故人名</th>
                <th scope="col">担当社名/<br>担当者名</th>
                <th scope="col">打合せ事項</th>
                <th scope="col">見積金額</th>
                <th scope="col">編集1</th>
                <th scope="col">編集2</th>
                <th scope="col">削除</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="s in sougi">
                <th scope="row" v-if="s.reqYear+s.reqMonth+s.reqDay > 0">{{s.reqYear+"年"+s.reqMonth+"月"+s.reqDay + "日"}}</th>
                <td v-else>未入力</td>
                <td v-if="s.soukaName !== null && s.kojinName !== null">{{s.soukaName}}家 /<br>故{{s.kojinName}}様</td>
                <td v-else-if="s.soukaName !== null">故{{s.kojinName}}様</td>
                <td v-else-if="s.kojinName !== null">{{s.soukaName}}家</td>
                <td v-else>未入力</td>
                <td v-if="s.employeeName !== null">{{s.employeeName}} /<br>{{compsName[s.compId]}}</td>
                <td v-else>未入力</td>
                <td>
                    <router-link v-bind:to="{name : 'sougi.show1',params :{sougiId : s.id}}">
                    <button class="btn btn-primary">打合せ事項<br>の表示</button>
                    </router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name : 'sougi.show2',params :{sougiId : s.id}}">
                    <button class="btn btn-primary">見積金額<br>の表示</button>
                    </router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'sougi.edit',params :{sougiId : s.id}}">
                    <button class="btn btn-success">打合わせ事項<br>の編集</button>
                    </router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'sougi.estimate.edit',params :{sougiId : s.id}}">
                    <button class="btn btn-success">見積金額<br>の編集</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger" v-on:click="deleteSougi(s.id)">削除</button>
                </td>
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
            },
            getCompName(){
                axios.get('/api/manage/show1')
                    .then((res) =>{
                        for(let i in res.data){
                            this.compsName[res.data[i].id] = res.data[i].name;
                        }
                    });
            },
            deleteSougi(id){
                const ans = confirm("本当に削除してもよろしいですか？");
                if(!ans) event.preventDefault();
                    axios.delete('/api/list/'+id);
                    axios.delete('/api/estimate/'+id)
                        .then((res)=>{
                            this.getSougis();
                        });
            }
        },
        mounted(){
            this.getSougis();
            this.getCompName();
        }
    }
</script>

<style>
    table{
        text-align:center;
    }
    .table td{
        vertical-align:middle;
    }
    .table th{
        vertical-align:middle;
    }
</style>