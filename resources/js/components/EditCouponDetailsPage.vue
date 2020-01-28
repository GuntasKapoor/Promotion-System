<template>

    <div>
        <div>

            <h1 align="center">Edit Coupon Details</h1>
        </div>

        <form method="post" action="/api/editted/">

            <h4 align="center"> Coupon Code: <input name="c_name" :value=results.c_name type="text" required ></h4>
            <h4 align="center"> Percentage Discount: <input name="c_percentDiscount" :value=results.c_percentDiscount type="number" required></h4>
            <h4 align="center"> Coupon Validity: <input name="c_validity" :value=results.c_validity type="date" required></h4>
            <h4 align="center"> Max Discount: <input name="c_maxDiscount" :value=results.c_maxDiscount type="number" required></h4>
            <h4 align="center"> Activation status: <input name="c_activate" :value=results.c_activate type="number" required ></h4>
            <h4 align="center"> select properties</br>

                <input type="checkbox" name="c_property[]" value=1 :checked="properties[0]==true"> property1<br>
                <input type="checkbox" name="c_property[]" value=2 :checked="properties[1]==true"> property2<br>
                <input type="checkbox" name="c_property[]" value=3 :checked="properties[2]==true"> property3<br>
                <input type="checkbox" name="c_property[]" value=4 :checked="properties[3]==true"> property4<br>
                <input type="checkbox" name="c_property[]" value=5 :checked="properties[4]==true"> property5<br>
                <input type="checkbox" name="c_property[]" value=6 :checked="properties[5]==true"> property6<br>
            </h4>
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
                },
                selectedProperties:[],
                properties:[false, false, false, false, false, false]
            }
        },

        mounted(){
            let url = "/fetchcoupondetails";
            const { params } = this.$route;

            let url2 = "/fetchSelectedProperties";
            // const {params2} = this.$route;


            axios.get(url, { params }).then(response => {
                console.log('Response 1: ', response.data);
                this.results = response.data;
            })

            axios.get(url2, {params}).then(response => {
                console.log('Response 2: ', response.data);
                // this.selectedProperties = response.data;

                response.data.forEach(selectedProperty => {
                    const newProperties = [...this.properties];
                    newProperties[selectedProperty.p_id - 1] = true;
                    this.properties = newProperties;
                })

                console.log('Selected properties: ', this.properties);
                // console.log(this.selectedProperties[1].p_id);
            })

        },




    }


</script>
