<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="navbar"> 
        <div class="logo">
            <img src="logo.png">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="match.php">Match</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="merch.php">Merch</a></li>
                <li><a href="halloffame.php">Hall of Fame</a></li>
                <li><a href="history.php">History</a></li>
            </ul>
        </nav>
        <button class="login-btn">Login</button>
    </header>

    <div class="merch-menu">
    <a href="#">Men</a>
    <a href="#">Women</a>
    <a href="#">Unisex</a>
        <div class="icons">
            <button class="search-btn">🔍</button>
            <button class="cart-btn">🛒 Cart (0)</button>
        </div>
    </div>

    <main class="product-detail">
        <div class="breadcrumb">
        <a href="#">Home</a> &gt; <a href="#">Category</a> &gt; Jersey
        </div>

    <div class="product-container">
        <div class="product-image">
            <img src="jersey-detail-front.png" alt="Jersey Front">
            <img src="jersey-detail-back.png" alt="Jersey Back">
        </div>

    <div class="product-info">
        <h1>Bird Nerd Jersey</h1>
        <p class="price">$139.99</p>
        <button class="cart-notice">Item Added to Cart</button>

        <div class="product-options">
            <label>
                Gender:
                <select>
                <option value="men">Men</option>
                <option value="women">Women</option>
                </select>
            </label>

            <label>
                Size:
                <select>
                <option value="s">Small</option>
                <option value="m">Medium</option>
                <option value="l">Large</option>
                </select>
            </label>

            <label>
                Quantity:
                <input type="number" min="1" value="1">
            </label>
        </div>

        <button class="add-to-cart">Add to Cart</button>
        <button class="view-cart">View Cart</button>
        <button class="checkout">Checkout</button>

        <p class="description">
          Purchasing official Chelsea FC merchandise not only showcases your support for the club but also ensures high-quality design and materials. Perfect for all fans of The Blues!
        </p>
    </div>
    </div>

    <section class="related-products">
        <h2>Our Other Products</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="jacket.png" alt="Jacket">
                <p>Jacket</p>
                <p>$199.99</p>
            </div>
            <div class="product-card">
                <img src="waterbottle.png" alt="Water Bottle">
                <p>Water Bottle</p>
                <p>$39.99</p>
            </div>
            <div class="product-card">
                <img src="framed-photo.png" alt="Framed Photo">
                <p>Framed Photo</p>
                <p>$79.99</p>
            </div>
            <div class="product-card">
                <img src="jersey12.png" alt="Jersey">
                <p>Jersey</p>
                <p>$139.99</p>
            </div>
        </div>
    </section>
    </main>
</body>
</html>