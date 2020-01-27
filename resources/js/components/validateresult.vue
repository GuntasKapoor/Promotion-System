<template>

    <div style="background:#ECECEC; padding:30px; ">
        <div style="color: red">
            <p> <h1>Validity</h1></p>
        </div>

        <h4>{{results.valid}}</h4>
        <h1>hello</h1>
        <div v-if="{{results.valid}}===true"></div>

<!--        <table class="table table-hover">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>Coupon ID</th>-->
<!--                <th>Coupon Name</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->

<!--            <tr v-for="coupon in results" v-bind:key="coupon.c_id">-->
<!--                <td>{{ coupon.c_id}}</td>-->
<!--                <td>{{ coupon.c_name }}</td>-->
<!--                <td><router-link :to="{name:'showcoupondetail',params:{c_id :coupon.c_id}}" class="btn btn-primary">View</router-link></td>-->
<!--                &lt;!&ndash;                <td><router-link :to="{name: 'edit', params: { id: coupon.c_id }}" class="btn btn-primary">Edit</router-link></td>&ndash;&gt;-->
<!--                <td><button class="btn btn-danger">Delete</button></td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->


    </div>
</template>



<script>
    import axios from 'axios'
    export default {
        data(){
            return {
                data: null,

                results: [],
                out:{
                    valid:'',
                    message:'',
                    price:''
                }
            }
        },

        mounted(){
            let url = "/api/couponvalidate/result";
            const { params } = this.$route;

            axios.get(url, { params }).then(response => {
                console.log(response.data);
                this.results = response.data;
            })
        },


    }
</script>

