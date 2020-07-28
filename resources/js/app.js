require("./bootstrap");

window.Vue = require("vue");

import VueRouter from 'vue-router'; // Vue Routerの読み込み
import Vue from 'vue'
// ルーティングの定義をインポートする
import router from './router'
import App from './components/App'
Vue.component('mypage', require('./pages/Mypage').default);
Vue.component('myimage', require('./components/MypageImageComponent').default)
Vue.component('Photo', require('./components/Photo').default)
Vue.component('myreview', require('./components/MypageReviewComponent').default)
Vue.component('Review', require('./components/Review').default)


Vue.use(VueRouter); // Vue.jsで、Vue Routerを使うように設定

/* ここに作ったコンポーネントを記載する */
Vue.component('wiki-page', require('./pages/WikiPage.vue').default);
Vue.component('wiki-edit', require('./pages/Wikiedit.vue').default);
Vue.component('mypage-passchange', require('./components/Mypage_Passchange.vue').default);
Vue.component('ai-page', require('./pages/AIPage.vue').default);
Vue.component('goodbye-page', require('./components/Goodbye.vue').default);
Vue.component('goodbyebye-page', require('./components/Goodbye_bye.vue').default);
Vue.component(
    "login-component",
    require("./pages/LoginComponent").default
);
Vue.component(
    "member-register-component",
    require("./pages/MemberRegisterComponent").default
);
Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component(
    "sample-component",
    require("./components/SampleComponent.vue").default
);
Vue.component(
    "search-form-component",
    require("./components/SearchFormComponent").default
);
Vue.component(
    "menubar-not-login-component",
    require("./components/MenubarNotLogin").default
);
Vue.component(
    "result-card-component",
    require("./components/ResultCardComponent").default
);
//pages
Vue.component("search-view", require("./pages/SearchView").default);
Vue.component("store-detail", require("./pages/StoreDetail").default);
Vue.component("delete-account", require("./pages/DeleteAccount").default);
Vue.component("my-page", require("./pages/MyPage").default);
Vue.component("recommend-ramen", require("./pages/RecommendRamen").default);
Vue.component("review-detail", require("./pages/ReviewDetail").default);
Vue.component("review-list", require("./pages/ReviewList").default);
Vue.component("create-view", require("./pages/CreateReview").default);
Vue.component('myuser', require('./components/MypageUserComponent').default);



// Vue.jsの実行
const app = new Vue({
    el: '#app',
    router,
    components: { App }, // ルートコンポーネントの使用を宣言する
    template: '<App />' // ルートコンポーネントを描画する
});
