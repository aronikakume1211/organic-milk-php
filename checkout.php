<?php
session_start();
include_once('model/ProductModel.php');

if (array_key_exists('cart', $_SESSION) && count($_SESSION['cart']) > 0) {
    $cartData = $_SESSION['cart'];
} else {
    header('location:/');
}

$productModel = new ProductModel();

?>
<?php include_once('view/checkoutheader.php') ?>
<!-- Form Block Start Here -->
<div class="checkout-form-block">
    <div class="container">
        <div class="checkout-form">
            <div class="one-two left-col-area">
                <form class="shipping-form needs-validation" novalidate>
                    <div class="accordion" id="checkoutFormAccordion">
                        <div class="accordion-item shipping-btn">
                            <h2 class="accordion-header">
                                <button class="accordion-button" id="shippingBtn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" disabled>
                                    Shipping address
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show shipping-form-block">
                                <div class="accordion-body">
                                    <div class="row justify-content-start g-3">
                                        <div class="col-md-6 field-block">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstname" required>
                                        </div>
                                        <div class="col-md-6 field-block">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" required>
                                        </div>
                                        <div class="col-12 field-block">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea name="" class="form-control" id="address" cols="30" rows="4">

                                                </textarea>
                                            <!-- <input type="text" class="form-control" id="address" required> -->
                                        </div>
                                        <div class="col-md-6 field-block">
                                            <label for="zip-code" class="form-label">Pin Code</label>
                                            <input type="number" class="form-control" id="zip-code" required min="6">
                                        </div>
                                        <div class="col-md-6 field-block">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control" id="city" required>
                                        </div>
                                        <div class="col-md-6 field-block">
                                            <label for="mobile-number" class="form-label">Mobile phone</label>
                                            <input type="number" class="form-control" id="mobile-number" required>
                                        </div>
                                        <div class="col-md-6 field-block">
                                            <label for="email-address" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email-address" required>
                                        </div>
                                        <div class="col-md-12 field-block right-shift ship-fm-bottom">
                                            <button type="button" id="continue-shipping-btn" class="btn btn-purple" style="width: 100%;">
                                                Continue to shipping
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" id="paymentBtn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" disabled>
                                    Delivery slot
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="delivery_slot_box">
                                        <div class="day" id="next-day"></div>
                                        <div class="day_triangle_shape"></div>
                                        <div id="tooltip-content" class="time-slots">
                                            <div class="slot">08 AM – 10 AM</div>
                                            <div class="slot">10 AM – 12 PM</div>
                                            <div class="slot">04 PM – 06 PM</div>
                                            <div class="slot">06 PM – 08 PM</div>
                                            <div class="slot">08 PM – 10 PM</div>
                                        </div>

                                    </div>
                                    <div class="privacy-note-block">
                                        <p>Your personal data will be used to process your order, support your
                                            experience throughout this website, and for other purposes described in our
                                           <a href="/privacypolicy.php" >privacy policy</a>.</p>
                                    </div>
                                    
                                    <div class="submit-form-block">
                                        <button class="btn btn-purple" onclick="return placeOrder()" id="placeorder" type="button">Place order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="one-two right-col-area">
                <h2>
                    <span class="order_summery">
                        Order Summary
                    </span>
                    <span class="show_full_summery" id="show_full_summery">Show full summary</span>
                </h2>
                <div class="order-details-block">
                    <h3>Your Order</h3>
                    <ul>
                        <?php
                        $sub_total = 0;
                        foreach ($cartData as $key => $cd) {
                            if ($key != '') {
                                $productResults = $productModel->getProdutById($key);
                                $row = mysqli_fetch_row($productResults);
                                //print_r($row);
                        ?>
                                <li>
                                    <div class="product-img"><img src="<?php echo $row[1] ?>" style="width:25px;" alt=""></div>
                                    <div class="product-title"><?php echo $row[2] ?>
                                        <div class="qty">Qty <?php echo $cd ?></div>
                                    </div>
                                    <div class="product-price">
                                        <?php if ($row[5] > 0) : ?>
                                            $<?php echo $price = $row[5] * $cd ?>
                                        <?php else : ?>
                                            $<?php echo $price = $row[4] * $cd ?>
                                        <?php endif; ?>
                                        <?php $sub_total += $price; ?>
                                    </div>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <hr>
                <a href="#" class="addDiscount">Add discount Code</a>
                <div class="discount-block">
                    <h3>Discount code</h3>
                    <div class="row">
                        <div class="col-8 mb-6">
                            <input type="text" class="form-control" id="card-number_coupon">
                        </div>
                        <div class="col-4 mb-6">
                            <button class="btn" type="submit">Apply</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="checkout-price-block">
                    <div class="subtotal">
                        <h5>Subtotal</h5>
                        <div class="sub-price">$<?php echo $sub_total ?></div>
                    </div>
                    <hr id="subnext">
                    <div class="total">
                        <h5>Total</h5>
                        <div class="sub-price">$<?php echo $sub_total ?></div>
                        <input type="hidden" name="total" id="total" value="<?php echo $sub_total ?>" />
                    </div>
                    <div class="info-block">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="tw-h-5 tw-w-5 tw-text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <p>100% Money- Back Guarantee! We are so confident you’ll love the world’s freshest eggs
                            that we offer a 100% satisfaction guarantee.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form Block Ends Here -->
</div>
<div class="loader"></div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Enter Verification Code</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        A Verification code has been sent to <span id="ship_mobile"></span>.<br />
                        Please enter it to verify your mobile number.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form>
                            <div class="form-group">
                                <input type="number" class="form-control" id="order_otp">
                                <small><strong>Standard carrier message and data rates may apply.</strong></small>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="float-end"><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 16 16">
                                <g fill="currentColor">
                                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path d="M8 14a1 1 0 1 0 0-2a1 1 0 0 0 0 2" />
                                </g>
                            </svg></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <a href="#" class="float-left">Resend Verification code</a>
                </div>
                <div class="actions">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="verify">verify</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/scripts.js"></script>
<script type="text/javascript">
    var sum = false;
    var total = <?php echo $sub_total; ?>;
    jQuery(document).ready(function() {
        var windowWidth = window.screen.width < window.outerWidth ?
            window.screen.width : window.outerWidth;
        var mobile = windowWidth < 500;
        if (mobile) {
            jQuery('.summary').show();
            jQuery('.addDiscount').show();
            jQuery('.order-details-block').hide();
            jQuery('.subtotal').hide();
            jQuery('#subnext').hide();
            jQuery('.discount-block').hide();
            jQuery('.addDiscount').click(function() {
                // jQuery('.summary').html("Hide full summary");
                jQuery('.order-details-block').show();
                jQuery('.subtotal').show();
                jQuery('.discount-block').show();
                jQuery('#subnext').show();
                jQuery('#show_full_summery').text('Hide full summary');
                sum = true;
            });

            // toggle for order-details-block
            jQuery('#show_full_summery').click(function() {
                console.log();
                jQuery('#show_full_summery').text('Show full summary');
            })

            jQuery('#show_full_summery').click(function() {
                if (sum) {
                    // jQuery(this).html("Show full summary");
                    jQuery('.order-details-block').hide();
                    jQuery('.subtotal').hide();
                    jQuery('.discount-block').hide();
                    jQuery('#subnext').hide();
                    jQuery('#show_full_summery').text('Show full summary');
                    sum = false;
                } else {
                    // jQuery(this).html("Hide full summary");
                    jQuery('.order-details-block').show();
                    jQuery('.subtotal').show();
                    jQuery('.discount-block').show();
                    jQuery('#subnext').show();
                    jQuery('#show_full_summery').text('Hide full summary');
                    sum = true;
                }

            });
        } else {
            jQuery('.summary').hide();
            jQuery('.addDiscount').hide();
        }
        jQuery('#zip-code').change(function() {
            var zip_code = jQuery(this).val();
            var zip_url = "https://api.zippopotam.us/us/" + zip_code;
            jQuery.get(zip_url, function(data) {
                console.log('data:' + data['places'][0]['place name']);
                jQuery('#city').val(data['places'][0]['place name']);
                const selectEl = $('#state');
                selectEl.val(data['places'][0]['state abbreviation']).change();
            });
        });
        jQuery('#zip').change(function() {
            var zip_code = jQuery(this).val();
            var zip_url = "http://api.zippopotam.us/us/" + zip_code;
            jQuery.get(zip_url, function(data) {
                console.log('data:' + data['places'][0]['place name']);
                jQuery('#ship_city').val(data['places'][0]['place name']);
                const selectEl = $('#ship_state');
                selectEl.val(data['places'][0]['state abbreviation']).change();
            });
        });

    });

    // Get city from cookie
    function getCookie(name) {
        let cookieArr = document.cookie.split(';');

        for (let i = 0; i < cookieArr.length; i++) {
            let cookiePair = cookieArr[i].split('=');

            let cookieName = cookiePair[0].trim();
            if (cookieName === name) {
                return decodeURIComponent(cookiePair[1]);
            }
        }

        // Return null if not found
        return null;
    }

    // Usage
    let country_name = "a2simplybetter_country_name";
    let cookieValue = getCookie(country_name);

    let city_value = document.getElementById('city');
    if (cookieValue) {
        city_value.value = cookieValue
    }


    // Delivery slot
    $(document).ready(function() {
        // Function to get the next day
        function getNextDay() {
            const today = new Date();
            const nextDay = new Date(today);
            nextDay.setDate(today.getDate() + 1);
            return nextDay.toDateString();
        }

        // Render the next day
        const nextDayString = getNextDay();
        $('#next-day').text(nextDayString).data('date', nextDayString).addClass('selected');

        $('#next-day').click(function() {
            $('#tooltip-content').show();
        })


        // Initialize the tooltip
        $('#next-day').tooltip({
            items: '#next-day',
            content: $('#tooltip-content').html(),
            show: {
                effect: "fadeIn",
                duration: 200
            },
            hide: {
                effect: "fadeOut",
                duration: 200
            },
            open: function(event, ui) {
                // Handle time slot selection inside the tooltip
                $(ui.tooltip).on('click', '.slot', function() {
                    $('.slot').removeClass('selected');
                    $(this).addClass('selected');
                    console.log('Hello');
                    // Update next-day element with selected time slot
                    const selectedTimeSlot = $(this).text();
                    $('#next-day').text(nextDayString + " - " + selectedTimeSlot);

                    // Close the tooltip
                    $('#next-day').tooltip('close');
                });
            }
        });

        // Select the first time slot by default
        $('#tooltip-content .slot').first().addClass('selected');
        let defaultTimeSlot = $('#tooltip-content .slot').first().text();
        $('#next-day').text(nextDayString + " - " + defaultTimeSlot);

        let selectedTimeSlot = document.querySelectorAll('.slot');
        selectedTimeSlot.forEach(function(slot) {
            slot.addEventListener('click', function() {
                selectedTimeSlot.forEach(function(sl) {
                    sl.classList.remove('selected');
                });
                console.log(slot.innerHTML);
                defaultTimeSlot = slot.innerHTML;
                slot.classList.add('selected');
                $('#next-day').text(nextDayString + " - " + defaultTimeSlot);
                $('.time-slots').hide();
            })
        })




    });
</script>
</body>

</html>