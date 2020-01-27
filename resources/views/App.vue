<!--<template>
    <div id="app">
        <navbar></navbar>
        <H></H>

        <nav class="m-4" aria-label="Page navigation example">
            <ul class="pagination">

                <li class="page-item">
                    <a class="page-link" href="#" >Previous</a></li>

                <li class="page-item disabled">
                    <a class="page-link text-dark" href="#">Page of </a></li>

                <li class="page-item">
                    <a class="page-link" href="#">Next</a></li>

            </ul>
        </nav>
    </div>
</template>

<script>
    export default {}
</script>
-->
<template>
    <div id="app">
        <H
            :back="fetchhome"
        />

        <nav class="m-4" aria-label="Page navigation example">
            <ul class="pagination">

                <li v-bind:class="[{disabled : !pagination.prev_page}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchcoupons(pagination.prev_page)">Previous</a></li>

                <li class="page-item disabled">
                    <a class="page-link text-dark" href="#">Page {{pagination.curr}} of {{pagination.last}}</a></li>

                <li v-bind:class="[{disabled : !pagination.next_page}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchcoupons(pagination.next_page)">Next</a></li>

            </ul>
        </nav>
        <div v-for="coup in couponsarr" :key="coup.c_id">
            <QB
                :coupcopy="coup"
                :deletecoupon="deletecoupon"
            />
        </div>

        <nav class="m-4" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">

                <li v-bind:class="[{disabled : !pagination.prev_page}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchcoupons(pagination.prev_page)">Previous</a></li>

                <li class="page-item disabled">
                    <a class="page-link text-dark" href="#">Page {{pagination.curr}} of {{pagination.last}}</a></li>

                <li v-bind:class="[{disabled : !pagination.next_page}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchcoupons(pagination.next_page)">Next</a></li>

            </ul>
        </nav>

    </div>
</template>

<script>
    import H from '../js/components/H.vue'
    import QB from '../js/components/QB.vue'

    export default {
        name: 'app',
        components: {
            H,
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
            fetchcoupons(page_url) {
                let vm = this;
                page_url = page_url || 'http://127.0.0.1:8000/api/coupons'
                /*this.axios.get(page_url)
                    .then(jsondata => {
                        this.couponsarr = jsondata.data.data
                        vm.makepages(jsondata.data.meta, jsondata.data.links);
                    })*/
                fetch(page_url, {
                    method: 'get'
                })
                    .then(response => {
                        return response.json()
                    })
                    .then(jsondata => {
                        this.couponsarr = jsondata.data
                        vm.makepages(jsondata.meta, jsondata.links);
                    })
                    .catch(() =>{
                        alert('Failed!');
                    })
            },
            makepages(meta, links) {
                let pages = {
                    curr : meta.current_page,
                    last : meta.last_page,
                    next_page : links.next,
                    prev_page : links.prev
                }
                this.pagination = pages;
            },
            deletecoupon(id) {
                if(confirm('Are you sure?')) {
                    fetch(`http://127.0.0.1:8000/api/coupon/${id}`, {
                        method: 'delete'
                    })
                        .then(res => res.json())
                        .then(() => {
                            alert('Coupon Removed');
                            this.fetchcoupons();
                        })
                        .catch(() => {
                            alert('Failed');
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
        }
    }
</script>

<style>
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }
    html, body{
        padding: 0;
        margin: 0;
    }
</style>
