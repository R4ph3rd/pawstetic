Vue.component('v-button', () => import('./components/button.js'));
Vue.component('service-item', () => import('./components/serviceItem.js'));

const app = new Vue({
    el: '#app',
    data:{
        message: 'Hello world'
    }
})