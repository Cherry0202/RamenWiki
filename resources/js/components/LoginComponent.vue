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
            <div class="tab_b">SIGN UP</div>

            <!-- フォーム部分 -->
            <div class="bottom_box">
                <form action="" method="post">
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
                    <a href="" class="link_text">パスワードを忘れた方へ</a
                    ><br />
                    <input type="submit" value="CONTINUE" class="button" />
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        console.log("login-component");
    }
};
</script>

<style scoped lang="scss">
/* 全体 */
.wrap {
    margin: 0;
    width: 100vw;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* メイン画面 */
.mainbox {
    width: 375px;
    height: 812px;
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
    display: flex;
    flex-wrap: wrap;
}
.tab_b {
    padding-top: 4%;
    width: 49.9%;
    height: 4%;
    border: solid 1.5px #707070;
    margin-top: -10%;
    border-right: transparent;
    border-bottom: transparent;
    text-align: center;
    color: gray;
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
    height: 15%;
    background-color: #665eff;
    margin-left: -65%;
    margin-top: 15%;
}
.box2 {
    width: 25%;
    height: 15%;
    background-color: #5773ff;
    margin-top: 15%;
}
.box3 {
    width: 25%;
    height: 15%;
    background-color: #3497fd;
    margin-top: 15%;
}
.box4 {
    width: 25.4%;
    height: 15%;
    background-color: #3acce1;
    margin-top: 15%;
}

/* 背景画像 */
.bottom_box {
    width: 375px;
    height: 705px;
    background-image: url("back_image.png");
    background-size: 101%;
    display: flex;
    justify-content: center;
}
/* フォーム部分 */
.email {
    width: 327px;
    height: 52px;
    border-radius: 12px;
    border: none;
    box-shadow: 2px 2px 4px gray;
    margin-top: 40%;
    outline: none;
}
.password {
    width: 327px;
    height: 52px;
    margin-top: 15%;
    margin-bottom: 15%;
    border-radius: 12px;
    border: none;
    box-shadow: 2px 2px 4px gray;
    outline: none;
}
::placeholder {
    font-family: "Gibson";
    padding-left: 4%;
}
.link_text {
    margin-left: 28%;
    font-family: "Gibson";
    font-size: 12px;
    text-decoration: none;
    color: gray;
}
.link_text:hover {
    color: #665eff;
}
.button {
    width: 327px;
    height: 52px;
    margin-top: 15%;
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
}
.button:hover {
    background-color: #5773ff;
}
</style>
