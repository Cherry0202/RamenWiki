require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sample-component', require('./components/SampleComponent.vue').default);
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


const app = new Vue({
    el: '#app'
});
