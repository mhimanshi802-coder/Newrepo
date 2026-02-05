<!-- ===== Footer ===== -->
<footer class="footer">

    <div class="footer-top">

        <div class="footer-col">
            <h4>ABOUT</h4>
            <a href="#">Contact Us</a>
            <a href="#">About Us</a>
            <a href="#">Careers</a>
            <a href="#">Flipkart Stories</a>
            <a href="#">Press</a>
        </div>

        <div class="footer-col">
            <h4>HELP</h4>
            <a href="#">Payments</a>
            <a href="#">Shipping</a>
            <a href="#">Cancellation & Returns</a>
            <a href="#">FAQ</a>
            <a href="#">Report Infringement</a>
        </div>

        <div class="footer-col">
            <h4>POLICY</h4>
            <a href="#">Return Policy</a>
            <a href="#">Terms of Use</a>
            <a href="#">Security</a>
            <a href="#">Privacy</a>
            <a href="#">Sitemap</a>
        </div>

        <div class="footer-col">
            <h4>SOCIAL</h4>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">YouTube</a>
            <a href="#">Instagram</a>
        </div>

        <div class="footer-col address">
            <h4>Registered Office Address</h4>
            <p>
                Flipkart Internet Private Limited,<br>
                Buildings Alyssa, Begonia & Clove Embassy Tech Village,<br>
                Outer Ring Road, Devarabeesanahalli Village,<br>
                Bengaluru, 560103, Karnataka, India
            </p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 Flipkart Clone | Made by You 💙</p>
        <button onclick="subscribe()">Subscribe</button>
    </div>

</footer>
<script>
function subscribe(){
    alert("Thanks for subscribing! 🎉");
}
</script>

    <style>
/* ===== Footer Styling ===== */
.footer{
    background:#172337;
    color:#fff;
    margin-top:40px;
    font-size:14px;
}

/* Top Section */
.footer-top{
    display:flex;
    justify-content:space-between;
    padding:40px;
    flex-wrap:wrap;
}

/* Columns */
.footer-col{
    display:flex;
    flex-direction:column;
    gap:8px;
    min-width:150px;
}

.footer-col h4{
    color:#878787;
    font-size:13px;
    margin-bottom:10px;
}

.footer-col a{
    color:#fff;
    text-decoration:none;
    font-size:14px;
}

.footer-col a:hover{
    text-decoration:underline;
}

/* Address */
.address{
    max-width:300px;
    line-height:1.6;
}

/* Bottom Section */
.footer-bottom{
    border-top:1px solid #454d5e;
    padding:15px 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.footer-bottom button{
    background:#2874f0;
    border:none;
    color:white;
    padding:6px 12px;
    cursor:pointer;
    border-radius:2px;
}

/* Responsive */
@media(max-width:768px){
    .footer-top{
        flex-direction:column;
        gap:25px;
    }
    .footer-bottom{
        flex-direction:column;
        gap:10px;
    }
}
</style>
