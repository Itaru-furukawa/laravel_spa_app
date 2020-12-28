<template>
    <div class="container">
        <div style="margin: 20px 0;">
            <router-link v-bind:to="{name: 'create'}">
                <button style="padding:20px 0" class="btn btn-primary btn-lg btn-block">葬儀の作成（顧客登録）</button>
            </router-link>
        </div>
        <div style="margin: 20px 0;">
            <router-link v-bind:to="{name: 'list'}">
                <button style="padding:20px 0" class="btn btn-warning btn-lg btn-block">葬儀リスト</button>
            </router-link>
        </div>
        <div style="margin: 20px 0;">
            <router-link v-bind:to="{name: 'customer'}">
                <button style="padding:20px 0" class="btn btn-danger btn-lg btn-block">顧客リスト</button>
            </router-link>
        </div>
        <div style="margin: 20px 0;">
            <router-link v-bind:to="{name: 'manage'}">
                <button style="padding:20px 0" class="btn btn-success btn-lg btn-block">入力管理</button>
            </router-link>
        </div>
        <div style="margin: 20px 0;">
            <router-link v-bind:to="{name: 'shijuukunichi'}">
                <button style="padding:20px 0" class="btn btn-secondary btn-lg btn-block">四十九日の法要</button>
            </router-link>
        </div>
    </div>
</template>

<script>

   export default {
   }

</script>
    
<style>
    btn-warning{
        
    }
</style>