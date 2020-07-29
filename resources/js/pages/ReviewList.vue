<template>
    <div class="main">

        <div class="box-01">
            <div class="arrow-wrapper">
                <!--       vue router -->
                <div class="arrow">←</div>
            </div>
            <div class="title-wrapper">
                <h1 class="store-name">ラーメンB</h1>
            </div>
            <div class="mode-wrapper">
                <h1 class="mode">詳細</h1>
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
                <div class="review-list"></div>
                <div class="review-list"></div>
                <div class="review-list"></div>
                <div class="review-list"></div>
                <div class="review-list"></div>
                <div class="review-list"></div>
            </div>
        </main>
    </div>
</template>

<script>
    export default {
        name: "ReviewList",
        head: {
            meta: [{ name: 'viewport', content: 'width=375' }]
        }
    }
</script>

<style scoped lang="css">
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
        top: 15px;
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
        /*background-color: #EDF0F5;*/
        display: flex;
        justify-content: center;
        align-items: center;
        overflow-y: scroll;
        flex-wrap: wrap;
        /*border-radius: 18px;*/
    }
    .review-list {
        width: 100%;
        height: 107px;
        border-radius: 18px;
        background-color: #353A50;
        margin: 8px;
    }
</style>
