<style>
    .div1
    {
        /*padding: 50px;*/
        color: #5769ff;
        /*margin-left: 500px;*/
        /*align-content: center;*/
    }

</style>

<template>
    <div>

    <div style="background:#ECECEC; padding:30px; ">
        <div style="color: red">
            <p> <h1 >Promotion System</h1></p>
        </div>
    </div>
    <div style="background:#c4eccf; padding:30px; ">
        <table class="table table-hover">
            <div class="div1" >

                <a href="/CouponCreate"><h4 >Create a Coupon</h4></a>
                <a href="/CouponUpdate"><h4>Update a Coupon</h4></a>
                <a href="/validate"><h4>Check for coupon validity</h4></a>
                <a href="/CouponList"><h4>Show Coupons</h4></a>

            </div>
<!--            <tbody>-->
<!--            <router-link to="/api/showcoupons" class="btn btn-primary">Edit</router-link>-->
<!--            <tr v-for="coupon in results" v-bind:key="coupon.c_id">-->
<!--                <td><router-link :to="{name: 'edit'}" class="btn btn-primary">Edit</router-link></td>-->
<!--                <td>{{ coupon.c_id}}</td>-->
<!--                <td>{{ coupon.c_name }}</td>-->
<!--                <td><router-link :to="{name: 'edit', params: { id: coupon.c_id }}" class="btn btn-primary">Edit</router-link></td>-->
<!--                <td><button class="btn btn-danger">Delete</button></td>-->
<!--            </tr>-->
<!--            </tbody>-->
        </table>


    </div>
    </div>
</template>



<script>
    import axios from 'axios'
    export default {
        data(){
            return {
                data: null,

                results: [],
                coupon:{
                    c_id: '',
                    c_name: '',
                    c_minPrice: '',
                    c_percentDiscount: '',
                    c_validity: '',
                    c_maxDiscount: '',
                    c_cashbackType: '',
                    c_paymentMethod: ''
                }
            }
        },

        mounted(){
            let url = "http://127.0.0.1:8001/api/showcoupons";
            axios.get(url).then(response => {
                console.log(response.data);
                this.results = response.data;
            })
        },

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

