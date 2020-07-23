<template>
    <div>
        <h2>{{ title }}</h2>
        <p>{{ text }}</p>
    </div>
</template>

<script>
export default {
    data(){
        return {
            title: "Body",
            text: "Have a good day!"
        }
    }
}
</script>

<style scoped>
div{
    border: 1px solid red
}
h2{
    color: red
}
p{
    color: red
}
</style>