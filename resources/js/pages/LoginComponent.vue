<template>
    <!-- 全体 -->
    <div class="wrap">
        <!-- メイン画面 -->
        <div class="mainbox">
            <div class="topbox"></div>
            <!-- ログイン会員登録切替タブ -->
            <div class="tab_a">
                <span class="text">SIGN IN</span>
                <div class="box1"></div>
                <div class="box2"></div>
                <div class="box3"></div>
                <div class="box4"></div>
            </div>
<!--            <a href="/register" class="tab_b">SIGN UP</a>-->
             <router-link to="/register" class="tab_b">SIGN UP</router-link>

            <!-- フォーム部分 -->
            <div class="bottom_box">
                <a href="" class="return">︎⬅︎</a>
                <form>
                    <input
                        v-model="user.email"
                        type="email"
                        class="email"
                        placeholder="Email"
                    /><br />
                    <input
                        v-model="user.password"
                        type="password"
                        class="password"
                        placeholder="Password"
                    /><br />
                    <a href="" class="link_text">パスワードを忘れた方へ</a
                    ><br />
<!--                    <input type="submit" value="CONTINUE" class="button" />-->
                    <button class="button" v-on:click="check">
                        <router-link :to="{ name: 'search-view2' }">
                        CONTINUE
                        </router-link>
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return{
            user:{
                email: null,
                password: null
            }
        }
    },
    methods: {
        check() {
            console.log(this.user.email);
            console.log(this.user.password);
        }
    }
};
</script>

<style scoped lang="scss">
/* 全体 */
a {
    text-decoration: none;
}
.wrap {
    margin: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* メイン画面 */
.mainbox {
    width: 100%;
    height: 100%;
    margin-top: 1%;
    border: solid 1px #707070;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.topbox {
    width: 100%;
    height: 12%;
}

/* ログイン会員登録切替タブ */
.tab_a {
    padding-top: 4%;
    width: 49.7%;
    height: 4%;
    border: solid 1.5px #707070;
    margin-top: -10%;
    border-bottom: transparent;
    border-left: transparent;
    border-right: transparent;
    text-decoration: none;
    display: flex;
    flex-wrap: wrap;
    font-size: 2em;
}
.tab_b {
    padding-top: 4%;
    width: 49.9%;
    height: 4%;
    border: solid 1.5px #707070;
    margin-top: -10%;
    border-right: transparent;
    border-bottom: transparent;
    text-decoration: none;
    text-align: center;
    color: gray;
    font-size: 2em;
    font-family: "Gibson";
}
.tab_b:hover {
    opacity: 0.5;
}
.text {
    margin-left: 35%;
    font-family: "Gibson";
}

/* グラデーションライン */
.box1 {
    width: 25%;
    height: 20%;
    background-color: #665eff;
    margin-left: -61%;
    margin-top: 15%;
}
.box2 {
    width: 25%;
    height: 20%;
    background-color: #5773ff;
    margin-top: 15%;
}
.box3 {
    width: 25%;
    height: 20%;
    background-color: #3497fd;
    margin-top: 15%;
}
.box4 {
    width: 25%;
    height: 20%;
    background-color: #3acce1;
    margin-top: 15%;
}

/* 背景画像 */
.bottom_box {
    width: 100%;
    height: 87%;
    background-image: url("../components/back_image.png");
    background-size: 101%;
    display: flex;
    justify-content: center;
}

/* フォーム部分 */
form {
    width: 100%;
}
.return {
    width: 10%;
    height: 8%;
    font-size: 4em;
    color: white;
    text-decoration: none;
    margin-top: 7%;
    margin-left: 5%;
}
.email {
    width: 80%;
    height: 5.8%;
    border-radius: 20px;
    border: none;
    box-shadow: 2px 2px 4px grey;
    margin-top: 40%;
    margin-left: 3%;
    outline: none;
    font-size: 2.5em;
    padding-left: 36px;
}
.password {
    width: 80%;
    height: 5.8%;
    margin-top: 20%;
    margin-bottom: 25%;
    margin-left: 3%;
    border-radius: 20px;
    border: none;
    box-shadow: 2px 2px 4px gray;
    outline: none;
    font-size: 2.5em;
    padding-left: 36px;
}
::placeholder {
    font-family: "Gibson";
    padding-left: 4%;
}
.link_text {
    margin-left: 22%;
    font-family: "Gibson";
    font-size: 30px;
    text-decoration: none;
    color: gray;
    width: 100%;
    height: 100%;
}
.link_text:hover {
    color: #665eff;
}
.button {
    width: 80%;
    height: 5%;
    margin-top: 20%;
    margin-left: 3%;
    background-color: #3acce1;
    border: none;
    color: white;
    border-radius: 12px;
    box-shadow: 2px 2px 4px gray;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    outline: none;
    font-size: 2em;
    a {
        text-decoration: none;
        color: #FFFFFF;
    }
}
.button:hover {
    background-color: #5773ff;
}
</style>
