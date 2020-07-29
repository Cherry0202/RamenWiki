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
                <h1 class="mode">レビュー一覧</h1>
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
                <div
                    class="review-list"
                    v-for="review in reviews"
                    :key="review.id"
                >
                    <div class="user-content">
                        <div class="user-name">
                            {{  review.user_name }}さん
                        </div>
                        <div class="review-text">
                            {{ review.text}}
                        </div>
                    </div>
                    <div class="chart">
                        <img src="../Ozawa_files/chart2.png" alt="">
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
    export default {
        name: "ReviewList",
        head: {
            meta: [{ name: 'viewport', content: 'width=375' }]
        },
        data(){
            return {
                reviews:[
                    {
                        "user_name":"みそだいすき",
                        "text":"とてもおいしかったです。\n" +
                            "                            家族に紹介したいです。"
                    },
                    {
                        "user_name":"替え玉っていいよね",
                        "text":"細麺バリカタがおすすめ！"
                    },
                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },
                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },
                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },
                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },
                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },
                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },
                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    },
                    {
                        "user_name":"hogehoge",
                        "text":"hoeghoege"
                    }

                ]
            }
        }
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
        display: flex;
        .user-content {
            height: 100%;
            width: 65%;
            color: #FFFFFF;
            .user-name{
                width: 100%;
                height: 35%;
                display: flex;
                align-items: flex-end;
                padding-left: 10px;
            }
            .review-text{
                width: 100%;
                height: 65%;
                display: flex;
                align-items: center;
                padding-left: 10px;
            }
        }
        .chart{
            background-color: #636b6f;
            height: 100%;
            width: 35%;
            img {
                width:auto;
                height:auto;
                max-width:100%;
                max-height:100%;
            }
        }
    }
</style>
