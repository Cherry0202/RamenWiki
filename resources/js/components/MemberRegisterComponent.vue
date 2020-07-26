<template>
    <!-- 全体 -->
    <div class="wrap">
        <!-- メイン画面 -->
        <div class="mainbox">
            <div class="topbox"></div>
            <!-- ログイン会員登録切替タブ -->
            <a href="/login" class="tab_a">SIGN IN</a>
            <!-- <router-link to="/login">SIGN IN</router-link> -->
            <div class="tab_b">
                <span class="text">SIGN UP</span>
                <div class="box1"></div>
                <div class="box2"></div>
                <div class="box3"></div>
                <div class="box4"></div>
            </div>
            <!-- フォーム部分 -->
            <div class="bottom_box">
                <a href="/login" class="return">︎︎⬅︎︎</a>
                <!-- <router-link to="/loginp" class="return">⬅︎</router-link> -->
                <form action="" method="post">
                    <input
                        type="email"
                        class="namebox"
                        placeholder="UserName"
                    /><br />
                    <input
                        type="email"
                        class="email"
                        placeholder="Email"
                    /><br />
                    <input
                        type="password"
                        class="password"
                        placeholder="Password"
                    /><br />
                    <input
                        type="password"
                        class="passwordplus"
                        placeholder="Confirm Password"
                    /><br />
                    <p class="link_text">
                        <label>
                            <input
                                type="checkbox"
                                class="check"
                            />利用規約に同意する<br />
                        </label>
                    </p>
                    <input type="submit" value="CONTINUE" class="button" />
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        console.log("member-register-component");
    }
};
</script>

<style scoped lang="scss">
/* 全体 */
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
.tab_b {
    padding-top: 4%;
    width: 49.7%;
    height: 4%;
    border: solid 1.5px #707070;
    margin-top: -10%;
    border-right: transparent;
    border-bottom: transparent;
    text-decoration: none;
    display: flex;
    flex-wrap: wrap;
    font-size: 2em;
}
.tab_a {
    padding-top: 4%;
    width: 49.9%;
    height: 4%;
    border: solid 1.5px #707070;
    margin-top: -10%;
    border-bottom: transparent;
    border-left: transparent;
    border-right: transparent;
    text-decoration: none;
    text-align: center;
    color: gray;
    font-family: "Gibson";
    font-size: 2em;
}
.tab_a:hover {
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
    margin-left: -59.9%;
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
    width: 25.4%;
    height: 20%;
    background-color: #3acce1;
    margin-top: 15%;
}

/* 背景画像 */
.bottom_box {
    width: 100%;
    height: 87%;
    background-image: url("back_image.png");
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
.namebox {
    width: 80%;
    height: 5.8%;
    border-radius: 20px;
    border: none;
    box-shadow: 2px 2px 4px gray;
    margin-top: 30%;
    margin-left: 3%;
    outline: none;
    font-size: 2.5em;
}
.email,
.password {
    width: 80%;
    height: 5.8%;
    margin-top: 13%;
    margin-left: 3%;
    border-radius: 20px;
    border: none;
    box-shadow: 2px 2px 4px gray;
    outline: none;
    font-size: 2.5em;
}
.passwordplus {
    width: 80%;
    height: 5.8%;
    margin-top: 13%;
    margin-bottom: 13%;
    margin-left: 3%;
    border-radius: 20px;
    border: none;
    box-shadow: 2px 2px 4px gray;
    outline: none;
    font-size: 2.5em;
}
::placeholder {
    font-family: "Gibson";
    padding-left: 4%;
}
.link_text {
    margin-left: 25%;
    font-family: "Gibson";
    font-size: 32px;
    color: gray;
}
.button {
    width: 80%;
    height: 5.5%;
    margin-top: 13%;
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
}
.check {
    vertical-align: middle;
    position: relative;
    top: -2px;
    transform: scale(2);
    right: 5%;
}
.button:hover {
    background-color: #5773ff;
}
</style>
