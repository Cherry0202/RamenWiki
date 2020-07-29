<template>
    <div class="wrap">
        <div id="main">
            <hamburger_-loggedin></hamburger_-loggedin>
            <search-form-component @postLists="getLists"></search-form-component>
            <!--            <img src="../Ozawa_files/map-sample.png" alt="">-->
            <div class="g-map">
                <!--                ここにgoogle map-->
            </div>
            <div class="card-wrapper">
                <result-card-component :results="results"></result-card-component>
            </div>
            <div id="under-color-block">
                <div class="block1"></div>
                <div class="block2"></div>
                <div class="block3"></div>
                <div class="block4"></div>
            </div>
            <div id="ramen-menu-bar">
                <div class="text2">
                    <h2>Nearby</h2>
                    <p>近くのラーメン店</p>
                </div>
                <div class="text3"><h1>{{results.length}}</h1></div>
            </div>
        </div>
    </div>
</template>

<script>
    import Hamburger_Menu from "../components/Hamburger_Menu";
    import Hamburger_Loggedin from "../components/Hamburger_Loggedin";
    export default {
        components: {Hamburger_Loggedin, Hamburger_Menu},
        data() {
            return {
                maplocation:{lat:0, lng:0},
                makers:[],
                results: [],
            }
        },
        methods: {
            getLists(lists) {
                this.results = lists
                let hoge = this.results[0]
                console.log(hoge['store'].store_name);
            }
        },
        head: {
            meta: [{ name: 'viewport', content: '' }]
        }
    }
</script>


<style scoped lang="scss">
    .wrap{
        width: 100vw;
        height: 100vh;
        /*background-color: whitesmoke;*/
        position: relative;
        /*top: 0;*/
        /*right: 0;*/
        /*bottom: 0;*/
        /*left: 0;*/
        .header{
            display: flex;
            /*background-color: #339b4d;*/
        }
        .menu-all{
            background-color: #3ACCE1;
            height: 100%;
            padding-top: 10px;
            padding-left: 20px;
            .button {margin-top: 10px;
                padding: 0.75em 1em;
                text-align: center;
                text-decoration: none;
                color: #2194E0;
                border: 2px solid #2194E0;
                font-size: 12px;
                display: inline-block;
                border-radius: 0.3em;
                transition: all 0.2s ease-in-out;
                position: relative;
                overflow: hidden;
            }
        }
        .searcher{
            /*background-color: #339b4d;*/
            height: 100px;
            position: absolute;
            width: 100vw;
            top: 0;
            z-index: 3;
            .search-container{
                width: 260px;
                display: block;
                padding-left: 15px;
                padding-top: 23px;
                margin: 0 auto;
            }

            input#search-bar{
                margin: 0 auto;
                width: 100%;
                height: 35px;
                font-size: 1rem;
                border: 1px solid #D0CFCE;
                outline: none;
                &:focus{
                    border: 1px solid #008ABF;
                    transition: 0.35s ease;
                    color: #008ABF;
                    &::-webkit-input-placeholder{
                        transition: opacity 0.45s ease;
                        opacity: 0;
                    }
                }
            }
            .search-icon{
                position: relative;
                float: right;
                width: 50px;
                height: 50px;
                top: -43px;
                right: -5px;
            }
        }
        #main{
            position: relative;
            width: 100%;
            height: 100%;
            background-color: #2A2E43;
            .g-map {
                background-color: whitesmoke;
                width: 100%;
                position: absolute;
                top: 0;
                height: 100vh;
                z-index: 1;
                background-image: url("../Ozawa_files/sample-map2.png");
                background-repeat: no-repeat;
                background-size: cover;
            }
            .card-wrapper {
                /*background-color: #636b6f;*/
                width: 100%;
                position: absolute;
                z-index: 2;
                bottom: 177px;
            }
        }
        #under-color-block{
            display: flex;
            height: 8px;
            .block1{
                width: 25%;
                background-color: #665EFF;
            }
            .block2{
                width: 25%;
                background-color: #5773FF;
            }
            .block3{
                width: 25%;
                background-color: #3497FD;
            }
            .block4{
                width: 25%;
                background-color: #3ACCE1;
            }
        }
        #ramen-menu-bar{
            background-color: #2A2E43;
            display: flex;
            height: 8%;
            width: 100%;
            position: absolute;
            z-index: 2;
            bottom: 0;
            .text2{
                width: 85%;
                /*background-color: #3AC;*/
                h2 {
                    font-size: 50px;
                    color: white;
                    padding-left: 30px;
                    padding-top: 11px;
                }
                p{
                    font-size: 40px;
                    color: white;
                    padding-left: 30px;
                }
            }
            .text3{
                width: 15%;
                /*background-color: #CE1;*/
                display: flex;
                justify-content: center;
                align-items: center;
                h1{
                    font-size: 100px;
                    color: #9EA7CC;
                    padding-left: 30px;
                }
            }
        }
    }
</style>

<!-- TODO: photorefにリクエスト処理-->
