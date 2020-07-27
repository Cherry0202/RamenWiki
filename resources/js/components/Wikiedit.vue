<template>

    <div class="main3">
        <form method="post" action="#">

            <div class="main_photo">
                <img alt="photo" src="../Ozawa_files/Sample_ramenshot.jpg">
                <div class="grad"></div>
                <p class="name">らーめん江畑</p>
                <p class="yasi">⬅</p>
            </div>
            <div class="main_lines">
                <img alt="line" src="../Ozawa_files/ColorLine.png">
                <div class="background"></div>
            </div>
        
            <div class="formmmm">
                    <p class="mmmmmm">　　店舗詳細編集画面　　</p>
                    <textarea class="textarea1" name="edit_wiki" rows="8" cols="40" placeholder="編集内容を記述してください..."></textarea><br>
                    <input class="submitbtn" type="submit" value="送信">
                
            </div>



    
        </form>
    </div> 
    
</template>

<script>
</script>



<!--- SCSS ----------------------------------------------------------------------------------------------------------->
<style scoped lang="scss">
.main3{
    width: 375px;
    height: 812px;
    padding-top: 1px;
    background-color: #2A2E43;
    display: flex;
    flex-direction: column;
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
    .main_lines{
        width: 375px;
        height: auto;
        z-index: 13;
        position: absolute;
        top: 32%;
        img{
            width: 100%;
        }
        .background{
            width: 100%;
            height: 40px;
            background-color: #2a2e43;
        }
    }
    .formmmm{
        margin-top: 380px;
        z-index: 20;
        width: 375px;
        height: 400px;
        display: grid;
        justify-items:center;
        //background-color: blue; //dbg
        .mmmmmm{ 
            position: absolute;
            top: 35%;
            left: 50%;
            z-index: 40;
            transform: translateX(-50%);
            font-family: flex;
            font-size: 20px;
            color: #fff;
            white-space: nowrap
        }
        textarea{
            width: 90%;
            resize: none;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.6);
            border-radius: 2px;
            color: #fff;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
        }
    }




}

</style>


<!--- CSS ----------------------------------------------------------------------------------------------------------->

<style scoped lang="css">

.mmmmmm {
  position: relative;
  padding: 0.25em 1em;
  border-top: solid 1px #fff;
  border-bottom: solid 1px #fff;
}
.mmmmmm:before, .mmmmmm:after {
  content: '';
  position: absolute;
  top: -7px;
  width: 1px;
  height: -webkit-calc(100% + 14px);
  height: calc(100% + 14px);
  background-color: #fff;
}
.mmmmmm:before {
  left: 7px;
}
.mmmmmm:after {
  right: 7px;
}
.textarea1::placeholder{
    color: rgba(255,255,255,0.6);
}

.submitbtn{
    position: absolute;
    width: 250px;
    left: 50%;
    top: 88%;
    transform: translateX(-50%);
    background: #fff;
    border: 1px solid #fff;
    cursor: pointer;
    border-radius: 2px;
    color: #a18d6c;
    font-family: 'Exo', sans-serif;
    font-size: 14px;
    font-weight: 400;
    z-index: 70;
}
.submitbtn:hover{
    opacity: 0.8;
}


</style>