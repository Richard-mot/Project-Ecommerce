<head>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* CSS */

    /* Style the section to be vertically aligned */
    /* CSS */
    h1 {
      text-align: center;
      margin-top: 50px;
      /* Adjust the top margin as needed */
    }

    /* CSS */
    .first-row {
      display: flex;
      justify-content: space-around;
      align-items: center;
    }


    /* Align divs inside the section horizontally */
    .container {
      display: flex;
      flex-direction: column;
      height: 100vh;
      /* 100% of the viewport height */
      justify-content: space-between;
      /* Space between .sub-product divs */
      margin-top: 50px;
    }

    /* CSS */
    .sub-product {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-bottom: 20px;
    }

    /* Set image dimensions */
    .product-img {
      width: 300px;
      height: 230px;
    }

    /* Align price-rate divs horizontally */
    .price-cart {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .rate-icon {
      width: 20px;
      height: 20px;
    }

    .menu a {
      text-decoration: none;
      color: #000;
    }

    .price-cart .cart-icon {
      width: 30px;
      height: 30px;
    }

    .prod-container button {
      background: none;
      border: none;
    }

    .cart-icon {
      cursor: pointer;
    }

    /* CSS styles for the products displayed in the item-results section */
    #item-results .prod-container {
      border: 1px solid #ccc;
      padding: 20px;
      margin: 20px;
      text-align: center;
      width: 250px;
      /* Set a fixed width for the product containers */
      background-color: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #item-results .product-image {
      width: 200px;
      height: 150px;
      object-fit: cover;
      margin-bottom: 10px;

      /* Make the product images circular */
    }

    #item-results .product-name {
      font-size: 18px;
      margin: 5px 0;
      color: #333;
      font-weight: bold;
    }

    #item-results .product-price {
      font-size: 16px;

      margin-top: 10px;
    }

    #item-results p.no-results {
      color: red;
      font-style: italic;
      margin-top: 20px;
    }

    .prod-container {
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px;
      text-align: center;
    }

    .product-image {
      width: 150px;
      height: 150px;
    }

    .product-name {
      font-size: 18px;
      margin: 5px 0;
    }

    .product-price {
      font-size: 16px;
      color: black;
    }

    .star-rating {
      color: yellow;
      /* Set the color to yellow */
      font-size: 24px;
      /* Increase the font size to 24 pixels (you can adjust the size as needed) */
    }

    .product-details {
      display: flex;
      /* Use flexbox */
      justify-content: space-between;
      /* Add space between child elements */
      align-items: center;
      /* Align child elements vertically in the center */
    }

    .product-price {
      margin: 0;
      color: black;
      /* Remove default margin from the paragraph */
    }

    .buy-button {
      display: flex;
      /* Use flexbox for the button to handle the image */
      align-items: center;
      /* Align the button content vertically in the center */
      background: none;
      border: 0;
    }

    .buy-button img {
      width: 40px;
      /* Set the width of the image to increase its size (adjust the value as needed) */
      height: 40px;
      /* Set the height of the image to increase its size (adjust the value as needed) */
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
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
  <header>
    <div class="top-row">
      <div class="logo">
        <img src="images/logo.png" alt="logo" class="logo-icon" />
        <h1>VaalElectronics</h1>
      </div>
      <div class="right">
        <button id="cartButton" onclick="window.location.href='shopping-cart.php';">
          <img src="images/shopping_cart_icon.svg" alt class="icon" />
          <span id="cartItemCount">0</span>
        </button>
        <button>
          <img src="images/person-circle.svg" alt="person-circle" class="icon-acc" />Account
        </button>
      </div>
    </div>
    <div class="bottom-row">
      <div class="menu">
        <a class="home-link" href="index.php"><img src="images/home_icon.svg" alt="home icon" class="icon" href="#" />Home</a>

        <div class="search-container">
          <input type="text" class="search-bar" placeholder="    search products   " />
          <button class="search-btn">
            <img src="images/search.svg" alt="search" class="search-icon" />
          </button>
        </div>




        <a href="aboutus.php" style="text-decoration: none;color: black;">About Us</a>
        <a href="contactus.php" style="text-decoration: none;color: black;">Contact Us</a>
      </div>
    </div>
  </header>
  <div>
    <h1>ALL LAPTOPS</h1>
  </div>
  <section id="item-results">

  </section>

  <div class="container">
    <div class="sub-product">
      <div class="prod-container">
        <div>
          <img src="images/Macbook_Air_15.jpg" alt="failed" class="product-img">
        </div>
        <div>
          <h3>Macbook Air 15</h3>
        </div>
        <div>
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
        </div>
        <div class="price-cart">
          <div>R17999.00</div>
          <div><button class="product" onclick="addToCartCount()" data-name="Macbook Air 15" data-price="17999.00" data-image="images/Macbook_Air_15.jpg">
              <img src=" images/cart-plus-fill.svg" alt="Add to Cart" class="cart-icon">
            </button></div>
        </div>
      </div>


      <div class="prod-container">
        <div>
          <img src="images/zenbook_14_flip_oled_up3404va_product_photo_8b_ponder_blue_13.jpg" alt="failed" class="product-img">
        </div>
        <div>
          <h3>ASUS zenbook 14 flip</h3>
        </div>
        <div>
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
        </div>
        <div class="price-cart">
          <div>R12999.00</div>
          <div><button class="product" onclick="addToCartCount()" data-name="ASUS zenbook 14 flip" data-price="12999.00" data-image="images/zenbook_14_flip_oled_up3404va_product_photo_8b_ponder_blue_13.jpg"><img src="images/cart-plus-fill.svg" alt="not visible" class="cart-icon"></button></div>
        </div>
      </div>

    </div>
  </div>
  <?php include_once("footer.html") ?>
  <script>
    let products = [

      {
        name: "MacBook Air 15",

        image: "images/Macbook_Air_15.jpg",
        ratings: 5, // Number of stars (out of 5)
        price: 17999.00,
        // Add other product properties here
        buttonImage: "images/cart-plus-fill.svg" // Path to the image for the button
      },
      {
        name: "ASUS zenbook 14 flip",

        image: "images/zenbook_14_flip_oled_up3404va_product_photo_8b_ponder_blue_13.jpg",
        ratings: 5, // Number of stars (out of 5)
        price: 12999.00,
        // Add other product properties here
        buttonImage: "images/cart-plus-fill.svg" // Path to the image for the button
      },



      // Add more products as needed
    ];

    function displaySearchResults() {
      const searchInput = document.querySelector(".search-bar");
      const searchQuery = searchInput.value.trim().toLowerCase();
      const matchingProducts = products.filter(product =>
        product.name.toLowerCase().includes(searchQuery)
      );

      const itemResultsSection = document.getElementById("item-results");
      itemResultsSection.innerHTML = ""; // Clear previous search results
      const pageInfoDiv = document.querySelector('.container');
      if (pageInfoDiv) {
        pageInfoDiv.style.display = 'none'; // Hide .page-info div
      }

      if (matchingProducts.length > 0) {
        // Create a parent container for the matching products
        const productsContainer = document.createElement("div");
        productsContainer.className = "products-container";

        // Iterate through matching products and create product containers
        matchingProducts.forEach((product, index) => {
          const productContainer = document.createElement("div");
          productContainer.className = "prod-container";
          productContainer.id = `product${index + 1}`;
          productContainer.innerHTML = `
        <img src="${product.image}" alt="${product.name}" class="product-image">
        <h2 class="product-name">${product.name}</h2>
        <div class="star-rating">${generateStarRating(product.ratings)}</div>
        <div class="product-details">
          <p class="product-price">R${product.price.toFixed(2)}</p>
          <button class="buy-button"><img src="${product.buttonImage}" alt="Add to Cart"></button>
        </div>
      `;
          // Apply inline-block style to product containers
          productContainer.style.display = "inline-block";

          // Append each product container to the productsContainer
          productsContainer.appendChild(productContainer);
        });

        // Append the productsContainer to the item-results section
        itemResultsSection.appendChild(productsContainer);
      } else {
        // If no matching product found, display a message or handle it accordingly
        itemResultsSection.innerHTML = "<p>No matching product found!</p>";
      }
    }


    function generateStarRating(ratings) {
      const fullStars = Math.floor(ratings);
      const halfStar = ratings % 1 !== 0;
      const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);

      const stars = '★'.repeat(fullStars) + (halfStar ? '½' : '') + '☆'.repeat(emptyStars);
      return stars;
    }

    const searchButton = document.querySelector(".search-btn");
    searchButton.addEventListener("click", displaySearchResults);
    // Initialize an empty cart.
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Function to add an item to the cart.
    function addToCart(name, price, image) {
      // Check if the item with the same name is already in the cart.
      const existingItem = cart.find(item => item.name === name);

      if (existingItem) {
        // If the item already exists, increase its quantity.
        existingItem.quantity = (existingItem.quantity || 1) + 1;
      } else {
        // If it's a new item, add it to the cart.
        cart.push({
          name,
          price,
          image,
          quantity: 1
        });
      }

      localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Event listener for product click.
    document.querySelectorAll('.product').forEach(product => {
      product.addEventListener('click', function() {
        const name = this.getAttribute('data-name');
        const price = parseFloat(this.getAttribute('data-price'));
        const image = this.getAttribute('data-image');
        addToCart(name, price, image);
        alert(`${name} added to cart!`);
      });
    });

   // Check if the server has just started or restarted
   let lastRestartTimestamp = localStorage.getItem('lastRestartTimestamp');
    let currentTimestamp = Date.now();
    let isServerRestarted = !lastRestartTimestamp || currentTimestamp - lastRestartTimestamp > 60000; // Assuming 60 seconds as a restart threshold

    // Initialize the cart count
    let cartCount = isServerRestarted ? 0 : (localStorage.getItem('cartCount') ? parseInt(localStorage.getItem('cartCount')) : 0);

    // Set the initial cart count in the span
    document.getElementById('cartItemCount').innerText = cartCount;

    // Function to add a product to the cart
    function addToCartCount() {
      // Increment the cart count
      cartCount++;

      // Update the cart count in the span
      document.getElementById('cartItemCount').innerText = cartCount;

      // Store the updated cart count and timestamp in localStorage
      localStorage.setItem('cartCount', cartCount.toString());
      localStorage.setItem('lastRestartTimestamp', currentTimestamp.toString());
    }

    // If the server has just started or restarted, reset the cart count to zero
    if (isServerRestarted) {
      cartCount = 0;
      localStorage.setItem('cartCount', '0');
      localStorage.setItem('lastRestartTimestamp', currentTimestamp.toString());
    }
  </script>

  <script src="script.js"></script>

  <body>