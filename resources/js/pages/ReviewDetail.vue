<template>
  <div class="main">

    <div class="box-01">
      <div class="arrow-wrapper">
<!--       vue router -->
          <router-link class="arrow" :to="{ name: 'review-list' }">
              ⬅
          </router-link>
      </div>
      <div class="title-wrapper">
        <h1 class="store-name">よってこや 新宿南口店</h1>
      </div>
      <div class="mode-wrapper">
        <h1 class="mode">レビュー詳細</h1>
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
          <div class="user-name">
              みそだいすきさんのレビュー
          </div>
          <div class="img-wrapper">
              <div class="chart">
                  <img src="../Ozawa_files/chart2.png" alt="">
              </div>
              <div class="review-img">
                  <img class="card-img-top" src="../Ozawa_files/Sample_ramenshot.jpg">
              </div>
          </div>
          <div class="text-wrapper">
              <div class="review-text">
              とてもおいしかったです。
              <br>
              家族に紹介したいです。
              </div>
          </div>
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
    *{
        margin: 0;
        padding: 0;
    }
    .main {
        width: 375px;
        height: 812px;
    }
    .box-01 {
        width: 100%;
        height: 214px;
        background-size: cover;
        background-image: url("../Ozawa_files/ramen-mask.png");
    }
    .arrow-wrapper {
        width: 100%;
        height: 48%;
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
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .mode {
        font-size: 24px;
        color: white;
        font-weight: 100;
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
        background-color: #353A50;
        border-radius: 18px;
        .user-name{
            width: 100%;
            height: 15%;
            font-size: large;
            font-weight: bold;
            text-align: center;
            position: relative;
            top: 17px;
        }
        .img-wrapper {
            width: 100%;
            height: 30%;
            display: flex;
            .chart {
                width: 50%;
                height: 100%;
                /*background-color: #9561e2;*/
                display: flex;
                align-items: center;
                justify-content: center;
                img {
                    width:auto;
                    height:auto;
                    max-width:95%;
                    max-height:100%;
                }
            }
            .review-img {
                width: 50%;
                height: 100%;
                /*background-color: #552233;*/
                display: flex;
                align-items: center;
                justify-content: center;
                img {
                    width:auto;
                    height:auto;
                    max-width:95%;
                    max-height:100%;
                }
            }
        }
        .text-wrapper{
            width: 100%;
            height: 57%;
            display: flex;
            justify-content: center;
            align-items: center;
            .review-text{
                width: 80%;
                height: 80%;
                background-color: #2A2E43;
                border-radius: 45px;
                padding-left: 30px;
                padding-top: 18px;
            }
        }
    }
</style>
