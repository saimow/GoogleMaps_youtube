require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import Vue from 'vue'
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps,{
    load:{
        key: 'AIzaSyBqfzTDDmwl5x_qBclMGrseeZ301fbSWQ0',
    },
});

const app = new Vue({
    el: '#app',
    data(){
        return{
            lat:"",
            lng:"",
        }
    },
    methods:{

    }
});
