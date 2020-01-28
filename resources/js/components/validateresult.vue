<template>

    <div>

        <div v-if="results.length===0">
            <div style="color: red">
                <p align="center"> Make valid entries</p>
                <router-link :to="{name:'validate'}" class="btn btn-primary">Go back</router-link>
            </div>
        </div>

        <div v-else>
            <div v-if="results.valid">

                <div style="color: red">
                    <h1 align="center">Congrats</h1>
                </div>

                <h2 align="center">{{results.message}}</h2>
                <h4 align="center">you effective price is {{results.price}}</h4>
                <h2 align="center"> <router-link :to="{name:'validate'}" class="btn btn-primary">Go back</router-link></h2>

            </div>
            <div v-else>
                <div style="color: red">
                    <h1 align="center">Sorry!!</h1>
                </div>
                <h2 align="center">{{results.message}}</h2>
                <h2 align="center"> <router-link :to="{name:'validate'}" class="btn btn-primary">Go back</router-link></h2>
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
