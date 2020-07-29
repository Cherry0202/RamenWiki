<template>
  <div class="main">
    <div class="box">
      <h3>パスワード変更</h3>
      <hr color="#707070">
      <form action="">
        <div class="passwordline">
          <p>旧パスワード：</p><input type="password" v-bind:value="user.password"><br>
        </div>
        <div class="passwordline">
          <p>新パスワード：</p><input type="password"><br>
        </div>
        <div class="passwordline">
          <p>確認　　　　：</p><input type="password"><br>
        </div>
          <div class="small_wrapper"><p id="small">入力し、Nextボタンを押してください…</p></div>
          <div class="linelineline"><hr id="line" width="150" color="#707070"></div>
          <input type="button" class="button1" value="Cancel">
          <input type="submit" class="button2" value="Next">
      </form>
    </div>
  </div>
</template>

<script>
export default {
    data(){
        return {
            user:{
                id: 1,
                name: "hoge",
                password: "hogehoge",
                email: "hoge@hoge.com"
            }
        }
    }
}
</script>

<style scoped lang="css">
    *{
        margin:0;
        padding:0;
    }
    button{
        background-color: transparent;
        border: none;
        cursor: pointer;
        outline: none;
        padding: 0;
        appearance: none;
    }
    .wrap {
        width: 100vw;
        height: 100vh;
    }
    .box{
        background-color: #353A50;
        margin: 20px 20px 20px 20px;
        padding: 10px 8px 10px 8px;
        border-radius: 50px;
        text-align: center;
    }

</style>
