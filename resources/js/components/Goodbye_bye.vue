<template>
    <div class="main">
        <div class="box_01">
            <h1>Ramen Wiki</h1>
            <h1>退会完了</h1>
        </div>

        <div class="box_02">
            <p>退会が完了しました。</p>
            <p>『Ramen Wiki』をご利用いただきありがとうございました。</p>
            <p>またのご利用をお待ちしております。</p>
            <div class="img_wrapper"><img src="../Ozawa_files/aisatsu_kodomo_boy.png" alt="お辞儀ボイ"　width="220" height="220"></div>
            <div class="button_wrapper"><button>Ramen Wiki ホームへ</button></div> 
        </div>
        
    </div>
</template>

<script>
</script>



<!--- CSS ----------------------------------------------------------------------------------------------------------->

<style scoped lang="css">
    .main{
    width: 375px;
    min-height: 812px;
    padding-top: 1px;
    background-color: #2A2E43;
}

.box_01{
    background-color: #EDF0F5;
    margin: 20px 13px 20px 13px;
    padding:  5px 3px 5px 3px;
    border-radius: 10px;
}

.box_02{
    background-color: #EDF0F5;
    margin: 20px 13px 20px 13px;
    padding:  10px 8px 10px 8px;
    position: relative;
    min-height: 600px;
    border-radius: 10px;/*隗偵�荳ｸ縺ｿ*/

}

h1{
    font-family: 'M PLUS Rounded 1c', sans-serif;
    margin: 4px;
    text-align: center;
}

#midashi_02{
    color: red;
}

#span{
    color: red;
}

.button_wrapper{
    text-align: center;
}

.img_wrapper{
    text-align: center;
    margin-bottom: 50px;
}

button{
    background-color: #393838;
    color: white;
    font-size: 17px;
    padding: 5px;
}


p{
    font-size: 23px;
    font-family: 'M PLUS Rounded 1c', sans-serif;
}




</style>