require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import App from './components/App.vue';
import ShowCouponDeatilsPage from "./components/ShowCouponDeatilsPage.vue";
import ShowCouponsPage from "./components/ShowCouponsPage";
//import App from
Vue.use(VueRouter);
Vue.use(Vuex);

const router = new VueRouter({
     mode: 'history',
    routes: [
        {
            path: '/api',
            name: 'home',
            component: ShowCouponsPage
        },
        // {
        //     path: '/',
        //     name: 'showcoupons',
        //     component: Welcome
        // },

        {
            path: '/api/showcoupondetails/:c_id',
            name: 'showcoupondetail',
            component: ShowCouponDeatilsPage
        }
    ],
});

//Vue.component('Welcome', require('./components/Welcome.vue') )

const app = new Vue({
    el: '#app',
    router,
    components: {
        App
    },

    // data:{
    //     results:[]
    // },
    //
    // mounted(){
    //     axios.get(url).then(response => {
    //         this.results = response.data
    //     })
    // }
});

console.log('App: ', app);


