<template>
  <div class="reviewlist">
    <Review
        v-for="review in reviews"
        :key="review.id"
        :item="review"
    />  
    </div>
</template>

<script>
export default {
  data() {
    return {
      reviews: [{"store_name":"ラーメン江畑","text":"hogehogehoge","url":"/storage/review/review.jpeg"},{"store_name":"ラーメン江畑","text":"hogehogehoge","url":"/storage/review/review2.jpeg"}]
    }
  }

}
</script>

<style>

</style>