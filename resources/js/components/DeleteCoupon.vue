<template>

    <div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Coupon ID</th>
                <th>Coupon Name</th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="coup in couponsarr" :key="coup.c_id">
                <td>{{ coup.c_id}}</td>
                <td>{{ coup.c_name }}</td>
                <td>
                    <button type="button" class="btn btn-outline-danger" @click="deletecoupon(coup.c_id)">Delete</button>
                </td>
               <!--                <td><router-link :to="{name: 'edit', params: { id: coupon.c_id }}" class="btn btn-primary">Edit</router-link></td>-->
                <!--                <td><button class="btn btn-danger">Delete</button></td>-->
            </tr>
            </tbody>
        </table>


    </div>
</template>

<script>
    import QB from '/Users/administrator/Documents/Promotion-System/resources/js/components/QB.vue'
    import axios from 'axios'

    export default {
        components: {
            QB
        },
        data() {
            return  {
                couponsarr: [],
                pagination: {}
            }
        },
        mounted() {
            this.fetchcoupons()
        },
        methods: {
            fetchcoupons() {
                //let vm = this;
                // let page_url =  "/coupons";
                /*this.axios.get(page_url)
                    .then(jsondata => {
                        this.couponsarr = jsondata.data.data
                        vm.makepages(jsondata.data.meta, jsondata.data.links);
                    })*/
                // fetch(page_url, {
                //     method: 'get'
                // })
                //     axios.get(page_url).then(response => {
                //         //console.log(response);
                //         this.couponsarr =  response;
                //         console.log(this.couponsarr);
                //     })
                    // .then(jsondata => {
                    //     this.couponsarr = jsondata.data
                    //     vm.makepages(jsondata.meta, jsondata.links);
                    // })
                    // .catch(() =>{
                    //     alert('Failed!');
                    // })


                let url = "/coupons";

                axios.get(url).then(response => {
                    // console.log(response.data);
                    this.couponsarr = response.data;
                    console.log(this.couponsarr);
                })
            },

            deletecoupon(id) {

                    let uri = `/coupon/${id}`;

                    axios.delete(uri).then(() => {
                                    alert('Coupon Removed');
                                    this.fetchcoupons();
                                })
                }
            },
            fetchhome(page_url) {
                fetch(page_url, {
                    method: 'get'
                })
                    .catch(() =>{
                        alert('Failed!');
                    })
                /*router.push('home')
                .catch(() => {
                    alert('fail');
                })*/
            }
        // }
    }
</script>

<style>
    /*#app {*/
    /*    font-family: 'Avenir', Helvetica, Arial, sans-serif;*/
    /*    -webkit-font-smoothing: antialiased;*/
    /*    -moz-osx-font-smoothing: grayscale;*/
    /*    text-align: center;*/
    /*    color: #2c3e50;*/
    /*    margin-top: 60px;*/
    /*}*/
    /*html, body{*/
    /*    padding: 0;*/
    /*    margin: 0;*/
    /*}*/
</style>
