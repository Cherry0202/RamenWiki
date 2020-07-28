<template>
    <div class="reviewtext">
        <p style="white-space: pre-line;">{{ message }}</p>
    <br>
    <textarea v-model="message" placeholder="レビュー内容"></textarea>
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
    .reviewtext {
        color:black;
    }
</style>