<template>
    
    <div class="main2">
        <div class="box_01">
            <p id="midashi_01"><b>RamenWikiのアカウント削除</b></p>
        </div>

        <div class="box_02">
            <p>Ramen Wikiのアカウントの削除を行います。</p>
            <p>この作業を行うと以下のページが削除されます。</p>
            <h2 id="midashi_02">・ユーザ情報のすべて</h2>
            <p>尚、この削除処理が完了しますと上記の</p>
            <p><span id=span>データの復旧が出来ません</span>のでご注意ください。</p>

            <p>-----------------------------------------------</p>

            <p>退会理由をお選びください。【複数選択可】</p>
            <form action="" method="post">
                <p><input type="checkbox" name="" value="" >サイトが使いづらいため</p>
                <p><input type="checkbox" name="" value="">サービスに不満があるため</p>
                <p><input type="checkbox" name="" value="">アカウント重複登録のため</p>
                <p><input type="checkbox" name="" value="">その他</p>
                <p><textarea name="" rows="7" cols="48"></textarea></p>
                <br>
                <input type="button" class="button1" value="退会しない">
                <input type="button" class="button2" value="退会する">
                </form>
        </div>
        
    </div>

</template>

<script>
</script>



<!--- CSS ----------------------------------------------------------------------------------------------------------->

<style scoped lang="css">

.main2{
    width: 375px;
    height: 812px;
    padding-top: 1px;
    background-color: #2A2E43;
}

.box_01{
    background-color: #EDF0F5;
    margin: 20px 13px 20px 13px;
    padding:  10px 8px 10px 8px;
    border-radius: 10px;/*隗偵�荳ｸ縺ｿ*/
}

.box_02{
    background-color: #EDF0F5;
    margin: 20px 13px 20px 13px;
    padding:  10px 8px 10px 8px;
    position: relative;
    min-height: 630px;
    border-radius: 10px;/*隗偵�荳ｸ縺ｿ*/

}

#midashi_01{
    font-family: 'M PLUS Rounded 1c', sans-serif;
    font-size: 23px;
}

#midashi_02{
    color: red;
}

#span{
    color: red;
}

.button1{
    position: absolute; left: 80px; bottom: 20px;
    background-color: #393838;
    color: white;
    padding: 5px;
}

.button2{
    position: absolute; right: 80px; bottom: 20px;
    background-color: #393838;
    color: white;
    padding: 5px;
}



p{
    font-size: 15px;
    font-family: 'M PLUS Rounded 1c', sans-serif;
}

textarea{
    width: 100%;
    display: flex;
    align-items: center;
    resize: none;
}
</style>