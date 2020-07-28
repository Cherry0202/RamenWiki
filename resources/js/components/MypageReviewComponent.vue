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
      reviews: [],
      // reviews: [{"store_name":"ラーメン江畑","text":"hogehogehoge","url":"/storage/review/review.jpeg"},{"store_name":"ラーメン江畑","text":"hogehogehoge","url":"/storage/review/review2.jpeg"}],
      noReviewSrc: './images/aisatsu_kodomo_boy.png'
    }
  }

}
</script>

<style>

</style>