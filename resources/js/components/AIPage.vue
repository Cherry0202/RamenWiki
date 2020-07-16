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
        //display: flex;
        //flex-direction: column;
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
            top: 10%;
            //border:solid 1px #ccc; //dbg
            .center{
                display: flex;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                p{
                    font-size: 30px;
                    white-space: nowrap;
                    margin-left: 20px;
                    position: relative;
                    top: 10%;
                    color: #454F63;
                }
            }
        }
        .line{
                width: 60%;
                position: absolute;
                right: 1%;
                top: 18.5%;
                z-index: 10;
        }
        .Sen{
            width: 100%;
            position: absolute;
            top: 24%;
            left: 0%;
        } 
    }

</style>



<!--- CSS ----------------------------------------------------------------------------------------------------------->

<style scoped lang="css">
    .title-border {
    display: flex;
    align-items: center;
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