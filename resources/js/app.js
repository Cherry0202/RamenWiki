require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sample-component', require('./components/SampleComponent.vue').default);
Vue.component('search-form-component', require('./components/SearchFormComponent').default);
Vue.component('menubar-not-login-component', require('./components/MenubarNotLogin').default);
Vue.component('search-view-component', require('./components/SearchView').default);
Vue.component('result-card-component', require('./components/ResultCardComponent').default);
Vue.component('mypage', require('./pages/Mypage').default);
Vue.component('myimage', require('./components/MypageImageComponent').default)
Vue.component('Photo', require('./components/Photo').default)
Vue.component('myreview', require('./components/MypageReviewComponent').default)
Vue.component('Review', require('./components/Review').default)



const app = new Vue({
    el: '#app'
});
