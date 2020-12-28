<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">会社名</th>
                <th scope="col">会社住所</th>
                <th scope="col">電話番号1</th>
                <th scope="col">電話番号2</th>
                <th scope="col">変更</th>
                <th scope="col">削除</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="comp in comps">
                <th scope="row" v-if="comp.name !== null">{{comp.name}}</th>
                <td v-else>未入力</td>
                <td v-if="comp.address !== null">{{comp.address}}</td>
                <td v-else>未入力</td>
                <td v-if="comp.tel1 !== null">{{comp.tel1}}</td>
                <td v-else>未入力</td>
                <td v-if="comp.tel2 !== null">{{comp.tel2}}</td>
                <td v-else>未入力</td>
                <td>
                    <router-link v-bind:to="{name: 'manage.edit',params :{manageId : comp.id}}">
                    <button class="btn btn-success">変更</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger" v-on:click="deleteCre(cre.id)">削除</button>
                </td>
            </tr>
            <tr>
                <th scope="row"><input type="text" class="col" v-model="newcomp.name"></th>
                <td><input type="text" class="col" v-model="newcomp.address"></td>
                <td><input type="text" class="col" v-model="newcomp.tel1"></td>
                <td><input type="text" class="col" v-model="newcomp.tel2"></td>
                <td colspan="2"><button v-on:click="submitComp()"  class="btn btn-primary">追加</button></td>
            </tr>
            </tbody>
        </table>
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">斎場名</th>
                <th scope="col">住所</th>
                <th scope="col">電話番号</th>
                <th scope="col">変更</th>
                <th scope="col">削除</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="cere in ceres">
                <th scope="row" v-if="cere.name !== null">{{cere.name}}</th>
                <td v-else>未入力</td>
                <td v-if="cere.address !== null">{{cere.address}}</td>
                <td v-else>未入力</td>
                <td v-if="cere.tel1 !== null">{{cere.tel1}}</td>
                <td v-else>未入力</td>
                <td>
                    <router-link v-bind:to="{name: 'manage.edit',params :{manageId : cere.id}}">
                    <button class="btn btn-success">変更</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger" v-on:click="deleteCre(cre.id)">削除</button>
                </td>
            </tr>
            <tr>
                <th scope="row"><input type="text" class="col" v-model="newcere.name"></th>
                <td><input type="text" class="col" v-model="newcere.address"></td>
                <td><input type="text" class="col" v-model="newcere.tel1"></td>
                <td colspan="2"><button v-on:click="submitCere()" class="btn btn-primary">追加</button></td>
            </tr>
            </tbody>
        </table>
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">火葬場名</th>
                <th scope="col">住所</th>
                <th scope="col">電話番号</th>
                <th scope="col">変更</th>
                <th scope="col">削除</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="cre in cres">
                <th scope="row" v-if="cre.name !== null">{{cre.name}}</th>
                <td v-else>未入力</td>
                <td v-if="cre.address !== null">{{cre.address}}</td>
                <td v-else>未入力</td>
                <td v-if="cre.tel1 !== null">{{cre.tel1}}</td>
                <td v-else>未入力</td>
                <td>
                    <router-link v-bind:to="{name: 'manage.edit',params :{manageId : cre.id}}">
                    <button class="btn btn-success">変更</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger" v-on:click="deleteCre(cre.id)">削除</button>
                </td>
            </tr>
            <tr>
                <th scope="row"><input type="text" class="col" v-model="newcre.name"></th>
                <td><input type="text" class="col" v-model="newcre.address"></td>
                <td><input type="text" class="col" v-model="newcre.tel1"></td>
                <td colspan="2"><button v-on:click="submitCre()" class="btn btn-primary">追加</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                comps : [],
                newcomp : {
                    'type' : 1
                },
                cres : [],
                
                newcere : {
                    'type' : 2
                },
                newcre : {
                    'type' : 3 
                },
                ceres : [],
            } 
        },
        methods:{
            getComps(){
                axios.get('/api/manage/show1')
                    .then((res)=>{
                        this.comps = res.data;
                    });
            },
            getCeres(){
                axios.get('/api/manage/show2')
                    .then((res)=>{
                        this.ceres = res.data;
                    });
            },
            getCres(){
                axios.get('/api/manage/show3')
                    .then((res)=>{
                        this.cres = res.data;
                    });
            },
            submitComp(){
                axios.post('/api/manage',this.newcomp);
                this.newcomp = {
                    'type' : 1
                };
                this.getComps();
            },
            submitCere(){
                axios.post('/api/manage',this.newcere);
                this.newcere = {
                    'type' : 2
                };
                this.getCeres();
            },
            submitCre(){
                axios.post('/api/manage',this.newcre);
                this.newcre = {
                    'type' : 3
                };
                this.getCres();
            },
            deleteComp(id){
                const ans = confirm("本当に削除してもよろしいですか？");
                if(!ans) event.preventDefault();
                axios.delete('/api/manage/'+id)
                    .then((res)=>{
                        this.getComps();
                    });
            },
            deleteCere(id){
                const ans = confirm("本当に削除してもよろしいですか？");
                if(!ans) event.preventDefault();
                axios.delete('/api/manage/'+id)
                    .then((res)=>{
                        this.getCeres();
                    });
            },
            deleteCre(id){
                const ans = confirm("本当に削除してもよろしいですか？");
                if(!ans) event.preventDefault();
                axios.delete('/api/manage/'+id)
                    .then((res)=>{
                        this.getCres();
                    });
            }
        },
        mounted(){
            this.getComps();
            this.getCeres();
            this.getCres();
        }
    }
</script>