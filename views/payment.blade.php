<html>
<head>
    <title>Оплата пакет "{{$title}}"</title>
    <script src="//api.fondy.eu/static_common/v1/checkout/ipsp.js"></script>
</head>
<body>
<div id="checkout"></div>
<script>
var button = $ipsp.get("button");
button.setHost("api.fondy.eu");
button.setProtocol("https");
button.setMerchantId(1417317);
button.setAmount("{{$amount}}","UAH",true);
button.setResponseUrl("https://vkluchi-zhizn.com/thanks");
button.addParam("lang","uk");
button.addParam("order_desc","Оплата пакет \"Базовый\"");
button.addParam("server_callback_url","https://vkluchi-zhizn.com/{{$callback_url}}");
button.addParam("order_id", "Order_{{$order_id}}");
button.addParam("payment_systems", "qiwi,yandex,card,p24");
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