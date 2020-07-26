require('./bootstrap');
require('./main')
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sample-component', require('./components/SampleComponent.vue').default);
Vue.component('searchview-component', require('./components/SearchView.vue').default);//検索画面（TOP）--topの分析チャート・店舗取得未完
Vue.component('humberger-menu-component', require('./components/Hamburger_Menu.vue').default);//ハンバーガーメニュー未ログイン
Vue.component('humberger-logged-component', require('./components/Hamburger_Loggedin.vue').default);//ハンバーガーメニュー（ログイン済み）


const app = new Vue({
    el: '#app',
    data: function() {
        return{
            ActiveBtn : false,
       }
    }
});
