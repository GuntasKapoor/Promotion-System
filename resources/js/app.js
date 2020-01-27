require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import App from './components/App.vue';
import ShowCouponDeatilsPage from "./components/ShowCouponDeatilsPage.vue";
import ShowCouponsPage from "./components/ShowCouponsPage";
import CouponCreate from "./components/couponcreate";
import validateEntries from "./components/validateEntries";
import validateresult from "./components/validateresult";
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
        },

        {
            path: '/CouponCreate',
            name: 'couponcreate',
            component: CouponCreate
        },

        {
            path: '/validate',
            name: 'validate',
            component: validateEntries
        },


        {
            path: '/api/couponvalidate/result:valid:message:price',
            name: 'validateresult',
            component: validateresult
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


