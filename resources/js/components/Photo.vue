<template>
  <div class="imgBox">
    <img
      :src="item.url"
      >  
  </div>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      required: true
    }
  }
}
</script>

<style>

</style>