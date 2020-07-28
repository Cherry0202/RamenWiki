<template>
  <div class="main">
    <div class="box">
      <h3>パスワード変更</h3>
      <hr color="#707070">
      <form action="">
        <div class="passwordline">
          <p>旧パスワード：</p><input type="password" id="password"><br>
        </div>
        <div class="passwordline">
          <p>新パスワード：</p><input type="password" id="password"><br>
        </div>
        <div class="passwordline">
          <p>確認　　　　：</p><input type="password" id="password"><br>
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

}
</script>

<style>

</style>