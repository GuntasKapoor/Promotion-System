<template>

    <div style="background:#ECECEC; padding:30px; ">
        <div style="color: red">
            <p> <h1 align="center">Validate Entries</h1></p>
        </div>

        <form >
            <h4 align="center"> Coupon id: <input name="c" type="number" required></h4>
            <h4 align="center"> Property id: <input name="p" type="number" required></h4>
            <h4 align="center"> User id: <input name="u" type="number" required></h4>
            <h4 align="center">
                <td><router-link :to="{name:'validateresult'}" class="btn btn-primary">Check</router-link></td>
            </h4>
        </form>

    </div>
</template>





