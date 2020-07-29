<template>
    <div id="wrapper">
        <!--ハンバーガーメニューのボタン-->
        <div class="hamburger_btn" v-on:click='ActiveBtn=!ActiveBtn'>
            <span class="line line_01" v-bind:class="{'btn_line01':ActiveBtn}"></span>
            <span class="line line_02" v-bind:class="{'btn_line02':ActiveBtn}"></span>
            <span class="line line_03" v-bind:class="{'btn_line03':ActiveBtn}"></span>
        </div>
        <!--サイドバー-->
        <transition name="menu" >
            <div class="menu" v-show="ActiveBtn">
                <div id="background-wrap">
                    <div class="upper-wrap">
                        <img class= "yazirusi" src="../images/sozai1.png"/>
                        <img class="icons" src="../images/sozais2.png"/>
                        <h2 class="loginstatus">hoge</h2>
                    </div>
                </div>
                <div id="under-color-block">
                    <div class="block1"></div>
                    <div class="block2"></div>
                    <div class="block3"></div>
                    <div class="block4"></div>
                </div>
                <div id="footer">
                    <div class="under-wrap">
                        <div class="list-wrapper">
                            <img class="home" src="../images/home.png"/>
                            <a href="#">Home</a>
                        </div>
                        <div class="list-wrapper">
                            <img class="home" src="../images/mypage.png"/>
                            <a href="#">Mypage</a>
                        </div>
                        <div class="list-wrapper">
                            <img class="home" src="../images/ai.png"/>
                            <a href="#">AIのおすすめ</a>
                        </div>
                        <div class="list-wrapper">
                            <img class="home" src="../images/icon-x.png"/>
                            <a href="#">退会</a>
                        </div>
                    </div>
                    <div class="logout-wrapper">
                        <div class="list-wrapper">
                            <img class="home" src="../images/logout.png"/>
                            <a class="log-text" href="#">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        data: function() {
            return{
                ActiveBtn : false,
            }
        },
        methods: {
            login() {
                this.$router.push("#")
            },
            signup(){
                this.$router.push("#")
            }
        }
    }
</script>

<style scoped lang="scss">
    #wrapper{
        width: 85vw;
        height: 80vh;
        position: fixed;
        /*TODO:z-index*/
        z-index: 4;
        .hamburger_btn {
            position: fixed; /*常に最上部に表示したいので固定*/
            top: 0;
            left: 0;
            width: 70px;
            height: 45px;
            cursor: pointer;
            z-index: 4;
        }

        //基本いじらない
        .hamburger_btn .line {
            position: absolute;
            top: 0;
            left: 20px;
            width: 32px;
            height: 2px;
            background: #333333;
            text-align: center;
        }

        .hamburger_btn .line_01 {
            top: 16px;
            transition: 0.4s ease;
        }
        .hamburger_btn .line_02 {
            top: 26px;
            transition: 0.4s ease;
        }
        .hamburger_btn .line_03 {
            top: 36px;
            transition: 0.4s ease;
        }


        .btn_line01 {
            transform: translateY(10px) rotate(-45deg);
            transition: 0.4s ease;
        }
        .btn_line02 {
            transition: 0.4s ease;
            opacity: 0;
        }
        .btn_line03 {
            transform: translateY(-10px) rotate(45deg);
            transition: 0.4s ease;
        }

        /*サイドバー*/
        .menu-enter-active, .menu-leave-active {
            transition: opacity 0.4s;
        }
        .menu-enter, .menu-leave-to {
            opacity: 0;
        }
        .menu-leave, .menu-enter-to{
            opacity: 1;
        }
        .menu {
            background-color: rgba(197, 197, 197, 0.671);
            //padding: 2rem 1rem;
            //position: fixed;
            // width: 20rem;
            // height: 80rem;
            // top: 0;
            // right: 0;
            // .wrap {
            // width: 375px;
            // height: 100vh;
            // background-color: whitesmoke;
            // position: relative;
            // top: 0;
            // right: 0;
            // bottom: 0;
            // left: 0;
            #background-wrap{
                height: 30vh;
                background-image: url("../images/lll.png");
                background-size: cover;
                background-repeat: no-repeat;
                .upper-wrap{
                    .yazirusi{
                        padding-top: 10px;
                        height: 40px;
                        width: 40px;
                    }
                    .icons{
                        width: 185px;
                        display: flex;
                        padding-top: 105px;
                        padding-left: 84px;
                    }
                    .loginstatus{
                        margin: 0;
                        padding-top: 40px;
                        padding-left: 104px;
                        color: white;
                        font-size: 60px;
                    }
                }
            }
            #under-color-block{
                display: flex;
                height: 10px;
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
            #footer{
                height: 70vh;
                background-color: #F2F2F2;
                display: flex;
                position: relative;
                justify-content: center;
                flex-wrap: wrap;
                .under-wrap{
                    height: 54%;
                    width: 94%;
                    .list-wrapper {
                        .home {
                            width: 80px;
                            padding-top: 90px;
                            padding-left: 60px;
                        }
                    }
                }
                .logout-wrapper {
                    width: 94%;
                    height: 33%;
                    display: flex;
                    align-items: flex-end;
                    .list-wrapper {
                        .home {
                            width: 60px;
                            padding-top: 90px;
                            padding-left: 60px;
                        }
                        a {
                            font-size: 41px;
                        }

                    }
                }
            }
            .under-wrap,a{
                padding-top: 30px;
                font-size: 80px;
                font-family: Franklin Gothic Medium;
                color: gray;
                text-decoration: none;
            }
            }
        }
</style>
