require('./bootstrap');

window.Vue = require('vue');

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('sample-component', require('./components/SampleComponent.vue').default);
//Vue.component('priceinput-component', require('./components/PriceinputComponent.vue').default);
Vue.component('shopname-component', require('./components/SampleComponent.vue').default);
Vue.component('websubtitle-component', require('./components/ShopNameComponent.vue').default);
Vue.component('header-component', require('./components/WebSubTitleComponent.vue').default);

Vue.component('test0-component', require('./components/Test0Component.vue').default);
Vue.component('test1-component', require('./components/Test1Component.vue').default);
Vue.component('test2-component', require('./components/Test2Component.vue').default);

const app = new Vue({
    el: '#app'
});
