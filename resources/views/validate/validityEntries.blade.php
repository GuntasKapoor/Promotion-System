<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validate</title>
</head>
<body>

    <form method="post" action="/api/couponvalidate/result">
        <h4 align="center"> Coupon id: <input name="c" type="number" required></h4>
        <h4 align="center"> Property id: <input name="p" type="number" required></h4>
        <h4 align="center"> User id: <input name="u" type="number" required></h4>
        <h4 align="center"><input type="submit" align="center" ></h4>
    </form>

</body>
</html>
