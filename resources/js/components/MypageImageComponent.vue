<template>
  <div v-if="!photos.length" class="no-photo">
    <p>まだ写真を投稿していません！！</p>
    <p>新しく写真を投稿しよう！</p>
    <img :src="noPhotoSrc" alt="">
  </div>
  <div class="photolist" v-else>
    <Photo
        v-for="photo in photos"
        :key="photo.id"
        :item="photo"
    />
  </div>
</template>

<script>
export default {
  data() {
    return {
      // photos: [],
      photos: [{"url":"/storage/review/review.jpeg"}, {"url":"./storage/review/review2.jpeg"}, {"url":"./storage/review/review3.jpeg"}, {"url":"./storage/review/review4.jpeg"}],
      noPhotoSrc: './images/aisatsu_kodomo_boy.png'
    }
  }

}
</script>

<style>

</style>