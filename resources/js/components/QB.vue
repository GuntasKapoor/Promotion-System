<template>
    <div class="container">
        <br>
        <h1 class="display-4" align="left">{{coupcopy.c_name}}
            <span class="float-right">
                <button type="button" class="btn btn-outline-danger" @click="deletecoupon(coupcopy.c_id)">Delete</button>
            </span>
        </h1>
        <b-card align="left">
            <ul>
                <li>Min. Price : {{coupcopy.c_minPrice}}</li>
                <li>%Discount : {{coupcopy.c_percentDiscount}}</li>
                <li>Validity : {{coupcopy.c_validity}}</li>
                <li>Max. Discount : {{coupcopy.c_maxDiscount}}</li>
                <li>Cashback in : {{coupcopy.c_cashbackType}}</li>
                <li>Payment Method : {{coupcopy.c_paymentMethod}}</li>
            </ul>
        </b-card>
        <br><br>
    </div>
</template>

<script>
    export default {
        props: {
            coupcopy: Object,
            deletecoupon: Function
        }
    }
</script>