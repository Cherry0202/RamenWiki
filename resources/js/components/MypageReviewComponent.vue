<template>
  <div class="reviewlist">
    <div v-if="!reviews.length" class="no-review">
      <p>まだレビューを書いていません！！</p>
      <p>新しくレビューを作成して<br>みんなにお店のいいところを伝えよう！</p>
      <img :src="noReviewSrc" alt="">
    </div>
    <div v-else>
      <Review
        v-for="review in reviews"
        :key="review.id"
        :item="review"
      />
    </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      // reviews: [],
      reviews: [
          {"store_name":"すごい煮干ラーメン凪 新宿ゴールデン街店 本館","text":"とにかく！すごい！に・ぼ・し！！","url":"https://cdn.discordapp.com/attachments/735335073716502718/737851328050495555/review.jpeg"},
          {"store_name":"焼きあご塩らー麺たかはし 新宿本店","text":"焼きあごだしが効いたスープと麺が合わさるハーモニー","url":"https://cdn.discordapp.com/attachments/735335073716502718/737851386787528746/review4.jpeg"},
          {"store_name":" らぁ麺 はやし田 新宿本店","text":"焼きあごだしが効いたスープと麺が合わさるハーモニー","url":"https://cdn.discordapp.com/attachments/735335073716502718/737851386787528746/review4.jpeg"},
          {"store_name":" えびそば一幻 新宿店","text":"えびいいいいいいいいいい","url":"https://cdn.discordapp.com/attachments/735335073716502718/737851386787528746/review4.jpeg"}
      ],
      noReviewSrc: './images/aisatsu_kodomo_boy.png'
    }
  }

}
</script>

<style>

</style>
