<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="{{$api_base}}checkout/version/56/checkout.js"
            data-error="errorCallback"
            data-cancel="cancelCallback"
            data-complete="{{ $complete_url}}"
    >
    </script>

    <script type="text/javascript">
        function errorCallback(error)
        {
            window.location.href="{{url('/')}}";
        }
        function cancelCallback() {
            window.location.href="{{url('/')}}";
        }

        function completeCallback(resultIndicator, sessionVersion)
        {
            //handle payment completion
            console.log(resultIndicator);
        }
        Checkout.configure({
            merchant: 'SEYLANTEST2',
            order: {
                amount: {{ $amount}},
                currency: 'USD',
                description: 'Order Details',
                id: '{{$order_id}}'
            },
            interaction: {
                operation: 'PURCHASE',
                merchant: {
                    name: 'SEYLANTEST2',
                    address: {
                        line1: 'Main Street,Colombo',
                        line2: 'Homagama'
                    }
                },
                locale        : 'en_US',
                theme         : 'default',
                displayControl: {
                    billingAddress  : 'HIDE',
                    customerEmail   : 'HIDE',
                    orderSummary    : 'HIDE',
                    shipping        : 'HIDE'
                }
            },
            session: {
                id : '{{$session_id}}'
            }
        });
    </script>
</head>
<body>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <Center><strong>Processing Payment...</strong></Center>
                <!--<input type="button" id="pay" class="btn btn-primary" value="Pay Now" onclick="Checkout.showLightbox();" />--></center>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript'>
    jQuery(document).ready(function(){
        Checkout.showLightbox();
    })
</script>
</body>
</html>