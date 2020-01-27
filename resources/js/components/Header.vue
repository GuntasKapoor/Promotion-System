<template>
<div>

  <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand to = "/" >PromotionSystem</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav type = "primary">
        <b-nav-item to = "/">Home</b-nav-item>
        <b-nav-item to = "/CouponCreate" >CreateCoupon</b-nav-item>
        <b-nav-item to = "/UpdateCoupon">UpdateCoupon</b-nav-item>
        <b-nav-item to = "/showcoupons">ShowCoupon</b-nav-item>
        <b-nav-item to = "/DeleteCoupon">DeleteCoupons</b-nav-item>
        <b-nav-item to = "/validate">ApplyCoupon</b-nav-item>
      </b-navbar-nav>
      <b-navbar-nav class="ml-auto"></b-navbar-nav>

    </b-collapse>
  </b-navbar>
</div>
</template>


script{

}

style{

}
