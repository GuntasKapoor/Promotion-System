<template>

    <div style="background:#ECECEC; padding:30px; ">
        <div style="color: red">
            <p> <h1 align="center">Create Coupon</h1></p>
        </div>

            <form method="post" action="/api/CouponCreate/submit1">
                <h4 align="center"> Coupon Code: <input name="c-name" type="text" required></h4>
                <h4 align="center"> Percentage Discount: <input name="c-percent" type="number" required></h4>
                <h4 align="center"> Coupon Validity: <input name="c-validity" type="date" required></h4>
                <h4 align="center"> Max Discount: <input name="c-maxdiscount" type="number" required></h4>
                <h4 align="center"> select properties</br>
                    <input type="checkbox" name="c_property[]" value=1> property1<br>
                    <input type="checkbox" name="c_property[]" value=2> property2<br>
                    <input type="checkbox" name="c_property[]" value=3> property3<br>
                    <input type="checkbox" name="c_property[]" value=4> property4<br>
                    <input type="checkbox" name="c_property[]" value=5> property5<br>
                    <input type="checkbox" name="c_property[]" value=6> property6<br>
                </h4>
                <h4 align="center"><input type="submit" align="center" onclick="alert('Coupon created successfully')"></h4>
            </form>
    </div>
</template>



<script>
    // import axios from 'axios'
    // export default {
    //     data(){
    //         return {
    //             data: null,
    //
    //             results: [],
    //             coupon:{
    //                 c_id: '',
    //                 c_name: '',
    //                 c_minPrice: '',
    //                 c_percentDiscount: '',
    //                 c_validity: '',
    //                 c_maxDiscount: '',
    //                 c_cashbackType: '',
    //                 c_paymentMethod: ''
    //             }
    //         }
    //     },
    //
    //     mounted(){
    //         let url = "http://127.0.0.1:8001/CouponCreate";
    //         const { params } = this.$route;
    //
    //         axios.get(url, { }).then(response => {
    //             console.log(response.data);
    //             this.results = response.data;
    //         })
    //     },
    //
    //
    // }
</script>

