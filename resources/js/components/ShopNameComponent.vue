<template>
    <div class="shopname">
            <h2>{{ SHOP }}</h2>
    </div>
</template>

<script>
    export default {
        created() {
            console.log('ShopName')
        }
    }
</script>

<style scoped lang="scss">
    .shipname {
        color:white;
    }
</style>