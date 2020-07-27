<template>
    <div class="wrap">
    <form method="post" action="#">
            <div class="main_photo">
                <img alt="photo" src="../Ozawa_files/Sample_ramenshot.jpg">
                <div class="grad"></div>
                <p class="name">{{ store_name }}</p>
                <p class="yasi">⬅</p>
            </div>
            <div class="main_line">
                <img alt="line" src="../Ozawa_files/ColorLine.png">
            </div>
            <div class="main_text">
                <p class="Midashi">店舗詳細</p>
                <input type="button" class="edit" value="　Edit　">
                <ui class="icon">
                    <li><img src="../Ozawa_files/icon1.png"></li>
                    <li><img src="../Ozawa_files/icon2.jpg"></li>
                    <li><img src="../Ozawa_files/icon3.png"></li>
                </ui>
                <!----------------------------------------------------------------------------------------------------------------------------------------->

                <div class="Honbun">
                    <p>
                        {{ text }}
                    <br>
                    hoge
                    <br>
                    hogeeeeeeeee
                    </p>
                </div>

                <!----------------------------------------------------------------------------------------------------------------------------------------->
                <hr>
                <!----------------------------------------------------------------------------------------------------------------------------------------->

                <div class="chart">
<!--                    <img src="../Ozawa_files/chart.png">-->
                    <h1>投稿者{{ user_sum }}人の平均</h1>
                </div>

                <!----------------------------------------------------------------------------------------------------------------------------------------->
                <!----------------------------------------------------------------------------------------------------------------------------------------->

                <div class="second_text">
                    <hr>
                    <div class="phone_g">
                        <img class="phone" src="../Ozawa_files/phone.png">
                        <p>
                            {{phone_number}}
                        </p>
                    </div>
                    <hr>
                    <!--  Map  -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4880141904177!2d139.6983826156727!3d35.68960668019239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1594865322873!5m2!1sja!2sjp" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <hr>

                    <p class="Sub_Midashi">最新レビュー</p>
                    <div class="accbox">
                    <!----------------------------------------------------------------------------------------------------------------------------------------->
                        <label for="label1">Username1</label>
                        <input type="checkbox" id="label1" class="cssacc" />
                        <div class="accshow">
                        <!--body-->
                        <p>
                            RRRRRR
                            <br>
                            RRRRRRRRRRRRRRRRRRRRRR
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

                    <hr>

                    <div class="Buttons">
                        <a href="#" class="btn1">レビューを書く</a>
                        <a href="#" class="btn2">すべてのレビューを見る</a>
                        <a href="#" class="btn3">この店舗に行ったことがある</a>
                        <a href="#" class="btn4">GoogleMapでルート案内する</a>
                    </div>

                </div>
            </div>
    </form>
    </div>
</template>

<script>
    export default {
        name: 'WikiPage',
        data: function(){
          return{
              store_id: this.$route.params.id,
              store_name: String,
              text: String,
              user_sum: Number,
              phone_number: String,
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
        })
        }
    }
</script>

<!--- SCSS ----------------------------------------------------------------------------------------------------------->
<style scoped lang="scss">
    .wrap {
        width: 375px;
        height: 1000px;
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
                position: absolute;
                top: 21%;
                left: 19%;
                transform: translateX(-25%);
                font-size: 30px;
                z-index: 11;
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
            position: relative;
            top: 63%;
            margin-top: 20px;
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
                top: -3%;
                //right: 0;
                //bottom: 0;
                //left: 10%;
                margin-left: 30px;
            }
            hr{
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
                padding:0 5px;
                box-sizing:border-box;
                position: relative;
                top: 50%;
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
                padding-left: 20px;
                padding-right: 20px;
            }
        }
        .chart{
            img {
                position: absolute;
                top: 86%;
                left: 50%;
                transform: translate(-50%,-50%);

            }
        }

        ////////////////////////////////////////////////////////////////////////////////////

        .second_text{
            position: absolute;
            top: 100%;
            width: 375px;
            height: auto;
            background-color: #2A2E43;
            //background-color: crimson; //dbg
            hr{
                margin-top: 20px;
                border-width: 1px 0px 0px 0px;
                border-style: solid;
                border-color: #cdcdcd;
                margin-right: 20px;
                margin-left: 20px;
            }
            .phone_g{
                margin-top: 30px;
                margin-bottom: 30px;
                display: flex;
                position: relative;
                left: 100%;
                transform: translateX(-80%);
                p{
                    margin-left: 20px;
                    color: #A9A9A9;
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

        }
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
    top: 33%;
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
