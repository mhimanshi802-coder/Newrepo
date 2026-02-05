<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>E-Commerce Landing Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>

<body class="bg-gray-100 text-gray-800">

<!-- ================= HEADER ================= -->
<header class="bg-blue-600 text-white">
  <div class="flex items-center justify-between px-4 py-3 max-w-7xl mx-auto">
    <h1 class="text-2xl font-bold">ShopKart</h1>

    <input 
      type="text"
      placeholder="Search for products, brands and more"
      class="hidden md:block w-1/2 px-4 py-2 rounded text-gray-800"
    />

    <div class="flex gap-6 text-sm">
      <span class="cursor-pointer">Login</span>
      <span class="cursor-pointer">Cart</span>
      <span class="cursor-pointer hidden md:block">Become a Seller</span>
    </div>
  </div>

  <!-- Categories -->
  <div class="bg-blue-500">
    <ul class="flex overflow-x-auto scrollbar-hide gap-6 px-4 py-2 text-sm max-w-7xl mx-auto">
      <li>Electronics</li>
      <li>Fashion</li>
      <li>Grocery</li>
      <li>Mobiles</li>
      <li>Home</li>
      <li>Beauty</li>
      <li class="text-yellow-300 font-semibold">Deals</li>
    </ul>
  </div>
</header>

<!-- ================= HERO ================= -->
<section class="bg-white">
  <div class="max-w-7xl mx-auto px-4 py-10 grid md:grid-cols-2 gap-6 items-center">
    <div>
      <h2 class="text-4xl font-bold mb-4 text-blue-600">
        Big Savings Days
      </h2>
      <p class="text-xl mb-6">Up to <span class="text-yellow-500 font-bold">70% Off</span> on Top Brands</p>
      <div class="flex gap-4">
        <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
          Shop Now
        </button>
        <button class="border border-blue-600 text-blue-600 px-6 py-2 rounded hover:bg-blue-50">
          View Deals
        </button>
      </div>
    </div>

    <img 
      src="https://via.placeholder.com/600x300?text=Promotional+Banner"
      class="rounded shadow"
      alt="Hero Banner"
    />
  </div>
</section>

<!-- ================= BEST OF ELECTRONICS ================= -->
<section class="max-w-7xl mx-auto px-4 py-8">
  <h3 class="text-xl font-semibold mb-4">Best of Electronics</h3>

  <div class="flex gap-4 overflow-x-auto scrollbar-hide">
    <!-- Card -->
    <div class="bg-white min-w-[200px] p-4 rounded shadow hover:shadow-lg transition">
      <img src="https://via.placeholder.com/150" class="mx-auto mb-3" />
      <h4 class="font-semibold">Wireless Headphones</h4>
      <p class="text-green-600 font-bold">₹1,999 <span class="line-through text-gray-400 text-sm">₹3,999</span></p>
      <p class="text-sm text-yellow-500">50% OFF ⭐ 4.5</p>
    </div>

    <div class="bg-white min-w-[200px] p-4 rounded shadow hover:shadow-lg transition">
      <img src="https://via.placeholder.com/150" class="mx-auto mb-3" />
      <h4 class="font-semibold">Smart Watch</h4>
      <p class="text-green-600 font-bold">₹2,499 <span class="line-through text-gray-400 text-sm">₹4,999</span></p>
      <p class="text-sm text-yellow-500">50% OFF ⭐ 4.3</p>
    </div>
  </div>
</section>

<!-- ================= TOP DEALS ================= -->
<section class="max-w-7xl mx-auto px-4 py-8">
  <h3 class="text-xl font-semibold mb-4">Top Deals Today</h3>

  <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="bg-white p-4 rounded shadow hover:shadow-lg transition">
      <img src="https://via.placeholder.com/150" class="mx-auto mb-3" />
      <h4 class="font-semibold">Men Sneakers</h4>
      <p class="text-green-600 font-bold">₹1,299</p>
      <p class="text-sm text-yellow-500">40% OFF ⭐ 4.2</p>
    </div>

    <div class="bg-white p-4 rounded shadow hover:shadow-lg transition">
      <img src="https://via.placeholder.com/150" class="mx-auto mb-3" />
      <h4 class="font-semibold">Kitchen Mixer</h4>
      <p class="text-green-600 font-bold">₹3,499</p>
      <p class="text-sm text-yellow-500">35% OFF ⭐ 4.1</p>
    </div>
  </div>
</section>

<!-- ================= BANK OFFER ================= -->
<section class="bg-yellow-100 py-6">
  <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
    <p class="font-semibold">💳 No-Cost EMI | Extra 10% Off with Bank Cards</p>
    <button class="bg-blue-600 text-white px-6 py-2 rounded">
      View Offers
    </button>
  </div>
</section>

<!-- ================= BRANDS ================= -->
<section class="max-w-7xl mx-auto px-4 py-8">
  <h3 class="text-xl font-semibold mb-4">Featured Brands</h3>
  <div class="grid grid-cols-3 md:grid-cols-6 gap-4">
    <img src="https://via.placeholder.com/120x60" />
    <img src="https://via.placeholder.com/120x60" />
    <img src="https://via.placeholder.com/120x60" />
  </div>
</section>

<!-- ================= APP DOWNLOAD ================= -->
<section class="bg-blue-600 text-white py-10">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <h3 class="text-2xl font-bold mb-2">Download Our App</h3>
    <p class="mb-4">Get exclusive app-only offers</p>
    <button class="bg-yellow-400 text-black px-6 py-2 rounded">
      Download Now
    </button>
  </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="bg-gray-900 text-gray-300 py-10">
  <div class="max-w-7xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-6 text-sm">
    <div>
      <h4 class="font-semibold mb-2">About</h4>
      <p>Company Info</p>
      <p>Careers</p>
    </div>
    <div>
      <h4 class="font-semibold mb-2">Help</h4>
      <p>Payments</p>
      <p>Shipping</p>
    </div>
    <div>
      <h4 class="font-semibold mb-2">Policy</h4>
      <p>Privacy</p>
      <p>Returns</p>
    </div>
    <div>
      <h4 class="font-semibold mb-2">Social</h4>
      <p>Facebook</p>
      <p>Instagram</p>
    </div>
  </div>

  <p class="text-center text-xs mt-6">
    © 2026 ShopKart. All rights reserved.
  </p>
</footer>

</body>
</html>

