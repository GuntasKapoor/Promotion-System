<template>
    <div>
        <Header></Header>
        <div>
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<style>

</style>

<script>
import Header from "/Users/Samarth/Promotion-System/resources/js/components/Header.vue"
    export default{
    components:{
        Header
    }
    }

</script>
