require('./bootstrap');

window.Vue = require('vue');

/* ここに作ったコンポーネントを記載する */
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sample-component', require('./components/SampleComponent.vue').default);
Vue.component('sample-component', require('./components/SampleComponent.vue').default);

const app = new Vue({
    el: '#app'
});
