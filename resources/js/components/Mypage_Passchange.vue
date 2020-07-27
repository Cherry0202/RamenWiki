<template>
    <div class="box">
        <h3>パスワード変更</h3>
        <!--
        <hr color="#707070">
        -->
        <form action="">
            <div class="centergirl">
                <p>旧パスワード：</p><input type="password" class="password"><br>
                <br>
                <p>新パスワード：</p><input type="password" class="password"><br>
                <p>確認　　　　：</p><input type="password" class="password"><br>
                <br>
                <br>
            </div>
            <div class="small_wrapper"><p id="small">入力し、Nextボタンを押してください…</p></div>
            <hr class="line" size="1" noshade>
            <div class="centerman">
                <input type="button" class="button1 btn" value="Cancel">
                <input type="submit" class="button2 btn" value="Next">
            </div>
        </form>
    </div>    
    
</template>

<script>
</script>



<!--- CSS ----------------------------------------------------------------------------------------------------------->
<style scoped lang="css">

/*
    .main{
        width: 375px;
        min-height: 812px;
        padding-top: 1px;
        background-color: #2A2E43;
    }
*/
    .box{
        font-family: flop;
        width: 330px;
        height: 250px;
        background-color: #353A50;
        /*
        margin: 20px 20px 20px 20px;
        */
        padding:  10px 8px 10px 8px;
        border-radius: 10px;
    }

    button{
        background-color: #393838;
        color: white;
        font-size: 17px;
        padding: 5px;
    }


    p{
        color: white;
        font-size: 15px;
        font-family: 'M PLUS Rounded 1c', sans-serif;
        display: inline;
        margin-left: 15px;

    }

    .small_wrapper{
        text-align: center;
    }

    #small{
        font-size: 5px;
        font-family: 'M PLUS Rounded 1c', sans-serif;
        text-align: center;
        display: inline;
        margin-left: 0px;
    }

    h3{
        font-family: flop;
        color: white;
        margin-left: 15px;
        margin-right: 15px;
        padding-bottom: 7px;
        border-bottom: double;
    }

    .button1{
        border: #2ABCD1;
        border-radius: 10px;
        background-color: rgb(42, 188, 209,0.25);
        color: white;
        padding: 5px 15px 5px 15px;
        margin-right: 5px;
        /*
        margin-left: 70px;
        */
    }
    .button2{
        border: #2ABCD1;
        border-radius: 10px;
        background-color: #2ABCD1;
        color: white;
        padding: 5px 15px 5px 15px;
        /*
        margin-left: 10px;
        */
    }

    .btn{
        width: 120px;
    }
    .btn:hover{
    opacity: 0.8;
}
    .centerman{
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
    }
    .centergirl{
        margin-left: 20px;
    }

    .line{
        margin: 0px 40px 10px 40px;
        text-align: center;
        margin-top: 2.5px;
    }

    .password{
        background-color: #353A50;
        border: 0 solid;
        border-bottom: 1px solid white;
        color: white;
}

</style>

