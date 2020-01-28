<template>

    <div>
        <div>
            <h1 align="center">Validate Entries</h1>
        </div>

        <form>
            <h4 align="center"> Coupon id: <input v-model="coupon_id" type="number" required></h4>
            <h4 align="center"> Property id: <input v-model="property_id" type="number" required></h4>
            <h4 align="center"> User id: <input v-model="user_id" type="number" required></h4>
            <h4 align="center">
                <router-link :to="{name:'validateresult',params:{c:coupon_id,p:property_id,u:user_id}}" class="btn btn-primary">Check</router-link>
            </h4>
        </form>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                coupon_id: '',
                property_id: '',
                user_id: '',
                // message:'sadasd'
            }
        },
        mounted() {
            console.log("Asdasdasdas");
        }
    }
</script>





