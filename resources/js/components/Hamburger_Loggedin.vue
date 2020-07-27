<template>
<div id="app">
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
                    <img class= "yazirusi" src="..\images\sozai1.png"/>
                    <img class="icons" src="..\images\sozais2.png"/>
                    <h2 class="loginstatus">ログインユーザー</h2>
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
                    <div class ="homeframe">
                        <div class="inhomeframe"><img class="homeimg" src="..\images\homes.png"/></div>
                        <div class="inhomeframe2"><a href="#">Home</a></div>
                    </div>
                    <div class ="mypageframe">
                        <div class ="inmypageframe"><img class="mypageimg" src="..\images\mypage.png"/></div>
                        <div class ="inmypageframe2"><a href="#">My Page</a></div>
                    </div>
                    <div class ="aiframe">
                        <div class ="inaiframe"><img class="aiimg" src="..\images\ai.png"/></div>
                        <div class ="inaiframe2"><a href="#">aiのおすすめ</a></div>
                    </div>
                    <div class ="withdrawframe">
                        <!--<div class ="inwithdrawframe"><img class="withdrawimg" src="..\images\home.png"/></div>-->
                        <div class ="inwithdrawframe2"><a href="#">退会</a></div>
                    </div>   
                </div>
                <div class="button-div">
                    <div class="inlogoutframe"><img class="logoutimg" src="..\images\logout.png"/></div>
                    <div class="inlogoutframe2"><a href="#">Log Out</a></div>
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
    }
  }
  </script>

  <style scoped lang="scss">
  #app{
        width: 375px;
        height: 100vh;
        //background-color: #aa0066;
        .hamburger_btn {
        //position: fixed; /*常に最上部に表示したいので固定*/
        top: 0;
        right: 0;
        width: 70px;
        height: 45px;
        cursor: pointer;
        z-index: 50;
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
            //display: block;
            .under-wrap{
                //-color: #552233;
                padding-top: 20px;
                padding-left:30px ;
                height: 250px;
                display: block;
                .homeframe{
                    display:flex;
                    height: 25px;
                    width: 100px;
                    padding-top: 30px;
                    .inhomeframe{
                        padding-right: 15px;
                        .homeimg{
                        height: 20px;
                        width: 20px;
                        }
                    }
                    .inhomeframe2 ,a{
                        padding-top: 0;
                        height: 30px;
                    }
                }
                .mypageframe{
                    display: flex;
                    height: 25px;
                    width: 100px;
                    padding-top: 30px;
                    .inmypageframe{
                        padding-top: 0;
                        padding-right: 15px ;
                        .mypageimg{
                        height: 20px;
                        width: 20px;
                        }
                    }
                }
                .mypageframe ,a{
                    width: 200px;
                }
                .aiframe{
                    display: flex;
                    height: 25px;
                    width: 150px;
                    padding-top: 30px;
                    .inaiframe{
                        padding-top:5px;
                        padding-right: 15px;
                        .aiimg{
                            height: 20px;
                            width: 20px;
                        }
                    }
                    
                }
                .aiframe ,a{
                    width :250px;
                }
                .withdrawframe{
                    display: flex;
                    height: 25px;
                    width: 100px;
                    padding-top: 30px;
                    // .inwithdrawframe{
                    //     padding-top: 3px;
                    //     padding-right: 15px;
                    //     .withdrawimg{
                    //         height: 20px;
                    //         width: 20px;
                    //     }
                    // }
                    .inwithdrawframe2{
                        padding-left: 30px ;
                    }
                    
                }
                .withdrawframe ,a{
                    width: 200px;
                }
            }
            .under-wrap,a{
                // padding-top: 30px;
                font-size: 20px;
                font-family: Franklin Gothic Medium;
                color: gray;
                text-decoration: none;
            }
            .button-div{
                // background-color: #002211;
                height: 110px;  
                display: flex; 
                margin-top:85px;
                margin-left: 30px;
                .inlogoutframe{
                    padding-right: 13px;
                }
            }
        }
    }
    }
  </style>