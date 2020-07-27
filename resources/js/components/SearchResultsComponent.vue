<template>
    <div class="serachresults">
        検索結果 : <span :class="serachresults">{{ number }}</span>
    </div>
</template>

<script>
    export default {
        created() {
            console.log('SearchResultsComponent')
        }
    }
</script>

<style scoped lang="scss">
    .serachresults {
        color:black;
    }
</style>