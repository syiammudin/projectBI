/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('home', require('./home.vue').default);
Vue.component('surat_keluar', require('./page/surat_keluar.vue').default);
Vue.component('tamu', require('./page/tamu.vue').default);
Vue.component('atk', require('./page/atk.vue').default);
Vue.component('admin_atk', require('./page/admin_atk.vue').default);
Vue.component('kendaraan_dinas', require('./page/kendaraan_dinas.vue').default);


import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/en'
Vue.use(ElementUI, { locale });

const app = new Vue({
    el: '#app',
});
