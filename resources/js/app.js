require('./bootstrap');
require('./main')
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sample-component', require('./components/SampleComponent.vue').default);
Vue.component('menubar-notlogin-component', require('./components/Menubar_NotLogin.vue').default);
Vue.component('searchview-component', require('./components/SearchView.vue').default);
Vue.component('humberger-menu-component', require('./components/Hamburger_Menu.vue').default);


const app = new Vue({
    el: '#app',
    data: function() {
        return{
            ActiveBtn : false,
       }
    }
});
