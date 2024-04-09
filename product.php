<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Panels</title>
    <link rel="stylesheet" href="style/product.css">
</head>
<body>

<div class="navbar">
    <a href="welkom.php">Home</a>
    <a href="#">Products</a>
    <a href="#">Contact</a>
</div>

<div class="container">
    <h1 style="text-align: center;">Solar Panels</h1>
    
    <div class="package" id="standard-package">
        <h2>Standard Package</h2>
        <p><strong>Price:</strong> $2000</p>
        <p><strong>Specifications:</strong></p>
        <ul>
            <li>Panel Type: Monocrystalline</li>
            <li>Power Output: 300W</li>
            <li>Efficiency: 18%</li>
            <li>Warranty: 10 years</li>
        </ul>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget consectetur turpis. Nam ultrices nisi id tortor varius luctus. Duis eget leo ut urna placerat bibendum. </p>
        <button onclick="addToCart('Standard Package', 2000)">Add to Cart</button>
    </div>
    
    <div class="package" id="premium-package">
        <h2>Premium Package</h2>
        <p><strong>Price:</strong> $3000</p>
        <p><strong>Specifications:</strong></p>
        <ul>
            <li>Panel Type: Polycrystalline</li>
            <li>Power Output: 350W</li>
            <li>Efficiency: 20%</li>
            <li>Warranty: 15 years</li>
        </ul>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget consectetur turpis. Nam ultrices nisi id tortor varius luctus. Duis eget leo ut urna placerat bibendum. </p>
        <button onclick="addToCart('Premium Package', 3000)">Add to Cart</button>
    </div>
        
</div>

<div id="cart" class="container">
    <h2>Shopping Cart</h2>
    <ul id="cart-items"></ul>
    <button onclick="clearCart()">Clear Cart</button>
</div>

<script>
    let cartItems = [];

    function addToCart(itemName, price) {
        cartItems.push({name: itemName, price: price});
        updateCartDisplay();
    }

    function updateCartDisplay() {
        let cartList = document.getElementById('cart-items');
        cartList.innerHTML = '';
        let totalPrice = 0;

        cartItems.forEach(function(item) {
            let listItem = document.createElement('li');
            listItem.textContent = item.name + ' - $' + item.price;
            cartList.appendChild(listItem);
            totalPrice += item.price;
        });

        let totalElement = document.createElement('li');
        totalElement.textContent = 'Total: $' + totalPrice;
        cartList.appendChild(totalElement);
    }

    function clearCart() {
        cartItems = [];
        updateCartDisplay();
    }
</script>

</body>
</html>
