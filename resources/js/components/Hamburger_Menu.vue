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
                        <h2 class="loginstatus">未ログイン</h2>
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
                        <img class="home" src="../images/home.png"/>
                        <a href="#">Home</a>
                    </div>
                    <div class="button-div">
                        <form @submit.prevent="login">
                            <button class="buttonop1" type="submit">ログイン</button>
                        </form>
                        <form @submit.prevent="signup">
                            <button class="buttonop2" type="submit">会員登録</button>
                        </form>
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
        width: 100vw;
        height: 80vh;
        /*background-color: #ffed4a;*/
        position: fixed;
        /*TODO:z-index*/
        z-index: 3;
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
                height: 200px;
                background-image: url("../images/lll.png");
                background-size:375px 200px;
                .upper-wrap{
                    .yazirusi{
                        padding-top: 10px;
                        height: 40px;
                        width: 40px;
                    }
                    .icons{
                        height: 55px;
                        width: 55px;
                        display: flex;
                        padding-top: 20px;
                        padding-left: 30px;
                    }
                    .loginstatus{
                        margin: 0;
                        padding-top: 10px; ;
                        padding-left: 30px;
                        color: white;
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
                height:400px;
                background-color: #F2F2F2;
                display: block;
                .under-wrap{
                    //-color: #552233;
                    padding-top: 20px;
                    padding-left:30px ;
                    height: 200px;
                    .home{
                        height: 25px;
                        width: 25px;
                        padding-top: 30px;
                    }
                }
                .under-wrap,a{
                    padding-top: 30px;
                    font-size: 30px;
                    font-family: Franklin Gothic Medium;
                    color: gray;
                    text-decoration: none;
                }
                .button-div{
                    // background-color: #002211;
                    height: 170px;
                    display: block;
                    margin-left: 50px;
                    .buttonop1{
                        display       : inline-block;
                        border-radius : 20%;          /* 角丸       */
                        font-size     : 20pt;        /* 文字サイズ */
                        text-align    : center;      /* 文字位置   */
                        cursor        : pointer;     /* カーソル   */
                        padding       : 13px 63px;   /* 余白       */
                        background    : #00e6e6;     /* 背景色     */
                        color         : #ffffff;     /* 文字色     */
                        line-height   : 1em;         /* 1行の高さ  */
                        transition    : .3s;         /* なめらか変化 */
                        border        : 2px solid #00e6e6;    /* 枠の指定 */
                    }
                    .buttonop1:hover{
                        color         : #00e6e6;     /* 背景色     */
                        background    : #ffffff;     /* 文字色     */
                    }
                    .buttonop2{
                        display       : inline-block;
                        border-radius : 20%;          /* 角丸       */
                        font-size     : 20pt;        /* 文字サイズ */
                        text-align    : center;      /* 文字位置   */
                        cursor        : pointer;     /* カーソル   */
                        padding       : 13px 63px;   /* 余白       */
                        background    : #202f55;     /* 背景色     */
                        color         : #ffffff;     /* 文字色     */
                        line-height   : 1em;         /* 1行の高さ  */
                        transition    : .3s;         /* なめらか変化 */
                        border        : 2px solid #202f55;    /* 枠の指定 */
                    }
                    .buttonop2:hover{
                        color         : #202f55;     /* 背景色     */
                        background    : #ffffff;     /* 文字色     */
                    }
                }
            }
        }
    }
</style>
