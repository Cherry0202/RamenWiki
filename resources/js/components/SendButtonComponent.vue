<template>
    <div class="sendbutton">
        <form @submit="送信" action="/" method="POST">
            <button type="submit">送信</button>
        </form>
    </div>
</template>

<script>
    export default {
        created() {
            console.log('SendButtonComponent')
        }
    }
</script>

<style scoped lang="scss">
    .sendbutton {
        color:black;
    }
</style>