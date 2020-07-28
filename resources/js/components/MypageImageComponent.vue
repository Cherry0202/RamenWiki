<template>
  <div class="photolist">
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
      photos: [{"url":"/storage/review/review.jpeg"}, {"url":"./storage/review/review2.jpeg"}, {"url":"./storage/review/review3.jpeg"}, {"url":"./storage/review/review4.jpeg"}]
    }
  }

}
</script>

<style>

</style>