<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form v-on:submit.prevent="submit">
                    <div class="form-group">
                        <label for="spell1">名前</label>
                        <input type="text" class="form-control" id="soukaSpell" placeholder="ときわだい" v-model="list.name">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">住所</label>
                        <input type="text" class="form-control" id="soukaName" placeholder="常盤台" v-model="list.address">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">電話番号1</label>
                        <input type="text" class="form-control" id="kojinSpell" placeholder="ときわだい たかこ" v-model="list.tel1">
                    </div>
                    <div class="form-group" v-if="list.type === 1">
                        <label for="inputAddress">電話番号2</label>
                        <input type="text" class="form-control" id="kojinSpell" placeholder="ときわだい たかこ" v-model="list.tel2">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">入力完了</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props :{
        "manageId" : String
    },
    data:function() {
        return {
            list :{}
        }
    },
    methods: {
        submit(){
            axios.put('/api/manage/' + this.manageId,this.list)
                .then((res) =>{
                    this.$router.push({name: 'manage'});
                });
        },
        getList(){
            axios.get('/api/manage/'+this.manageId)
                .then((res) =>{
                    this.list = res.data;
                });
        }
    },
    mounted(){
        this.getList();
    }
};
</script>

<style>
</style>