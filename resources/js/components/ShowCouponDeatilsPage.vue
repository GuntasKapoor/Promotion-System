<template>

    <div style="background:#ECECEC; padding:30px; ">
        <div style="color: red">
            <p> <h1>Copoun Details</h1></p>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Coupon ID</th>
                <th>Coupon Name</th>
                <th>Min Price</th>
                <th>Discount(in %)</th>
                <th>Validity</th>
                <th>Max Discount</th>
                <th>Cashback Type</th>
                <th>Payment Method</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>{{results.c_id}}</th>
                <th>{{results.c_name}} </th>
                <th>{{results.c_minPrice}}</th>
                <th>{{results.c_percentDiscount}}</th>
                <th>{{results.c_validity}}</th>
                <th>{{results.c_maxDiscount}}</th>
                <th>{{results.c_cashbackType}}</th>
                <th>{{results.c_paymentMethod}}</th>

<!--            <th v-for="coupon in results" >-->
<!--&lt;!&ndash;                v-bind:key="coupon.c_id"&ndash;&gt;-->
<!--                <td>{{ coupon}}</td>-->
<!--&lt;!&ndash;                <td>{{ coupon.c_name }}</td>&ndash;&gt;-->
<!--&lt;!&ndash;                <td>{{ coupon.id }}</td>&ndash;&gt;-->
<!--&lt;!&ndash;                <td><router-link :to="{name: 'edit', params: { id: coupon.c_id }}" class="btn btn-primary">Edit</router-link></td>&ndash;&gt;-->
<!--&lt;!&ndash;                <td><button class="btn btn-danger">Delete</button></td>&ndash;&gt;-->
<!--            </th>-->
            </tr>
            </tbody>
        </table>


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
            let url = "http://127.0.0.1:8001/api/fetchcoupondetails";
            const { params } = this.$route;

            axios.post(url, { params }).then(response => {
                console.log(response.data);
                this.results = response.data;
            })
        },


    }
</script>

