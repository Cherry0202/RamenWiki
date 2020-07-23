<template>
  <div class="mypage">
    <div class="header">
      <h1>ここには画像が入ります</h1>  
    </div>
    <div id="nav">
      <ul>
        <li
          :class="{
            'tab': tab === 1,
            'tab-no': tab != 1
            }"
          @click="tab = 1"
        >ユーザ情報</li>
        <li
          :class="{
            'tab': tab === 2,
            'tab-no': tab != 2
            }"
          @click="tab = 2"
        >画像投稿</li>
        <li
          :class="{
            'tab': tab === 3,
            'tab-no': tab != 3
            }"
          @click="tab = 3"
        >レビュー</li>
      </ul>
    </div>
    <div class="content">
      <h1>ここに中身が表記されます</h1>
    </div>

  </div>  
</template>

<script>
export default {
  data() {
    return {
      tab : 1
    }
  }
}
</script>

<style>

  .mypage {
    background-color: #2A2E43;
    color: white;
  }

  .header {
    width: 100%;
    height: 30%;
    background-color: red;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #nav ul {
    list-style: none;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    height: 5%;
  }

  #nav ul li {
    /* background-color: #353A50; */
    font-size: 28px;
    width: calc(100%/3);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
  }

  .content {
    height: 65%;
  }

  .tab {
    background-color: #3ACCE1;
  }

  .tab-no {
    background-color: #353A50;
  }

</style>