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
                <div class="user-name">
                    hoge
                </div>
                <div class="view-chart">
                    <chart-sample></chart-sample>
                </div>
                <div class="upload-image">
                    <input type="file">
                </div>
                <div class="review-text">
                    <textarea name="text" placeholder="レビュー内容を記載してください"></textarea>
                </div>
                <div class="link-list">
                    <button class="sub">投稿</button>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
    export default {
        name: "ReviewInput"
    }
</script>

<style scoped lang="scss">
    *{
        margin: 0;
        padding: 0;
    }
    textarea {
        padding: 10px;
        border-radius: 0;
        resize: none;
        border: 1px solid transparent;
        transition: border 0.2s ease-out;
        outline: none;
        background-color: #eee;
    }

    textarea::-webkit-scrollbar {
        width: 10px;
    }

    textarea::-webkit-scrollbar-track {
        background-color: #eee;
    }

    textarea::-webkit-scrollbar-thumb {
        background-color: #ccc;
    }

    textarea:focus {
        border-bottom: 1px solid #e74c3c;
        box-shadow: none;
        outline: none;
    }
    .chartjs-render-monitor{
        display: block;
        /* height: 338px; */
        width: 68%;
        padding-left: 53px;
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
        /*background-color: #353A50;*/
        background-color: white;
        border-radius: 18px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        .user-name {
            width: 100%;
            height: 5%;
            padding-left: 11px;
            padding-top: 4px;
        }
        .view-chart {
            /*background-color: #9561e2;*/
            width: 100%;
            height: 65%;
        }
        .upload-image {
            /*background-color: #4dc0b5;*/
            width: 95%;
            height: 5%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 6px;
        }
        .review-text {
            width: 95%;
            height: 15%;
            textarea {
                width: 100%;
                height: 100%;
                border-radius: 16px;
            }
        }
        .link-list {
            width: 100%;
            height: 10%;
            display: flex;
            justify-content: center;
            align-items: center;
            .sub {
                width: 99px;
                height: 35px;
                border-radius: 5px;
                background-color: #3ACCE1;
            }
        }
    }
</style>
