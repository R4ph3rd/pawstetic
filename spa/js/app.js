Vue.component('v-button', () => import('./components/button.js'));
Vue.component('service-item', () => import('./components/serviceItem.js'));
Vue.component('card-pet', () => import('./components/petCard.js'));

const app = new Vue({
    el: '#app',
    data:{
        message: 'Hello world'
    }
})