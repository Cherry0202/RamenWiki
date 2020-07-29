<template>
    <div class="searcher">
        <form class="search-container">
        <label>
            <input type="text" v-model="keyword" id="search-bar" placeholder="Search...">
        </label>
        </form>
        <button v-on:click="postKeyword"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></button>
    </div>
</template>

<script>
    export default {
        name: "FormComponent",
        data() {
            return {
                keyword: '',
                lists: []
            }
        },
        methods: {
            postKeyword(){
                axios.post('/search','')
                .then( response => {
                    console.log(response.data);
                    this.lists = response.data
                    this.$emit('postLists',this.lists)
                })
            }
        }
    }
</script>

<style lang="scss" scoped>
    .searcher{
        /*background-color: #339b4d;*/
        height: 60px;
        .search-container{
            width: 343px;
            display: block;
            padding-left: 15px;
            padding-top: 23px;
            margin-left: 198px;
        }

        input#search-bar{
            width: 200%;
            height: 100px;
            border: 1px solid #D0CFCE;
            outline: none;
            border-radius: 23px;
            font-size: 28px;
            padding-left: 31px;
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
            width: 120px;
            /* height: 50px; */
            top: -108px;
            right: -770px;
        }
    }
</style>
<!--    TODO: buttonなしで送信 -->
<!--    TODO: listsをprops-->
<!-- TODO:scss -->
