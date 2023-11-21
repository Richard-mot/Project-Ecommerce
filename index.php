
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>E-commerce Website</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .heading h2 {
            font-size: 28px;
            /* You can adjust the font size as per your preference */
        }

        .horizontal-images {
            text-align: center;
        }

        .pop-product {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .div-img {
            margin-right: 65px;
            /* Adjust this value to control the space between div-img elements */
        }

        .prod-img {
            width: 250px;
            height: 200px;
            transition: transform 0.3s;
        }


        .prod-img:hover {
            transform: scale(1.1);
        }

        .pop-product .prod-img {
            width: 250px;
            height: 200px;
        }
    </style>
</head>

<body>
    <?php include_once("header.html") ?>

    <section id="item-results">

    </section>

    <div class="page-info">
        <div class="content">
            <div class="left-section">
                <div class="left-text">
                    <p style="font-weight : 50%;"><strong>Welcome to VaalElectronics,where<br>
                            Innovation meets reliability.Discover a <br>
                            world of cutting-edge electronics and <br>
                            gadgets designed to enhance your<br>
                            lifestyle.Dive into the future of <br>technology with us
                </div></strong></p>
                <div><button class="shop-now-button" onclick="window.location.href='products.php'">Shop Now!</button></div>

            </div>
            <div class="right-section">
                <img src="images/home-products.jpg" alt="Product Image" class="home-product">
            </div>
        </div>

        <div class="container">
            <div class="horizontal-images">
                <div class="heading">
                    <h2>New Arrivals Products</h2>
                </div>
                <div class="pop-product">
                    <div class="div-img">
                        <img src="images/samsung.jpg" alt="Image 1" class="prod-img">
                        <h3>Samsung Galaxy S23 Ultra</h3>
                    </div>

                    <div class="div-img">
                        <img src="images/HisenseTV.jpg" alt="Image 2" class="prod-img">
                        <h3>Hisense 65'' class H6500F</h3>
                    </div>

                    <div class="div-img">
                        <img src="images/HuaweiP60.jpg" alt="Image 3" class="prod-img">
                        <h3>HUAWEI P60 PRO 8GB + 250GB BLACK</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="script.js">
        
    </script>
    <?php include_once("footer.html") ?>
</body>



</html>