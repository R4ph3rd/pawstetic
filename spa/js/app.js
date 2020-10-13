const button = import('./components/button.js');

Vue.component('v-button', button);

const app = new Vue({
    el: '#app',
    data:{
        message: 'Hello world'
    }
})