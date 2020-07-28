<template>
    <div class="searcher">
        <!-- <form class="search-container">
        <label>
            <input type="text" v-model="keyword" id="search-bar" placeholder="Search...">
        </label>
        </form>
        <button v-on:click="postKeyword"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></button> -->
        <form onsubmit="return goSearch()" class="sample2Area">
            <input type="text" placeholder="Search..." class="sample2Text">
        </form>
    </div>
</template>

<script>
    export default {
        name: "FormComponent",
        data() {
            return {
                // keyword: '',
                //lists: []
            }
        },
        methods: {
            // postKeyword(){
            //     axios.post('/search',this.keyword)
            //     .then( response => {
            //         console.log(response.data);
            //         this.lists = response.data
            //         this.$emit('postLists',this.lists)
            //     })
            // }
        }
    }
</script>

 <style lang="scss" scoped>
//     .searcher{
//         background-color: #339b4d;
//         height: 60px;
//         .search-container{
//             width: 260px;
//             display: block;
//             padding-left: 15px;
//             padding-top: 23px;
//             margin: 0 auto;
//         }

//         input#search-bar{
//             margin: 0 auto;
//             width: 100%;
//             height: 35px;
//             font-size: 1rem;
//             border: 1px solid #D0CFCE;
//             outline: none;
//             &:focus{
//                 border: 1px solid #008ABF;
//                 transition: 0.35s ease;
//                 color: #008ABF;
//                 &::-webkit-input-placeholder{
//                     transition: opacity 0.45s ease;
//                     opacity: 0;
//                 }
//             }
//         }
//         .search-icon{
//             position: relative;
//             float: right;
//             width: 50px;
//             height: 50px;
//             top: -43px;
//             right: -5px;
//         }
//     }
    .sample2Text {
        width : 210px;/* inputの幅*/
        height: 30px;/* inputの高さ*/
        background-color   : #fff; /* 背景色 */
        margin             : 0 auto;/* サンプルは中央寄せ  */
        border             : 1px solid #666;/*枠線　幅,実践,色*/
        border-radius      : 6px; /* 角丸 */
        color              : #555;/* 文字色 */
        font-size          : 16px;/* フォントサイズ */
        letter-spacing     : 0.1em;/* 文字間隔 */
        font-weight        : bold;/* 太字 */
        outline            : 0; /* 入力薄枠を非表示 */
        box-shadow: 2px 2px 4px gray;
    }
 
        /* === テキスト入力欄にフォーカスか来たとき ================== */
    .sample2Text:focus {
        background-color     : #cfe7ff;        /* フォーカス時背景色  */
    }
 
        /* === IEの入力エリア右側×消し ============================== */
    .sample2Text::-ms-clear {
        display        : none;                 /* ×を消す            */
    }
</style>
<!--    TODO: buttonなしで送信 -->
<!--    TODO: listsをprops-->
<!-- TODO:scss -->
