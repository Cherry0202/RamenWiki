require('./bootstrap');

window.Vue = require('vue');

/* ここに作ったコンポーネントを記載する */
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sample-component', require('./components/SampleComponent.vue').default);
Vue.component('wiki-page', require('./components/WikiPage.vue').default);
Vue.component('wiki-edit', require('./components/Wikiedit.vue').default);
Vue.component('mypage-passchange', require('./components/Mypage_Passchange.vue').default);
Vue.component('ai-page', require('./components/AIPage.vue').default);
Vue.component('goodbye-page', require('./components/Goodbye.vue').default);
Vue.component('goodbyebye-page', require('./components/Goodbye_bye.vue').default);

const app = new Vue({
    el: '#app'
});
