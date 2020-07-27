require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sample-component', require('./components/SampleComponent.vue').default);
<<<<<<< HEAD
Vue.component('searchview-component', require('./components/SearchView.vue').default);//検索画面（TOP）--topの分析チャート・店舗取得未完
Vue.component('humberger-menu-component', require('./components/Hamburger_Menu.vue').default);//ハンバーガーメニュー未ログイン
Vue.component('humberger-logged-component', require('./components/Hamburger_Loggedin.vue').default);//ハンバーガーメニュー（ログイン済み）
=======
Vue.component('search-form-component', require('./components/SearchFormComponent').default);
Vue.component('menubar-not-login-component', require('./components/MenubarNotLogin').default);
Vue.component('search-view-component', require('./components/SearchView').default);
Vue.component('result-card-component', require('./components/ResultCardComponent').default);
>>>>>>> 2a705eea645021fdd4fd4ff437e3b41fd2084150


const app = new Vue({
    el: '#app',
    data: function() {
        return{
            ActiveBtn : false,
       }
    }
});
