<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">葬儀作成アプリケーション</span>
                <div>
                    <router-link v-bind:to="{name: 'top'}">
                        <button class="btn btn-secondary ">トップに戻る</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'create'}">
                        <button class="btn btn-primary ">葬儀の作成</button>
                    </router-link>
                
                    <router-link v-bind:to="{name: 'list'}">
                        <button class="btn btn-warning ">葬儀リスト</button>
                    </router-link>
                
                    <router-link v-bind:to="{name: 'customer'}">
                        <button class="btn btn-danger ">顧客リスト</button>
                    </router-link>
                
                    <router-link v-bind:to="{name: 'manage'}">
                        <button class="btn btn-success ">入力管理</button>
                    </router-link>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>