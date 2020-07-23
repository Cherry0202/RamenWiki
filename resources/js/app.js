require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sample-component', require('./components/SampleComponent.vue').default);
Vue.component('search-form-component', require('./components/SearchFormComponent').default);
Vue.component('menubar-not-login-component', require('./components/MenubarNotLogin').default);
Vue.component('search-view-component', require('./components/SearchView').default);
Vue.component('result-card-component', require('./components/ResultCardComponent').default);


const app = new Vue({
    el: '#app'
});
