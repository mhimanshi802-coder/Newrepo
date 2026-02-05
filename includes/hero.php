<!-- ===== Hero Section ===== -->
<div class="hero-container">

    <button class="nav-btn left" onclick="prevSlide()">❮</button>

    <div class="hero-slider" id="heroSlider">
        <img src="https://rukminim2.flixcart.com/fk-p-flap/3240/540/image/bf180b7fb22963fa.jpg?q=60">
        <img src="https://rukminim2.flixcart.com/fk-p-flap/3240/540/image/61473d26494cc1f1.jpg?q=60">
        <img src="https://rukminim2.flixcart.com/fk-p-flap/3240/540/image/1338bd4fc60390d8.jpg?q=60">
        <img src="https://rukminim2.flixcart.com/fk-p-flap/3240/540/image/e34543583265a2a6.jpg?q=60">
    </div>

    <button class="nav-btn right" onclick="nextSlide()">❯</button>

</div>
<style>
/* ===== Hero Section ===== */
.hero-container{
    position:relative;
    width:100%;
    overflow:hidden;
    background:#f1f3f6;
}

.hero-slider{
    display:flex;
    transition:transform 0.6s ease-in-out;
}

.hero-slider img{
    width:100%;
    flex-shrink:0;
}

/* Navigation Buttons */
.nav-btn{
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    background:white;
    border:none;
    font-size:28px;
    padding:10px 15px;
    cursor:pointer;
    box-shadow:0 2px 10px rgba(0,0,0,0.2);
    z-index:10;
}

.nav-btn.left{
    left:10px;
}

.nav-btn.right{
    right:10px;
}

/* Hide buttons on small devices (like Flipkart) */
@media(max-width:768px){
    .nav-btn{
        display:none;
    }
}
</style>
<script>
let slider = document.getElementById("heroSlider");
let slides = slider.children.length;
let index = 0;

/* Update Slide */
function updateSlide(){
    slider.style.transform = `translateX(-${index * 100}%)`;
}

/* Next Slide */
function nextSlide(){
    index = (index + 1) % slides;
    updateSlide();
}

/* Previous Slide */
function prevSlide(){
    index = (index - 1 + slides) % slides;
    updateSlide();
}

/* Autoplay (Flipkart style) */
setInterval(() => {
    nextSlide();
}, 4000); // 4 seconds
</script>
