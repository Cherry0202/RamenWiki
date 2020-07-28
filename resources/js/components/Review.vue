<template>
  <div class="reviewBox">
    <div class="titleBox">
      <h2>{{ item.store_name }}</h2>
      <div v-on:click="classChange">
        {{ icon }}
      </div>
      <div
        :class="{
          'no-content': check == false,
          'review-content': check == true
        }">
        <div class="textBox">
          <p>{{ item.text }}</p>
        </div>
        <hr>
        <div class="imageBox">
          <img
            :src="item.url"
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      required: true
    }
  },
  data() {
    return {
      icon : "▲",
      check : false
    }
  },
  methods: {
    classChange() {
      this.check = !this.check
      if(this.check) {
        this.icon = "▼"
      }else {
        this.icon = "▲"
      }
    }
  }
}
</script>

<style>

</style>