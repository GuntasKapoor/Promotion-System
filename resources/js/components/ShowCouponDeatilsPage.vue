<template>

    <div>
        <div style="color: red">
            <p> <h1>Coupon Details</h1></p>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Coupon ID</th>
                <th>Coupon Name</th>
                <th>Discount(in %)</th>
                <th>Validity</th>
                <th>Max Discount</th>
                <th>Activation Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>{{results.c_id}}</th>
                <th>{{results.c_name}} </th>
                <th>{{results.c_percentDiscount}}</th>
                <th>{{results.c_validity}}</th>
                <th>{{results.c_maxDiscount}}</th>
                <th>{{results.c_activate}}</th>
            </tr>
            </tbody>
        </table>


    </div>
</template>



<script>
    import Header from '../components/Header.vue'

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
                    c_activate: ''
                }
            }
        },

        mounted(){
            let url = "/fetchcoupondetails";
            const { params } = this.$route;

            axios.get(url, { params }).then(response => {
                console.log(response.data);
                this.results = response.data;
            })
        },
        components:{
            Header
        }


    }
</script>

