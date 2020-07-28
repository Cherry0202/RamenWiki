<template>
    <div class="graphcomponent">
            TEST
            <img :src="'/images/hex.png'">
    </div>
</template>

<script>
    export default {
        created() {
            console.log('graph-component')
        }
    }
</script>

<style scoped lang="scss">
    .graphcomponent {

    }
</style>
