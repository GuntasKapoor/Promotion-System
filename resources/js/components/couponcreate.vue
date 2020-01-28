<template>

    <div>
        <div>
            <h1 align="center">Create Coupon</h1>
        </div>

            <form method="post" action="/api/CouponCreate/submit1">
                <h4 align="center"> Coupon Name: <input name="c-name" type="text" required></h4>
                <h4 align="center"> Percentage Discount: <input name="c-percent" type="number" min="0" max="100" required></h4>
                <h4 align="center"> Coupon Validity: <input name="c-validity" type="date" required></h4>
                <h4 align="center"> Max Discount: <input name="c-maxdiscount" type="number" min = "0" required></h4>
                <h4 align="center"> select properties</br>
                    <input type="checkbox" name="c_property[]" value=1> property1<br>
                    <input type="checkbox" name="c_property[]" value=2> property2<br>
                    <input type="checkbox" name="c_property[]" value=3> property3<br>
                    <input type="checkbox" name="c_property[]" value=4> property4<br>
                    <input type="checkbox" name="c_property[]" value=5> property5<br>
                    <input type="checkbox" name="c_property[]" value=6> property6<br>
                </h4>
                <b-col align = "center"><b-button type = "submit" variant = "primary">Submit</b-button></b-col>
            </form>
    </div>
</template>


