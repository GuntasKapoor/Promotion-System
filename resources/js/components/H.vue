<!--<template>
    <div>
        <b-nav>
            <b-nav-item>
                <router-link to="/" class="nav-link"><b> &lt; Back </b></router-link>
            </b-nav-item>
        </b-nav>
    </div>
</template>

<script>
    export default {
        props: {
            back: Function
        }
    }
</script>
-->
<template>
    <div>
        <b-nav tabs>
            <b-nav-item @click="back('http://127.0.0.1:8000/home')"><b> HOME </b></b-nav-item>
        </b-nav>
    </div>
</template>

<script>
    export default {
        props: {
            back: Function
        }
    }
</script>
