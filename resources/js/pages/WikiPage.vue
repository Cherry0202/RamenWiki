<template>
    <div class="wraps">
        <form method="post" action="#">
            <div class="main_photo">
                <img alt="photo" src="../Ozawa_files/Sample_ramenshot.jpg">
                <div class="grad">
                    <p class="name">{{store_name}}</p>
                </div>
                <p class="yasi">⬅</p>
            </div>
            <div class="main_line">
                <img alt="line" src="../Ozawa_files/ColorLine.png">
            </div>
            <div class="main_text">
                <p class="Midashi">店舗詳細</p>
<!--                <input type="button" class="edit" value="　Edit　">-->
                <router-link :to="{ name: 'edit' }" class="edit">
                    Edit
                </router-link>
                <ui class="icon">
                    <li><img src="../Ozawa_files/icon1.png"></li>
                    <li><img src="../Ozawa_files/icon2.jpg"></li>
                    <li><img src="../Ozawa_files/icon3.png"></li>
                </ui>
                <!----------------------------------------------------------------------------------------------------------------------------------------->

                <div class="Honbun">
                    <p>
                        {{ wiki.text}}
                    </p>
                </div>

                <!----------------------------------------------------------------------------------------------------------------------------------------->
                <hr class="hhhh">
                <!----------------------------------------------------------------------------------------------------------------------------------------->

                <div class="chart">
                    <img src="../Ozawa_files/chart.png">
                </div>

                <!----------------------------------------------------------------------------------------------------------------------------------------->
                <!----------------------------------------------------------------------------------------------------------------------------------------->

                <hr class="hoge">
                <div class="phone_g">
                    <div class="aaaaaaaaaaaaaaa">
                        <img class="phone" src="../Ozawa_files/phone.png">
                        <p>
                            {{phone_number}}
                        </p>
                    </div>
                </div>
                <hr class="hoge hoge2">
                <!--  Map  -->
                <iframe src="https://maps.google.co.jp/maps?output=embed&q=よってこや 新宿南口店" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <hr class="hoge">

                <p class="Sub_Midashi">最新レビュー</p>
                <div class="accbox">
                    <!----------------------------------------------------------------------------------------------------------------------------------------->
                    <label for="label1">Username1</label>
                    <input type="checkbox" id="label1" class="cssacc" />
                    <div class="accshow">
                        <!--body-->
                        <p>
                            とてもおいしかったです
                            <br>
                            家族に紹介したいです。
                            <br>
                        </p>
                    </div>
                    <!----------------------------------------------------------------------------------------------------------------------------------------->
                    <label for="label2">Username2</label>
                    <input type="checkbox" id="label2" class="cssacc" />
                    <div class="accshow">
                        <!--body-->
                        <p>
                            hoge
                        </p>
                    </div>
                    <!----------------------------------------------------------------------------------------------------------------------------------------->
                </div>

                <hr class="hoge">

                <div class="Buttons">
                    <a href="#" class="btn1">レビューを書く</a>
                    <a href="#" class="btn2">すべてのレビューを見る</a>
                    <a href="#" class="btn3">この店舗に行ったことがある</a>
                    <a href="https://www.google.co.jp/maps/dir/%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%96%B0%E5%AE%BF%E5%8C%BA%E8%A5%BF%E6%96%B0%E5%AE%BF%EF%BC%91%E4%B8%81%E7%9B%AE%EF%BC%97+%E7%B7%8F%E5%90%88%E6%A0%A1%E8%88%8E%E3%82%B3%E3%82%AF%E3%83%BC%E3%83%B3%E3%82%BF%E3%83%AF+HAL%E6%9D%B1%E4%BA%AC/%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%96%B0%E5%AE%BF%E5%8C%BA%E6%96%B0%E5%AE%BF%EF%BC%93%E4%B8%81%E7%9B%AE%EF%BC%93%EF%BC%95%E2%88%92%EF%BC%91%EF%BC%93+%E3%82%88%E3%81%A3%E3%81%A6%E3%81%93%E3%82%84+%E6%96%B0%E5%AE%BF%E5%8D%97%E5%8F%A3%E5%BA%97/@35.689994,139.6979404,17z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x60188cd6981dce11:0xee411b3fa3fc9f13!2m2!1d139.6969368!2d35.6916554!1m5!1m1!1s0x60188cdaf48693a1:0x4d4ff726e7fb4a72!2m2!1d139.7026238!2d35.6901278!3e0" class="btn4">GoogleMapでルート案内する</a>

                </div>

            </div>
        </form>
    </div>
</template>

<script>
    import Vue from 'vue'
    import VueHead from 'vue-head'
    Vue.use(VueHead)
    export default {
        name: 'WikiPage',
        data: function(){
            return{
                wiki: {
                  text: "京都鶏ガラとんこつ醤油ラーメン屋台味(半熟味玉付・820円＋税)                        <br>\n" +
                      "                        hoge" +
                      "                        hogeeeeeeeee"
                },
                screenwidth: 375,
                store_id: this.$route.params.id,
                store_name: String,
                text: String,
                user_sum: Number,
                phone_number: String,
                lat: Number,
                lng: Number
            }
        },
        created: function() {
            const url = '/wiki/detail';
            axios.post(url,{store_id:this.store_id})
                .then(response => {
                    console.log(response.data.result[0]);
                    this.store_name = response.data.result[0].store_name;
                    this.text = response.data.result[0].text;
                    this.user_sum = response.data.result[0].store_user_sum;
                    this.phone_number = response.data.result[0].phone_number;
                    this.lat = response.data.result[0].lat;
                    this.lng = response.data.result[0].lng;
                })
        },
        head: {
            meta: [{ name: 'viewport', content: 'width=375' }]
        }
    }
</script>

<!--- SCSS ----------------------------------------------------------------------------------------------------------->
<style scoped lang="scss">
    .wraps {
        margin-right: 0;
        width: 375px;
        min-height: 1800px;
        display: flex;
        flex-direction: column;
        //border: dashed 2px #5b8bd0;
        //border-radius: 5px;
        //padding: 3px;
        background-color: #2A2E43;
        justify-content: center;
        align-items: center;
        position: relative;
        .main_photo {
            img{
                width: 375px;
                height: 300px;
                object-fit: cover;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
            }
            .grad{
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 375px;
                height: 300px;
                background: -moz-linear-gradient(top, #000, transparent);
                background: -webkit-linear-gradient(top, #000, transparent);
                background: linear-gradient(to top, rgb(61, 59, 59), transparent);
                z-index: 10;
            }
            .name{
                font-family: 'MyFont';
                /*
                position: absolute;
                top: 21%;
                left: 19%;
                transform: translateX(-25%);
                */
                margin: 230px 0 0 40px;
                font-size: 30px;
                z-index: 300;
                color: white;
            }
            .yasi{
                position: absolute;
                top: 0%;
                left: 6%;
                font-size: 20px;
                z-index: 12;
                color: white;
            }
        }
        .main_line{
            /*
            position: relative;
            top: 63%;
            */
            margin-top: 300px;
            width: 375px;
            height: auto;
            z-index: 40;
            img{
                width: 100%;
            }
        }
        .main_text{
            .Midashi{
                font-size: 25px;
                color: white;
                position: relative;
                top: 5px;
                margin-left: 30px;
            }
            .hhhh{
                border-width: 1px 0px 0px 0px;
                border-style: solid;
                border-color: #cdcdcd;
                margin-right: 20px;
                margin-left: 20px;
            }
        }
        .icon{
            position: relative;
            width: 100%;
            height: auto;
            top: 5%;
            //right: 0;
            //bottom: 0;
            //left: 0;
            display: flex;
            flex-wrap:wrap;

            li {
                margin-top: 20px;
                list-style: none;
                width: calc(100%/5);
                padding: 0 5px;
                box-sizing: border-box;
                position: relative;
                top: 25px;
                left: 15%;
                img {
                    transform: translate(-50%,-50%);
                    max-width: 100%;
                    height: auto;
                    //border:solid 1px #ccc; //dbg
                }
            }
        }
        .Honbun{
            position: relative;
            //left: -140%;
            //top: 16%;
            //margin-top: 30px;
            width: 375px;
            height: 200px;
            color: #A9A9A9;
            //border:solid 1px #ccc; //dbg
            p{
                padding-left: 33px;
                padding-right: 20px;
            }
        }
        .chart{
            width: 100%;
            height: 300px;
            z-index: 500;
            display: flex;
            justify-content: center;
            position: relative;
            top: 10px;
            img {
                width: 86%;
                /*height: 100%;*/
            }
        }

        ////////////////////////////////////////////////////////////////////////////////////

        /*
        .second_text{
            position: absolute;
            top: 100%;
            width: 375px;
            height: auto;
            background-color: #2A2E43;
            //background-color: crimson; //dbg
        */
        .hoge{
            margin-top: 20px;
            border-width: 1px 0px 0px 0px;
            border-style: solid;
            border-color: #cdcdcd;
            margin-right: 20px;
            margin-left: 20px;
        }
        .hoge2{
            margin-top: 10px;
        }



        ///////////////////////////////////////////////////////////////////////////
        .phone_g{
            margin-top: 10px;
            margin-bottom: 10px;
            width: 100%;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            .aaaaaaaaaaaaaaa{
                display: flex;
                align-items: center;
                p{
                    margin-left: 30px;
                    color: #A9A9A9;
                }
            }

        }
        iframe{
            margin-top: 20px;
            margin-left: 40px;
        }
        .Sub_Midashi{
            font-size: 25px;
            color: white;
            margin-top: 20px;
            margin-left: 30px;
        }
        .Buttons{
            width: 100%;
            display: flex;
            flex-direction: column;
            margin:20px 0 20px 0;
        }
        /////////////////////////////////////////////////////////////////////////


    }

</style>



<!--- CSS ----------------------------------------------------------------------------------------------------------->

<style scoped lang="css">

    @font-face {
        font-family: 'MyFont';
        src: url(../Ozawa_files/NotoSerifJP-Bold.otf);
    }

    /*********** レビュー ***********/
    .accbox {
        padding: 0;
        max-width: 300px;
        margin-left: 37px;
    }
    .accbox label {
        display: block;
        margin: 1.5px 0;
        padding : 11px 12px;
        color :#DCDCDC;
        font-weight: bold;
        background :#3c4052;
        cursor :pointer;
        transition: all 0.5s;
        border-radius: 5px;
    }
    .accbox label:hover {
        background :#85baef;
    }
    .accbox input {
        display: none;
    }
    .accbox .accshow {
        height: 0;
        padding: 0;
        overflow: hidden;
        opacity: 0;
        transition: 0.8s;
    }
    .cssacc:checked + .accshow {
        height: auto;
        padding: 5px;
        background: #BAD3FF;
        opacity: 1;
        border-radius: 5px;
    }


    /*********** ボタン ***********/
    .btn1,.btn2,.btn3,.btn4 {
        width: 80%;
        position: relative;
        left: 9.5%;
        display: inline-block;
        padding: 0.3em 1em;
        text-decoration: none;
        border-radius: 3px;
        transition: .4s;
        text-align: center;
        padding: 10px 0 10px 0;
        margin: 10px 0 10px 0;
    }
    .btn1{
        color: #67c5ff;
        border: solid 2px #67c5ff;
    }
    .btn2{
        color: #67c5ff;
        border: solid 2px #67c5ff;
    }
    .btn3{
        color: #67c5ff;
        border: solid 2px #67c5ff;
    }
    .btn4{
        color: #67c5ff;
        border: solid 2px #67c5ff;
    }

    .btn1:hover,.btn2:hover,.btn3:hover,.btn4:hover {
        background: #67c5ff;
        color: white;
    }




    .edit{
        position: absolute;
        left: 70%;
        top: 322px;
        background: #fff;
        border: 1px solid #fff;
        cursor: pointer;
        border-radius: 2px;
        color: #a18d6c;
        font-family: 'Exo', sans-serif;
        font-size: 14px;
        font-weight: 400;
    }
    .edit:hover{
        opacity: 0.8;
    }

</style>
