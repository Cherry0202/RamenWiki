<template>
    <div class="wrap">
        <div class="background-wrap">
            <div class="upper-wrap">
                <h2>←</h2>
                <h1>UserIcon</h1>
                <h2>未ログイン</h2>
            </div>
            <div class="under-wrap">
                <a href="#">Home</a>
                 <div class="button-div">
                    <button @click="logIn">ログイン</button>
                    <button @click="signUp">会員登録</button>
                 </div>
            </div>
        </div>
        <div class="side-space">
        </div>
    </div>
</template>

<script>

    export default {
      created() {
        console.log('menubar-notlogin-component')
      },
      data: () => ({ value: 'recent' }),
      methods: {
            logIn: function () {
                this.$router.push("#")
            },
            signUp: function () {
                this.$router.push("#")
            }
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
        .background-wrap{
            width: 80%;
            height: 80%;
            background-color: #5b8bd0;
            justify-content: center;
            align-items: center;
            color: white;
            .upper-wrap{
               background-color: #0000d5;
            }
            .under-wrap{
                background-color: #552233;
                .button-div{
                    background-color: #002211;
                }
            }
        }
        .side-space{
            background-color: #339b4d;
        }
    }
</style>
