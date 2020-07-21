<template>
    <div class="searcher">
        <form class="search-container">
        <label>
            <input type="text" v-model="keyword" id="search-bar" placeholder="Search...">
            <button v-on:click="postKeyword"><a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a></button>
        </label>
        </form>
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

<style lang="scss" scoped>
    .searcher{
        background-color: #339b4d;
        height: 60px;
        .search-container{
            width: 260px;
            display: block;
            padding-left: 15px;
            padding-top: 23px;
            margin: 0 auto;
        }

        input#search-bar{
            margin: 0 auto;
            width: 100%;
            height: 35px;
            font-size: 1rem;
            border: 1px solid #D0CFCE;
            outline: none;
            &:focus{
                border: 1px solid #008ABF;
                transition: 0.35s ease;
                color: #008ABF;
                &::-webkit-input-placeholder{
                    transition: opacity 0.45s ease;
                    opacity: 0;
                }
            }
        }
        .search-icon{
            position: relative;
            float: right;
            width: 50px;
            height: 50px;
            top: -43px;
            right: -5px;
        }
    }
</style>
<!--    TODO: buttonなしで送信 -->
<!--    TODO: listsをprops-->
<!-- TODO:scss -->
