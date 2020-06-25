<template>
    <div class="wrap">
            <div class="card sample">
                <div class="card-header">Example Component</div>
                <div class="card_body">
                    I'm an example component.
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        mouted() {
            console.log('Component moundted.')
        }
    }
</script>

<style scoped lang="scss">
    .wrap {
        width: 100vw;
        height: 100vh;
        border: dashed 2px #5b8bd0;
        border-radius: 5px;
        padding: 3px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        .sample{
            width: 80vw;
            height: 80vh;
            background-color: #5b8bd0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;

        }
    }
</style>
