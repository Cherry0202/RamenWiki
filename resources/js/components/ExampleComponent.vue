<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
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
        width: 70vw;
        height: 70vh;
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
            background-color: #5b8bd0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;

        }
    }
</style>
