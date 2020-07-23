<template>
    <div>
        <h1>{{ title }}</h1>
        <p>{{ text }}</p>
    </div>
</template>

<script>
export default {
    data(){
        return {
            title: "Header",
            text: "Hello Vue.js!"
        }
    }
}
</script>

<style scoped>
div{
    border: 1px solid blue
}
h1{
    color: blue
}
p{
    color:blue
}
</style>