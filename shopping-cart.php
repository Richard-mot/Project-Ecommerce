<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="Styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .top-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: none;

            padding: 10px 20px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .icon,
        .logo-icon {
            width: 30px;
            /* Set the desired width for the icons */
            height: 30px;
            /* Set the desired height for the icons */
            margin-right: 10px;
            /* Add some space between icons and text */
        }

        /* Style for cart button */
        .cart-icon {
            width: 40px;
            /* Set the desired width for the cart icon */
            height: 40px;
            /* Set the desired height for the cart icon */
            margin-right: 5px;
            /* Add some space between icon and count */
        }







        #cartButton {
            position: relative;
            background: none;
            border: none;
            cursor: pointer;
        }

        #cartItemCount {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: yellow;
            color: black;
            border-radius: 50%;
            padding: 5px 10px;
            font-size: 14px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .cart {

            width: 65%;
            min-height: 700px;
            /* Set the desired minimum height for the cart section */
            background-color: white;
            color: black;
            padding: 20px;
            margin-right: 10px;
        }

        .checkout {

            width: 35%;
            min-height: 700px;
            /* Set the desired minimum height for the checkout section */
            background-color: black;
            color: white;
            padding: 20px;
            margin-left: 10px;
        }

        .checkout-header h1 {
            text-align: center;
            font-size: 36px;
        }

        /*paypall styles*/
        .card-number input {
            width: 94%;
            height: 40px;
            padding: 5px;
            font-size: 20px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        .card-expiration input {
            width: 45%;
            height: 40px;
            margin-right: 20px;
            border-radius: 10px;
        }

        .customer-details input {
            width: 94%;
            height: 40px;
            padding: 5px;
            font-size: 20px;
            margin-bottom: 10px;
            border-radius: 10px;
        }



        .payment-method h3 {
            margin-left: 40px;
        }

        .mastercard-btn {
            background-color: black;
            color: white;
            border: 3px solid;
            border-radius: 40px;
            padding: 10px 25px;
            margin-left: 50px;

            cursor: pointer;
            display: inline-block;
        }

        .paypal-btn {
            background-color: black;
            color: white;
            border: 3px solid;
            border-radius: 40px;
            padding: 10px 40px;
            margin-left: 20px;

            cursor: pointer;
            display: inline-block;
        }

        .btn-mastercard {
            width: 40px;
            height: 40px;
            margin-right: 8px;
            vertical-align: middle;
        }

        .btn-paypal {
            width: 40px;
            height: 40px;
            margin-right: 8px;
            vertical-align: middle;

        }


        .pym-btn span {
            vertical-align: middle;
        }


        .names h3,
        .card-no h3 {
            margin-left: 40px;
        }

        .names input[type="text"],
        .card-no input[type="text"] {
            width: 95%;
            border-bottom: 4px solid white;
            background-color: transparent;
            color: white;
            padding: 10px;
        }


        .names input[type="text"]::placeholder,
        .card-no input[type="text"]::placeholder {
            color: gray;
            padding-left: 35px;
            font-size: 20px;
        }

        .headings {
            display: flex;
        }

        .headings h3 {
            margin-right: 28%;
        }

        .security {
            display: flex;
        }

        .dates {
            display: flex;
            align-items: center;
        }

        .dates h3 {
            margin-right: 10px;
        }

        .input-wrapper {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .input-wrapper input[type="text"] {
            width: 80px;
            border: none;
            border-bottom: 4px solid white;
            background-color: transparent;
            color: white;
            padding: 5px;
            margin-right: 5px;
        }

        .input-wrapper select.combobox {
            border: none;
            width: 20px;
            color: black;
            padding: 5px;
        }

        .cvv {
            margin-left: 60px;
        }

        .cvv input[type="text"] {
            width: 80px;

            padding-left: 20px;
            border: none;
            border-bottom: 4px solid white;
            background-color: black;
            color: white;
            padding: 10px;

        }

        .cvv input[type="text"]::placeholder {
            color: gray;

        }

        .checkout-btn {
            margin-top: 40px;
            text-align: center;
        }

        .ckt-btn {
            background-color: blue;
            color: white;
            border-radius: 40px;
            padding: 16px 100px;
            font-size: 25px;
            cursor: pointer;
        }

        h1 {
            margin-left: 7%;
            font-size: 36px;
        }

        .item img {
            width: 150px;
            height: 150px;
        }

        a {
            color: #000000;
        }

        .item-header span {
            flex-basis: 25%;
            /* Equal width for columns */
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ccc;
            /* Add border to create a box around each item */
            padding: 25px;
            margin: 10px;
            /* Add margin to separate items */
            border-radius: 20px;
            /* Create rounded corners with a large value */
            width: 800px;
            height: 50px;
            margin-left: 5%;
        }

        .cart-item img {
            width: 40px;
            height: 50px;
        }

        .item-header span {
            margin-left: 4%;
            margin-bottom: 10%;
            padding: 38px;
            font-weight: bold;
            font-size: 20px;
            margin-right: 30px;
        }

        #subtotal {
            margin-left: 70%;
            margin-right: 0;
            font-weight: bold;
        }

        #total {
            margin-left: 70%;
            font-weight: bold;
        }

        #shipping {
            margin-left: 70%;
            font-weight: bold;
        }

        #continue-shopping {
            cursor: pointer;
            position: absolute;
            font-size: 20px;
            font-weight: bold;
        }
        #continue-shopping:hover {
            color: blue; 
        }
    </style>

</head>

<body>
    <header>

        <div class="top-row">
            <div class="logo">
                <a class="home-link" href="index.php">
                    <img src="images/home_icon.svg" alt="home icon" class="icon" />
                </a>
                <img src="images/logo.png" alt="logo" class="logo-icon" />
                <h1>VaalElectronics</h1>
            </div>
            <div class="right">
                <button id="cartButton" onclick="window.location.href='shopping-cart.php';">
                    <img src="images/shopping_cart_icon.svg" alt class="icon cart-icon" />

                </button>

                <button class="account" id="accountButton">
                    <img src="images/person-circle.svg" alt="person-circle" class="icon-acc account-icon" />Account
                </button>
            </div>
        </div>


    </header>

    <!-- Header content goes here -->

    <div class="container">
        <!-- Inside your HTML body -->
        <div id="cart">
            <h1>Shopping Cart</h1>

            <div class="item-header">
                <span>Product</span>
                <span>Quantity</span>
                <span>Price</span>
                <span>Delete</span>
            </div>
            <br>
            <div id="cart-contents">
                <!-- Cart items will be displayed here. -->
            </div>

            <p id="subtotal">Subtotal: R0.00</p>
            <p id="shipping">Shipping: R0.00</p>
            <p id="total">Total: R0.00</p>

            <a id="continue-shopping" onclick="goToAllProducts()">
                < Continue Shopping</a>
        </div>






        <div class="checkout">
            <div class="checkout-header">
                <h1>Payment Info.</h1>
            </div>
            <hr>
            <div class="payment-method">
                <h3>Payment method</h3>
                <button class="mastercard-btn"><img src="images/1156750_finance_mastercard_payment_icon.svg" alt="none" class="btn-mastercard"><span>Credit Card</span></button>
                <button class="paypal-btn"><img src="images/4375034_logo_paypal_icon.svg" alt="none" class="btn-paypal"><span>PayPal</span></button>
            </div>

            <!--paypal payment methods-->
            <div class="paypal-payment">

                <p><i>powered by</i> PayPal</p>
                <div class="card-number">

                    <input id="creditCardInput" type="text" placeholder="Card Number" required>
                </div>
                <div class="card-expiration">

                    <input type="text" placeholder="Expires" required>
                    <input id="cvvInput" type="text" placeholder="CSC" required>
                </div>
                <div>
                    <h2>Billing address</h2>
                </div>
                <div class="customer-details">
                    <input type="text" placeholder="First name" required>
                    <input type="text" placeholder="Last name" required>
                    <input type="text" placeholder="ZIP code" required>
                    <input type="text" placeholder="+27" required>

                </div>

            </div>

            <hr>
            <div class="names">
                <h3>Name on the card :</h3>
                <input type="text" placeholder="e.g Van Mot" required>
            </div>

            <div class="card-no">
                <h3>Card Number:</h3>
                <input id="creditCardInput" type="text" placeholder="**** **** **** 0101" required>
            </div>

            <div class="headings">
                <h3>Expiration Date:</h3>
                <h3>CVV:</h3>

            </div>


            <div class="security">

                <div class="dates">

                    <div class="input-wrapper">
                        <input id="monthInput" type="text" placeholder="MM" required>
                        <select id="monthSelect" class="combobox">
                            <option value="00"></option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>

                        </select>
                    </div>
                    <div class="input-wrapper">
                        <input id="yearInput" type="text" placeholder="YYYY" required>
                        <select id="yearSelect" class="combobox">
                            <option value="00"></option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>


                        </select>
                    </div>
                </div>

                <div class="cvv">

                    <input id="cvvInput" type="text" placeholder="XXX" required>
                </div>

            </div>
            <div class="checkout-btn">
                <button class="ckt-btn">CheckOut.</button>
            </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Hide the elements initially
            $('.names, .card-no, .headings, .security').hide();

            // When PayPal button is clicked
            $('.paypal-btn').click(function() {
                // Hide specific div elements
                $('.names, .card-no, .headings, .security').hide();

                // Display the PayPal payment div
                $('.paypal-payment').show();
            });

            // When Credit Card button is clicked
            $('.mastercard-btn').click(function() {
                // Show specific div elements
                $('.names, .card-no, .headings, .security').show();

                // Hide the PayPal payment div
                $('.paypal-payment').hide();
            });
        });


        const monthSelect = document.getElementById('monthSelect');
        const yearSelect = document.getElementById('yearSelect');
        const monthInput = document.getElementById('monthInput');
        const yearInput = document.getElementById('yearInput');

        monthSelect.addEventListener('change', function() {
            monthInput.value = monthSelect.value;
        });

        yearSelect.addEventListener('change', function() {
            yearInput.value = yearSelect.value;
        });

        const creditCardInput = document.getElementById('creditCardInput');

        creditCardInput.addEventListener('input', function(event) {
            // Remove non-numeric characters from the input value
            let cleanedInput = creditCardInput.value.replace(/\D/g, '');

            // Add a space after every 4 digits
            cleanedInput = cleanedInput.replace(/(\d{4})(?=\d)/g, '$1 ');

            // Trim the input to the maximum length (16 digits + 3 spaces)
            creditCardInput.value = cleanedInput.slice(0, 19);
        });

        // Get the input element
        var cvvInput = document.getElementById('cvvInput');

        // Add event listener to input for input event
        cvvInput.addEventListener('input', function() {
            // Remove non-numeric characters using regular expression
            var numericValue = this.value.replace(/\D/g, '');

            // Limit the input to a maximum of 3 characters
            var maxLength = 3;
            if (numericValue.length > maxLength) {
                numericValue = numericValue.slice(0, maxLength);
            }

            // Update the input value
            this.value = numericValue;

        });

        // Function to render the cart.
        function renderCart() {
            const cartContent = document.getElementById('cart-contents');
            const subtotalDisplay = document.getElementById('subtotal');
            const shippingDisplay = document.getElementById('shipping');
            const totalDisplay = document.getElementById('total');

            let cartData = JSON.parse(localStorage.getItem('cart'));

            if (!cartData || cartData.length === 0) {
                cartContent.innerHTML = '<p>Your cart is empty.</p>';
                subtotalDisplay.textContent = 'Subtotal: R0.00';
                shippingDisplay.textContent = 'Shipping: R0.00';
                totalDisplay.textContent = 'Total: R0.00';
                return;
            }

            let subtotal = 0;
            cartContent.innerHTML = '';

            cartData.forEach((item, index) => {
                subtotal += item.price * item.quantity;
                const cartItemDiv = document.createElement('div');
                cartItemDiv.classList.add('cart-item');
                cartItemDiv.innerHTML = `
                <img src="${item.image}" alt="${item.name}" class="product-image">${item.name}

                    <div class="quantity-container">
                        <button class="quantity-button" onclick="decrementQuantity(${index})">-</button>
                        ${item.quantity}
                        <button class="quantity-button" onclick="incrementQuantity(${index})">+</button>
                    </div>
                    <span>R${(item.price * item.quantity).toFixed(2)}</span>
                    <button class="remove-button" onclick="removeFromCart(${index})" style="background: none;border:none;"><img src="./images/dbin.png" alt="Remove from Cart"></button>

                `;
                cartContent.appendChild(cartItemDiv);

            });

            const shippingCost = 50;
            const total = subtotal + shippingCost;

            subtotalDisplay.textContent = `Subtotal: R${subtotal.toFixed(2)}`;
            shippingDisplay.textContent = `Shipping: R${shippingCost.toFixed(2)}`;
            totalDisplay.textContent = `Total: R${total.toFixed(2)}`;
            localStorage.setItem('cart', JSON.stringify(cartData));
        }

        // Function to remove an item from the cart.
        function removeFromCart(index) {
            const cartData = JSON.parse(localStorage.getItem('cart'));

            if (cartData && cartData.length > index) {
                cartData.splice(index, 1);
                localStorage.setItem('cart', JSON.stringify(cartData));
                renderCart(); // Re-render the cart after removing the item.
            }
        }

        // Function to increment the quantity of an item in the cart.
        function incrementQuantity(index) {
            const cartData = JSON.parse(localStorage.getItem('cart'));

            if (cartData && cartData.length > index) {
                cartData[index].quantity++;
                localStorage.setItem('cart', JSON.stringify(cartData));
                renderCart(); // Re-render the cart after incrementing the quantity.
            }
        }

        // Function to decrement the quantity of an item in the cart.
        function decrementQuantity(index) {
            const cartData = JSON.parse(localStorage.getItem('cart'));

            if (cartData && cartData.length > index) {
                if (cartData[index].quantity > 1) {
                    cartData[index].quantity--;
                } else {
                    cartData.splice(index, 1);
                }

                localStorage.setItem('cart', JSON.stringify(cartData));
                renderCart(); // Re-render the cart after decrementing the quantity.
            }
        }

        // Event listener to render the cart when the page loads.
        window.addEventListener('load', renderCart);

        // Function to navigate back to the all products page.
        function goToAllProducts() {
            window.location.href = 'products.php';
        }
    </script>


    <?php include_once('footer.html') ?>
</body>

</html>