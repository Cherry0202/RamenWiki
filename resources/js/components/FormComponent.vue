<template>
    <div>
    <input type="text" v-model="keyword" placeholder="Search...">
    <button v-on:click="postKeyword">post</button>
    </div>
</template>

<script>
    export default {
        name: "FormComponent",
        data() {
            return {
                keyword: '',
                lists: null
            }
        },
        methods: {
            postKeyword(){
                axios.post('/search',this.keyword)
                .then( response => {
                    console.log(response.data);
                    this.lists = response.data
                })
            }
        }
    }
</script>

<style scoped>

</style>
<!--    TODO: buttonなしで送信 -->
<!--    TODO: listsをprops-->
<!-- TODO:scss -->
