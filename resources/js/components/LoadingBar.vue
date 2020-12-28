<template>
    <div class="fullview">
      <div class="loading-spacer">
        <h1 class="load_h1">Loading ...</h1>
      </div>
      <vue-loading 
        type="bars"
        color="#5ab95c"
        :size="{ width: '100px', height: '100px' }"
        >
      </vue-loading>
    </div>
</template>

<script>
import { VueLoading } from 'vue-loading-template';

export default {
  name: 'loadingBar',
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
  display: flex;
  align-items: flex-end;
  justify-content: center;
}
.loading-spavcer{}
</style>