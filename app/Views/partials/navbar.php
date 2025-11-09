<div id="signup-offer">
    <p>Sign up and get 20% off to your first order. <a href="#">Sign Up Now</a></p>
    <div class="cross"><i class="ph ph-x"></i></div>
</div>
<nav id="navbar">
    <p id="main-logo">SHOP.CO</p>
    <ul>
        <li>Shop<i style="margin-top: 4px; margin-left: 5px;" class="ph ph-caret-down"></i></li>
        <li>On Sale</li>
        <li>New Arrivals</li>
        <li>Brand</li>
    </ul>
    <div id="search-bar">
        <i class="ph ph-magnifying-glass"></i>
        <p>Search For Products...</p>
    </div>
    <ul id="actions">
        <li><i class="ph ph-shopping-cart-simple"></i></li>
        <li><i class="ph ph-user-circle"></i></li>
    </ul>
</nav>

<script>
    const navtopCross = document.querySelector('#signup-offer .cross');
    navtopCross.addEventListener('click', function() {
        document.querySelector("#signup-offer").classList.add('closed');
    })

</script>