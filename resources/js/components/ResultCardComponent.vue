<template>
    <div v-if="results.length === 0" :class="{display:none}"></div>
    <div v-else class="card-wrapper">
        <div v-for="result in results" :key="index" class="card" >
            <h1>{{ result['store'].store_name }}</h1>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ResultCardComponent",
        props: {
            results: []
        }
    }
</script>

<style lang="scss" scoped>
    .card-wrapper {
        background-color: whitesmoke;
        width: 152px;
        height: 172px;
        .card {
            width: 100%;
            height: 100%;
            background-color: lightblue;
            border: solid black 3px;
            h1{
                font-size: 14px;
            }
        }
    }
</style>

<!--  TODO: photoref-->
<!-- TODO: card css-->
