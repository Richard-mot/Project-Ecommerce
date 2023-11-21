<head>
  <link rel="stylesheet" href="styles.css">
  <style>
    h1 {
      text-align: center;
      margin-top: 50px;

    }


    .first-row {
      display: flex;
      justify-content: space-around;
      align-items: center;
    }



    .container {
      display: flex;
      flex-direction: column;
      height: 100vh;

      justify-content: space-between;

      margin-top: 50px;
    }


    .sub-product {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-bottom: 20px;
    }

    /* Set image dimensions */
    .product-img {
      width: 200px;
      height: 150px;
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

      font-size: 24px;

    }

    .product-details {
      display: flex;

      justify-content: space-between;

      align-items: center;

    }

    .product-price {
      margin: 0;
      color: black;

    }

    .buy-button {
      display: flex;

      align-items: center;

      background: none;
      border: 0;
    }

    .buy-button img {
      width: 40px;

      height: 40px;

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
        <button class="account" id="accountButton">
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
    <h1>ALL ACCESSORIES </h1>
  </div>
  <section id="item-results">

  </section>



  <div class="container">
    <div class="sub-product">
      <div class="prod-container">
        <div>
          <img src="images/USB_C.jpg" alt="failed" class="product-img">
        </div>
        <div>
          <h3>MFI Apple USB C </h3>
        </div>
        <div>
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
        </div>
        <div class="price-cart">
          <div>R299.00</div>
          <div><button class="product" onclick="addToCartCount()" data-name="MFI Apple USB C " data-price="299.00" data-image="images/USB_C.jpg"><img src="images/cart-plus-fill.svg" alt="not visible" class="cart-icon"></button></div>
        </div>
      </div>





      <div class="prod-container">
        <div>
          <img src="images/airpods_pdp_image_position-4__wwen.webp" alt="failed" class="product-img">
        </div>
        <div>
          <h3>Apple Airpods </h3>
        </div>
        <div>
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
          <img src="images/star.png" alt="not found" class="rate-icon">
        </div>
        <div class="price-cart">
          <div>R450.00</div>
          <div><button class="product" onclick="addToCartCount()" data-name="Apple Airpods " data-price="450.00" data-image="images/airpods_pdp_image_position-4__wwen.webp"><img src="images/cart-plus-fill.svg" alt="not visible" class="cart-icon"></button></div>
        </div>


      </div>


    </div>
  </div>
  <script>
    let products = [



      {
        name: "MFI Apple USB C",

        image: "images/USB_C.jpg",
        ratings: 5,
        price: 299.00,

        buttonImage: "images/cart-plus-fill.svg"
      },
      {
        name: "Aple Airpods",

        image: "images/airpods_pdp_image_position-4__wwen.webp",
        ratings: 5,
        price: 450.00,

        buttonImage: "images/cart-plus-fill.svg"
      },


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
        pageInfoDiv.style.display = 'none';
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
  <?php include_once("footer.html") ?>


  <script src="script.js"></script>

  <body>