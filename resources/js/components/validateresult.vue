<template>

    <div>
        <div>
            <p> <h1>Validity</h1></p>
        </div>

        <!--        <h4>{{results.valid}}</h4>-->
        <!--        val={{results.valid}};-->
        <!--        <h1></h1>-->
        <div v-if="results.length===0">
            <div style="color: red">
                <p> Make valid entries</p>
                <router-link :to="{name:'validate'}" class="btn btn-primary">Go back</router-link>
            </div>
        </div>

        <div v-else>
            <div v-if="results.valid">

                <div style="color: red">
                    <h1>Congrats</h1>
                </div>

                <h2>{{results.message}}</h2>
                <h4>you effective price is <h1>{{results.price}}</h1></h4>

            </div>
            <div v-else>
                <div style="color: red">
                    <h1>Sorry!!</h1>
                </div>
                <h2>{{results.message}}</h2>
                <router-link :to="{name:'validate'}" class="btn btn-primary">Go back</router-link>
            </div>
        </div>

    </div>
</template>



<script>
    import axios from 'axios'
    export default {
        data(){
            return {
                data: null,
                results: []
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
