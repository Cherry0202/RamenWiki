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
            <div class="white_text">
            

            </div>
        </div>

        <div class="OsusumeRamen2">
            <div class="white_text">

            
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
        
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////

        .OsusumeRamen1{
            margin-top: 150px;
            width: 100%;
            height: 200px;
            background-color: cyan; //dbg
            display: flex;
            justify-content: flex-end;
            .white_text{
                width: 85%;
                height: 100%;
                background-color: white;
                text-align: right;
                border-radius: 15px;
            }
        }
        .OsusumeRamen2{
            margin-top: 40px;
            width: 100%;
            height: 200px;
            background-color: red; //dbg
            display: flex;
            justify-content: flex-end;
            .white_text{
                width: 85%;
                height: 100%;
                background-color: white;
                text-align: right;
                border-radius: 15px;
            }
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////

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
    .title-border {
    display: flex;
    align-items: center;
    font-family: 'MyFont2';
    }
    .title-border:before,
    .title-border:after {
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

</style>