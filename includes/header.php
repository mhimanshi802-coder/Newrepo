<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flipkart Style Header</title>

<style>
/* ===== Reset ===== */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

/* ===== Header ===== */
header{
    background:#2874f0;
    padding:10px 40px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    color:white;
}

/* Logo */
.logo{
    font-size:24px;
    font-weight:bold;
    cursor:pointer;
}

/* Search Box */
.search-box{
    width:40%;
    display:flex;
}

.search-box input{
    width:100%;
    padding:8px;
    border:none;
    outline:none;
}

.search-box button{
    background:#ffe500;
    border:none;
    padding:8px 15px;
    cursor:pointer;
    font-weight:bold;
}

/* Right Section */
.header-right{
    display:flex;
    align-items:center;
    gap:25px;
}

/* Buttons */
.btn{
    background:white;
    color:#2874f0;
    padding:7px 15px;
    border-radius:2px;
    font-weight:bold;
    cursor:pointer;
}

.cart{
    cursor:pointer;
    position:relative;
}

.cart-count{
    position:absolute;
    top:-8px;
    right:-12px;
    background:red;
    color:white;
    border-radius:50%;
    font-size:12px;
    padding:2px 6px;
}

/* ===== Navigation Menu ===== */
nav{
    background:white;
    padding:10px 40px;
    display:flex;
    gap:30px;
    border-bottom:1px solid #ddd;
}

nav a{
    text-decoration:none;
    color:black;
    font-weight:bold;
}

/* ===== Popup Login ===== */
.login-popup{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.5);
    display:none;
    justify-content:center;
    align-items:center;
}

.popup-content{
    background:white;
    padding:20px;
    width:300px;
    border-radius:5px;
    text-align:center;
}

.popup-content input{
    width:100%;
    margin:10px 0;
    padding:8px;
}

.popup-content button{
    width:100%;
    padding:8px;
    background:#2874f0;
    color:white;
    border:none;
    cursor:pointer;
}

/* Responsive */
@media(max-width:768px){
    .search-box{
        display:none;
    }
}
</style>
</head>

<body>

<!-- Header -->
<header>

    <div class="logo">Flipkart</div>

    <div class="search-box">
        <input type="text" placeholder="Search for products...">
        <button>Search</button>
    </div>

    <div class="header-right">
        <div class="btn" onclick="openLogin()">Login</div>
        <div class="cart">
            🛒 Cart
            <span class="cart-count" id="cartCount">0</span>
        </div>
    </div>

</header>

<!-- Navigation -->
<nav>
    <a href="#">Electronics</a>
    <a href="#">Fashion</a>
    <a href="#">Home</a>
    <a href="#">Appliances</a>
    <a href="#">Grocery</a>
</nav>

<!-- Login Popup -->
<div class="login-popup" id="loginPopup">
    <div class="popup-content">
        <h3>Login</h3>
        <input type="text" placeholder="Enter Mobile Number">
        <button onclick="closeLogin()">Submit</button>
    </div>
</div>

<script>

/* Login Popup */
function openLogin(){
    document.getElementById("loginPopup").style.display="flex";
}

function closeLogin(){
    document.getElementById("loginPopup").style.display="none";
}

/* Cart Counter Example */
let count = 0;

document.querySelector(".cart").addEventListener("click", () => {
    count++;
    document.getElementById("cartCount").innerText = count;
});

</script>

</body>
</html>
