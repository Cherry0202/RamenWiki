<template>
  <div class="main">

    <div class="box-01">
      <div class="arrow-wrapper">
<!--       vue router -->
          <router-link class="arrow" :to="{ name: 'wiki-demo' }">
              ⬅
          </router-link>
      </div>
      <div class="title-wrapper">
        <h1 class="store-name">よってこや 新宿南口店</h1>
      </div>
      <div class="mode-wrapper">
        <h1 class="mode">レビュー入力</h1>
      </div>
      <div id="under-color-block">
        <div class="block1"></div>
        <div class="block2"></div>
        <div class="block3"></div>
        <div class="block4"></div>
      </div>
    </div>
    <main class="contents-wrapper">
      <div class="contents">

      </div>
    </main>
  </div>
</template>

<script>
    export default {
        name: "ReviewDetail"
    }
</script>

<style scoped lang="scss">
    <!--- CSS ----------------------------------------------------------------------------------------------------------->
    <style lang="css">
                     *{
                         margin: 0;
                         padding: 0;
                     }
    .main {
        width: 375px;
        height: 812px;
        background-color: yellow;
    }
    .box-01 {
        width: 100%;
        height: 214px;
        background-color: red;
        /*img*/
        /*background-image: ;*/
    }
    .arrow-wrapper {
        width: 100%;
        height: 48%;
        background-color: lightgray;
    }
    .arrow {
        position: fixed;
        left: 10px;
        top: 1%;
        font-size: 20px;
    }
    .title-wrapper {
        width: 100%;
        height: 25%;
        background-color: lightgreen;
        text-align: center;
    }
    .store-name {
        font-size: 33px;
        color: white;
        /*  font 追加*/
    }
    .mode-wrapper {
        width: 100%;
        height: 24%;
        background-color: lightblue;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .mode {
        font-size: 24px;
        color: white;
    }

    #under-color-block {
        display: flex;
        height: 8px;
        width: 375px;
    }
    .block1 {
        width: 25%;
        background-color: #665EFF;
    }

    .block2 {
        width: 25%;
        background-color: #5773FF;
    }

    .block3 {
        width: 25%;
        background-color: #3497FD;
    }

    .block4 {
        width: 25%;
        background-color: #3ACCE1;
    }
    .contents-wrapper {
        width: 100%;
        height: 598px;
        background-color: #2A2E43;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .contents {
        width: 338px;
        height: 540px;
        background-color: #EDF0F5;
        border-radius: 18px;
    }
    </style>
</style>
