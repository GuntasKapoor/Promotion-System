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
                <th>Discount(in %)</th>
                <th>Validity</th>
                <th>Max Discount</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>{{results.c_id}}</th>
                <th>{{results.c_name}} </th>
                <th>{{results.c_percentDiscount}}</th>
                <th>{{results.c_validity}}</th>
                <th>{{results.c_maxDiscount}}</th>

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
                    // c_minPrice: '',
                    c_percentDiscount: '',
                    c_validity: '',
                    c_maxDiscount: '',
                    // c_cashbackType: '',
                    // c_paymentMethod: ''
                }
            }
        },

        mounted(){
            let url = "/api/fetchcoupondetails";
            const { params } = this.$route;

            axios.get(url, { params }).then(response => {
                console.log(response.data);
                this.results = response.data;
            })
        },


    }
</script>

