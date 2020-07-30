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
      photos: [
          {"url":"https://cdn.discordapp.com/attachments/723391445356249108/738234242097610822/Sample_ramenshot.jpg"},
          {"url":"https://cdn.discordapp.com/attachments/735335073716502718/737851328050495555/review.jpeg"},
          {"url":"https://cdn.discordapp.com/attachments/735335073716502718/737851386787528746/review4.jpeg"},
          {"url":"https://cdn.discordapp.com/attachments/735335073716502718/737851359969280000/review2.jpeg"},
          {"url":"https://cdn.discordapp.com/attachments/735335073716502718/737851373063766036/review3.jpeg"},
          {"url":"https://cdn.discordapp.com/attachments/735335073716502718/737851328050495555/review.jpeg"},
      ],
      noPhotoSrc: './images/aisatsu_kodomo_boy.png'
    }
  }

}
</script>

<style>

</style>
