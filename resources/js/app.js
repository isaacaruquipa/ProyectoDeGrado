require('./bootstrap');
window.Vue = require('vue');

Vue.component('dashboard', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});