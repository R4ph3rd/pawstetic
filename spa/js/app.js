// import {default as button} from './components/button.js';
const button = import('./components/button.js');

Vue.component('v-button', () => import('./components/button.js'));

const app = new Vue({
    el: '#app',
    data:{
        message: 'Hello world'
    }
})