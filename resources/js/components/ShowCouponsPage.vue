<template>

    <div>
<!--        <Header></Header>-->
        <div>
            <p> <h1>List Of All Coupons</h1></p>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Coupon ID</th>
                <th>Coupon Name</th>
            </tr>
            </thead>
            <tbody>
            <tr v-if="results.length == 0">
                <td><h5> Coupon List is empty.</h5></td>
            </tr>
            <tr v-else v-for="coupon in results" v-bind:key="coupon.c_id">
                <td>{{ coupon.c_id}}</td>
                <td>{{ coupon.c_name }}</td>
                <td><router-link :to="{name:'showcoupondetail',params:{c_id :coupon.c_id}}" class="btn btn-primary">View</router-link></td>
                <td><router-link :to="{name: 'editCoupon', params: { c_id: coupon.c_id }}" class="btn btn-primary">Edit</router-link></td>
            </tr>
            </tbody>
        </table>

    </div>
</template>



<script>
    // import Header from '/Users/administrator/Documents/Promotion-System/resources/js/components/Header.vue'
    import axios from 'axios'
    export default {
        data(){
            return {
                data: null,

                results: [],
                coupon:{
                    c_id: '',
                    c_name: '',
                    c_percentDiscount: '',
                    c_validity: '',
                    c_maxDiscount: '',
                }
            }
        },

        mounted(){

            let url = "/showallcoupons";
            axios.get(url).then(response => {
                // console.log(response.data);
                this.results = response.data;
            })
        },

        components: {
            // Header
        }

        // beforeMount() {
        //     axios.get("http://127.0.0.1:8001/api/showcoupons").then(response => (this.data = response.data))
        //
        // },

        // methods:{
        //     fetchCoupons(url){
        //         let vm = this;
        //         url = url || 'http://127.0.0.1:8001/api/showcoupons';
        //         fetch(url)
        //         .then(res => {
        //             this.results = res.data;
        //
        //         })
        //     }
        //
        // }
    }
</script>

