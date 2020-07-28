require('./bootstrap');

window.Vue = require('vue');

<<<<<<< HEAD
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sample-component', require('./components/SampleComponent.vue').default);
Vue.component('searchview-component', require('./components/SearchView.vue').default);//検索画面（TOP）--topの分析チャート・店舗取得未完
=======
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('sample-component', require('./components/SampleComponent.vue').default);
// Vue.component('searchview-component', require('./components/SearchView.vue').default);//検索画面（TOP）--topの分析チャート・店舗取得未完
>>>>>>> e77cf927fbf483cf7fbf03eceacd08294f9f99f8
Vue.component('humberger-menu-component', require('./components/Hamburger_Menu.vue').default);//ハンバーガーメニュー未ログイン
Vue.component('humberger-logged-component', require('./components/Hamburger_Loggedin.vue').default);//ハンバーガーメニュー（ログイン済み）
Vue.component('search-form-component', require('./components/SearchFormComponent').default);
Vue.component('menubar-not-login-component', require('./components/MenubarNotLogin').default);
Vue.component('result-card-component', require('./components/ResultCardComponent').default);
//pages
Vue.component('search-view', require('./pages/SearchView').default);
Vue.component('store-detail', require('./pages/StoreDetail').default);
Vue.component('delete-account', require('./pages/DeleteAccount').default);
Vue.component('my-page', require('./pages/MyPage').default);
Vue.component('recommend-ramen', require('./pages/RecommendRamen').default);
Vue.component('review-detail', require('./pages/ReviewDetail').default);
Vue.component('review-list', require('./pages/ReviewList').default);
Vue.component('create-view', require('./pages/CreateReview').default);
<<<<<<< HEAD


=======
>>>>>>> e77cf927fbf483cf7fbf03eceacd08294f9f99f8

const app = new Vue({
    el: '#app',
    data: function() {
        return{
            ActiveBtn : false,
       }
    }
});
