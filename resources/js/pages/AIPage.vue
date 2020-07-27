<template>
    <div class="wrap">
        <div class="grad"></div>
        <div class="Midashi">
            <div class="center">
                <img class="ai" alt="man" src="../Ozawa_files/ai_marker.png">
                <p>AIのおすすめ</p>
            </div>
        </div>

        <!--
        <img class="line" alt="line" src="../Ozawa_files/ColorLine.png">
        -->

        <div class="Sen">
            <p class="title-border">あなたが今まで行ったことのない<br>素敵なラーメン店をご紹介します。</p>
        </div>

        <div class="OsusumeRamen1">
            <div class="white_text1">
                <div class="photoimage1">
                    <!-- おすすめ店舗のラーメン画像 -->
                    <img class="imagecovershot" src="../Ozawa_files/Sample_ramenshot.jpg">
                </div>
                <!-- おすすめ店舗の文章 -->
                <div class="yayaya1">
                    <div class="topRamen_name">
                        <p>
                            江畑の一杯
                        </p>
                       <div class="topRamen_text">
                        <p>
                            冷やし豆乳担々麺が人気。<br>
                            ごまの風味と豆乳タレ、<br>
                            ピリ辛の肉味噌が絶妙に<br>
                            マッチ。
                        </p>
                       </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="OsusumeRamen2">
            <div class="white_text2">
                <div class="photoimage2">
                    <!-- おすすめ店舗のラーメン画像 -->
                    <img class="imagecovershot" src="../Ozawa_files/Sample_ramenshot.jpg">
                </div>  
                <!-- おすすめ店舗の文章 -->  
                <div class="yayaya2">
                    <div class="topRamen_name">
                        <p>
                            江畑の一杯
                        </p>
                        <div class="topRamen_text">
                            <p>
                                淡麗塩そばが一番人気。<br>
                                さっぱりとしつつコクが<br>
                                有り、何度食べても飽き<br>
                                が来ない味。
                            </p>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        
        <p class="under_sentence">
            あなたの趣味嗜好に合わせて、AIのおすすめ店舗も増加していきます。
        </p>

    </div>
</template>

<script>
</script>

<!--- SCSS ----------------------------------------------------------------------------------------------------------->
<style scoped lang="scss">
    .wrap {
        width: 375px;
        min-height: 812px;
        max-height: auto;
        display: flex;
        flex-direction: column;
        background-color: #D5D7DB;
        justify-content: center;
        align-items: center;
        position: relative;
        .grad{
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 375px;
                height: 300px;
                background: -moz-linear-gradient(top, #FFF, transparent);
                background: -webkit-linear-gradient(top, #FFF, transparent);
                background: linear-gradient(to bottom, #FFF, transparent);
                z-index: 10;
            }
        .Midashi{
            z-index: 11;
            display: flex;
            width: 100%;
            height: 100px;
            position: absolute;
            top: 3%;
            //border:solid 1px #ccc; //dbg
            .center{
                display: flex;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                p{
                    font-family: 'MyFont3';
                    font-size: 30px;
                    white-space: nowrap;
                    margin-left: 20px;
                    position: relative;
                    top: 10%;
                    color: #454F63;
                }
            }
        }
        /*
        .line{
                width: 60%;
                position: absolute;
                right: 1%;
                top: 18.5%;
                z-index: 10;
        }
        */
        .Sen{
            width: 100%;
            position: absolute;
            top: 17%;
            left: 0%;
            //background-color: red; //dbg
        
        }
        
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////  CSSにも記述あり

        .OsusumeRamen1{
            margin-top: 120px;
            width: 100%;
            height: 180px;
            //background-color: cyan; //dbg
            display: flex;
            justify-content: flex-end;
        }
        .OsusumeRamen2{
            margin-top: 40px;
            width: 100%;
            height: 180px;
            //background-color: red; //dbg
            display: flex;
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////  FIN

        .under_sentence{
           font-family: 'MyFont2'; 
           font-size: 10px;
           white-space: nowrap;
           position: relative;
           //margin-top: 100px;
           /////////////////////////////
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50%,-50%);
           top: 94%;


        }
    }

</style>



<!--- CSS ----------------------------------------------------------------------------------------------------------->

<style scoped lang="css">
    @font-face {
        font-family: 'MyFont2';
        src: url(../Ozawa_files/NotoSerifJP-Medium.otf);
    }
    @font-face {
        font-family: 'MyFont3';
        src: url(../Ozawa_files/MPLUSRounded1c-Medium.ttf);
    }
    @font-face {
        font-family: 'Flop';
        src: url(../Ozawa_files/FlopDesignFONT.otf);
    }
    .title-border {
        display: flex;
        align-items: center;
        font-family: 'MyFont2';
    }
    .title-border:before, .title-border:after {
        border-top: 1px solid;
        content: "";
        flex-grow: 1;
    }
    .title-border:before {
        margin-right: 1rem;
    }
    .title-border:after {
        margin-left: 1rem;
    }

    /***********************************************************/

    .white_text1 , .white_text2{
        width: 70%;
        height: 100%;
        background-color: white;
        text-align: center;
        border-radius: 15px;
        box-shadow: 
            0 8px 10px 1px rgba(0,0,0,0.14),
            0 3px 14px 2px rgba(0,0,0,0.12),
            0 5px 5px -3px rgba(0,0,0,0.2)
        ;

    }
    .photoimage1 , .photoimage2{
        width: 120px;
        height: 120px;
        /*
        background-color: darkblue; 
        */
        position: relative;
        border-radius: 15px;
        justify-content: center;
        object-fit: cover;
        align-items: center;
        display: flex;
        flex-direction: column;
        box-shadow: 
                0 8px 10px 1px rgba(0,0,0,0.14),
                0 3px 14px 2px rgba(0,0,0,0.12),
                0 5px 5px -3px rgba(0,0,0,0.2)
            ;
    }
    .white_text1{
        margin-right: 20px;
    }
    .white_text2{
        margin-left: 20px;
    }
    .photoimage1{
        left: -25%;
        top: 17%;
    }
    .photoimage2{
        right: -78.5%;
        top: 17%;
    }

    .imagecovershot{
        width: 140px;
        height: 140px;
        object-fit: cover; 
        border-radius: 15px;
    }


    /***********************************************************/
    .yayaya1, .yayaya2{
        width: 170px;
        height: 155px;
        position: relative;
        top: -60%;
        font-family: Flop;
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: flex-start;
        align-items: flex-start;
    
    }
    .yayaya1{
        left: 29.5%;
    }
    .yayaya2{
        left: 5%;
    }
    .topRamen_name{
        width: 100%;
        height: 55px;
        border:solid 1px rgba(204, 204, 204, 0);
        box-sizing: border-box;
    }
    .topRamen_name p{
        font-family: MyFont2;
        white-space: nowrap;
        font-size: 18px;
        color: #454F63;
        margin-top: 20px;
        margin-bottom: 0;
        text-align: left;
    }
    .topRamen_text{
        width: 100%;
        height: 100px;
        box-sizing: border-box;
        border:solid 1px rgba(204, 204, 204, 0);
        text-align: center;
    }
    .topRamen_text p{
        font-family: Flop;
        white-space: nowrap;
        font-size: 15px;
        color: #78849E;
        text-align: left;
        
    }


</style>