<template>
    <div class="wrap">
            <div class="sample">
                Hogeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee!
            </div>
    </div>
</template>

<script>
    export default {
        created() {
            console.log('example-component')
        }
    }
</script>

<style scoped lang="scss">
    .wrap {
        width: 375pt;
        height: 100vh;
        border: dashed 2px #5b8bd0;
        border-radius: 5px;
        padding: 3px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        .sample{
            width: 80%;
            height: 80%;
            background-color: #c90707;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;

        }
    }
</style>
