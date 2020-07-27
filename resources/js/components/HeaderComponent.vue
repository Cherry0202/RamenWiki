<template>
    <div class="header">
            TEST
            <img :src="'/images/header.jpg'">
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
    .header {

    }
</style>
