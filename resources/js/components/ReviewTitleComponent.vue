<template>
    <div class="reviewtitle">
            <p>{{ レビュー本文 }}</p>
    </div>
</template>

<script>
    export default {
        created() {
            console.log('reviewtext')
        }
    }
</script>

<style scoped lang="scss">
    .reviewtitle {
        color:white;
    }
</style>