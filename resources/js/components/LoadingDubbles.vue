<template>
    <div class="fullview">
      <div class="loading-spacer"><h1 class="load_h1">Loading ...</h1></div>
      <vue-loading 
        type="spiningDubbles"
        color="#20a0ff"
        :size="{ width: '100px', height: '100px' }"
        >
      </vue-loading>
    </div>
</template>

<script>
import { VueLoading } from 'vue-loading-template';

export default {
  name: 'LoadingDubbles',
  components: {
    VueLoading,
  },

}
</script>

<style>
.fullview {
  width: 100%;
  height: 100%;
  background: #fefefe;
  position: fixed;
  top: 0;
  left: 0;
}
.loading-spacer {
  height: 30%;
}
</style>