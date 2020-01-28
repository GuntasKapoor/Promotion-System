<template>

    <div style="background:#ECECEC; padding:30px; ">
        <div style="color: red">

            <h1 align="center">Edit Coupon Details</h1>
        </div>

        <form method="post" action="/api/editted/">
            <h4 align="center"> Coupon Code: <input name="c_name" :value=results.c_name type="text" required ></h4>
            <h4 align="center"> Percentage Discount: <input name="c_percentDiscount" :value=results.c_percentDiscount type="number" required></h4>
            <h4 align="center"> Coupon Validity: <input name="c_validity" :value=results.c_validity type="date" required></h4>
            <h4 align="center"> Max Discount: <input name="c_maxDiscount" :value=results.c_maxDiscount type="number" required></h4>
            <h4 align="center"> <input name="c_id" :value=results.c_id type="hidden" required></h4>
            <h4 align="center"><input type="submit" value="Update" align="center" onclick="alert('Coupon updated successfully')"></h4>
        </form>
    </div>
</template>
/// @if(in_array("property1", $values)) checked @endif


<script>
    import axios from 'axios'
    export default  {
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
            let url = "/fetchcoupondetails";
            const { params } = this.$route;

            axios.get(url, { params }).then(response => {
                console.log(response.data);
                this.results = response.data;
            })
        },


    }
</script>


// document.editform.c-name.value = {{results.c_name}}

