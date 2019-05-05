<html>
<head>
    <title>Онлайн курс «Включи жизнь!»</title>
    <script src="//api.fondy.eu/static_common/v1/checkout/ipsp.js"></script>
</head>
<body>
<div id="checkout"></div>
<script>
var button = $ipsp.get("button");
button.setHost("api.fondy.eu");
button.setProtocol("https");
button.setMerchantId(1417317);
button.setAmount("5","UAH",true);
button.setResponseUrl("https://vkluchi-zhizn.com/thanks");
button.addParam("lang","ru");
button.addParam("order_desc","Платеж за товары  ");
var url = button.getUrl();
$ipsp("checkout").config({
    "wrapper": "#checkout",
        "styles": {
            "body": {
                "overflow": "hidden"
            }
        }
}).scope(function () {
    this.width("100%");
    this.height(480);
    this.action("resize", function (data) {
        this.setCheckoutHeight(data.height);
    })
    this.loadUrl(url);
});
</script>
</body>
</html> 
