<template>
    <div class="header">
            TEST
            <img :src="'/images/user.jpg'">
    </div>
</template>

<script>
    export default {
        created() {
            console.log('header-component')
        }
    }
</script>

<style scoped lang="scss">
  img {
    border-radius: 50%;
    width:  180px;
    height: 180px;
}
</style>