require('./bootstrap');

window.Vue = require('vue');

Vue.component('image-upload',require('./components/ImageUpload.vue').default);

const app = new Vue({
    el:'#app',
})
