<!-- Footer Start Here -->
<?php 
$cartData = $_SESSION['cart'];
// $requestUri = $_SERVER['REQUEST_URI'];
?>
<footer>


  <!-- #footer start  -->
  
        <div class="footer_container">
            <div class="footer_navs">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">How can we help</a></li>
                </ul>
                <ul>
                    <li><a href="#">Pricacy</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
                <ul>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="footer_contact">
                <h4>Connect with us</h4>
                <ul>
                    <li><a href="#"><img src="assets/images/twitter.svg" alt="twitter"></a></li>
                    <li><a href="#"><img src="assets/images/facebook.svg" alt="facebook"></a></li>
                    <li><a href="#"><img src="assets/images/youtube.svg" alt="youtube"></a></li>
                    <li><a href="#"><img src="assets/images/instagram.svg" alt="Instagram"></a></li>
                </ul>
            </div>

        </div>
    <!-- #footer end -->

	<!-- cart popup icon start -->
	<div id="cpops-floating-cart" class="cpops-toggle-drawer <?php echo count($cartData)? 'cart_not_empty':'';?>">
		<button aria-label="Open CartPops popover" aria-expanded="false" class="cpops-floating-cart__button">
			<div class="cpops-floating-cart__animation"></div>
			<div class="cpops-floating-cart__count">
				<span id="cart_counter"><?php echo count($cartData)?:0;?></span>
			</div>
			<span class="cpops-floating-cart__icon">
				<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
					<path d="M24 3l-.743 2h-1.929l-3.474 12h-13.239l-4.615-11h16.812l-.564 2h-13.24l2.937 7h10.428l3.432-12h4.195zm-15.5 15c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm6.9-7-1.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z"></path>
				</svg>
			</span>
		</button>
	</div>

	<!-- cart popup icon End -->

	<!-- Location popup Start -->
	<div class="location_popup_container_overlay">
		<div class="location_popup_container">
			<h3 class="select_location_title">Select Location</h3>
			<p class="provide_location">Provide your location to serve you better</p>
			<div class="cities">
				<div class="popular_city">
					<h4 class="popular_city_title">Popular Cities</h4>
					<ul class="popular_cities_list d-flex flex-wrap gap-40 ">
						<li class="popular_city_list_item">
							<img decoding="async" src="assets/images/locations/bangalore.png" width="78" height="78" alt="country image for Bangalore">
							<p>Bangalore</p>
						</li>
						<li class="popular_city_list_item">
							<img decoding="async" src="assets/images/locations/chandigarh.png" width="78" height="78" alt="country image for Chandigarh">
							<p>Chandigarh</p>
						</li>
						<li class="popular_city_list_item">
							<img decoding="async" src="assets/images/locations/chennai.png" width="78" height="78" alt="country image for Chennai">
							<p>Chennai</p>
						</li>
						<li class="popular_city_list_item">
							<img loading="lazy" decoding="async" src="assets/images/locations/delhi.png" width="78" height="78" alt="country image for Delhi NCR">
							<p>Delhi NCR</p>
						</li>
						<li class="popular_city_list_item">
							<img loading="lazy" decoding="async" src="assets/images/locations/Jaipur.png" width="78" height="78" alt="country image for Jaipur">
							<p>Jaipur</p>
						</li>
						<li class="popular_city_list_item">
							<img loading="lazy" decoding="async" src="assets/images/locations/Mumbai.png" width="78" height="78" alt="country image for Mumbai">
							<p>Mumbai</p>
						</li>
						<li class="popular_city_list_item">
							<img loading="lazy" decoding="async" src="assets/images/locations/Pune.png" width="78" height="78" alt="country image for Pune">
							<p>Pune</p>
						</li>
					</ul>
				</div>
				<div class="other_city">
					<h4 class="other_city_title">Other Cities</h4>
					<ul class="other_cities_list d-flex flex-wrap gap-20 ">
						<li class="other_city_list_item">
							<p>Coimbatore</p>
						</li>
						<li class="other_city_list_item">
							<p>Guntur</p>
						</li>
						<li class="other_city_list_item">
							<p>Kolkata</p>
						</li>
						<li class="other_city_list_item">
							<p>Lucknow</p>
						</li>
						<li class="other_city_list_item">
							<p>Mysore</p>
						</li>
						<li class="other_city_list_item">
							<p>Surat</p>
						</li>
						<li class="other_city_list_item">
							<p>Vijayawada</p>
						</li>
						<li class="other_city_list_item">
							<p>Coimbatore</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Location popup End -->


</footer>
<!-- Footer Ends Here -->

</div>
<script>
	 // count down timer
	 function startCountdown() {
        const timerElement = document.getElementById('timer');

        function updateCountdown() {
            const now = new Date();
            const currentHour = now.getHours();
            const currentMinutes = now.getMinutes();
            const currentSeconds = now.getSeconds();

            // Calculate remaining time until next 12:00 PM
            const noon = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 12, 0, 0);
            if (now >= noon) {
                noon.setDate(noon.getDate() + 1);
            }

            const timeRemaining = noon - now;

            const hours = Math.floor((timeRemaining / (1000 * 60 * 60)) % 12);
            const minutes = Math.floor((timeRemaining / (1000 * 60)) % 60);
            const seconds = Math.floor((timeRemaining / 1000) % 60);

            // Display the timer
            if (timerElement) {
                timerElement.textContent = `${pad(hours)}:${pad(minutes)}:${pad(seconds)}`;
            }
        }

        function pad(number) {
            return number < 10 ? '0' + number : number;
        }

        // Update the countdown every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }
    startCountdown();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/testimonial.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/location-popup.js"></script>


</body>

</html>