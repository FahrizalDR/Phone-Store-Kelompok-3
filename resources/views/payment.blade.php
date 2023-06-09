<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/stylepayment.css">

</head>

<body>

    <div class="container">

        <form action="">

            <div class="row">

                <div class="col">

                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>ID Number :</span>
                        <input type="text" placeholder="Your ID Number">
                    </div>
                    {{-- <div class="inputBox">
                        <span>ID Pegawai :</span>
                        <input type="email" placeholder="employee id">
                    </div>
                    <div class="inputBox">
                        <span>ID Nota Penjualan :</span>
                        <input type="text" placeholder="sales nota id">
                    </div> --}}
                    <div class="inputBox">
                        <span>Total Harga :</span>
                        <input type="text" placeholder="Total price" value="Rp19.999.000">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" placeholder="Your state">
                        </div>
                        <div class="inputBox">
                            <span>zip code :</span>
                            <input type="text" placeholder="Your zip code">
                        </div>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">payment</h3>

                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="images/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="textd" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" placeholder="">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="year" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="">
                        </div>
                    </div>

                </div>

            </div>
                <a href="/thankyou"  class="submit-btn">Proceed to check out</a>
    </div>

</body>

</html>