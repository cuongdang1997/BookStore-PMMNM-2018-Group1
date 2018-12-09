<body>
<article>
    <div class="container">
        <div class="row mt-4 mb-5">
            <div class="col-md-7">
                <div class="heading">
                    <h2 class="display-4 text-heading">Check Out</h2>
                    <p class="text-muted">Personal information and payment</p>
                </div>
            </div>

            <div class="col-md mt-3">
                <div class="row">
                    <!--<div class="col-sm">
                        <a class="check-out" href="#">
                            <img src="assets/images/login.svg" alt="login">
                            <div class="text-login-coupon">
                                <p>LOGIN HERE</p>
                                <p class="text-muted text-small">RETURNING CUSTOMERS</p>
                            </div>
                        </a>
                    </div>-->

                    <div class="col-sm">
                        <a class="check-out" href="#">
                            <img src="assets/images/coupon.svg" alt="coupon">
                            <div class="text-login-coupon">
                                <p>ENTER COUPON</p>
                                <p class="text-muted text-small">TO GET DISCOUNTS</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<section id="check-out-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 billing-details">
                <p>Billing details</p>
                <form>
                    <p class="form-group">
                        <input class="form-control" name="BillingLastName" placeholder="Full name *" value="<?php echo $accProfile->name?>">
                    </p>
                   <!-- <p class="form-group">
                        <select class="form-control">
                            <option value="">Select a country…</option>
                          <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao S.A.R., China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB" selected="selected">United Kingdom (UK)</option><option value="US">United States (US)</option><option value="UM">United States (US) Minor Outlying Islands</option><option value="VI">United States (US) Virgin Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                        </select>
                    </p>-->
                    <p class="form-group">
                        <input class="form-control" name="BillingAddress1" placeholder="House number and street name"
                               value="<?php echo $accProfile->address?>">
                    </p>
                   <!-- <p class="form-group">
                        <input class="form-control" name="BillingPostcode" placeholder="Postcode / ZIP *">
                    </p>-->
                    <p class="form-group">
                        <input class="form-control" name="BillingPhone" placeholder="Phone *" value="<?php echo $accProfile->phoneNumber?>">
                    </p>
                    <p class="form-group">
                        <input class="form-control" name="BillingEmail" placeholder="Email address *" value="<?php echo $accProfile->email?>">
                    </p>
                </form>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-dark mt-4 payment-button" data-toggle="modal" data-target="#myModal">
                    Update profile
                </button>
            </div>

            <div class="col-md-4 additional mt-3">
                <p class="mb-0">Additional information</p>
                <p class="additional-text">Order notes (optional)</p>
                <form>
                    <div class="form-group">
                        <textarea cols="5" rows="2" class="form-control" placeholder="Include custom requirements for this order here"></textarea>
                    </div>
                </form>
            </div>

            <div class="col-md your-order">
                <p>Your order</p>
                <table class="mb-5">
                    <tr class="border-double-tr">
                        <th width="100%">PRODUCT</th>
                        <th>TOTAL</th>
                    </tr>
                <?php  $total = 0;
                        foreach ($cart as $item){
                            $totalItemCart = 0;
                            $total += $item->price*$item->quantity; ?>

                    <tr class="border-double-tr text-black-tr">
                        <td><?php echo $item->title?> × <?php echo $item->quantity?></td>
                        <td>€<?php echo number_format($item->price*$item->quantity, 2)?></td>
                    </tr>
                    <?php } ?>
                   <!-- <tr class="border-single-tr">
                        <td>SUBTOTAL</td>
                        <td class="text-black-tr">€12.50</td>
                    </tr>-->
                    <tr>
                        <td >TOTAL</td>
                        <td class="text-black-tr">€<?php echo number_format($total, 2)?></td>
                    </tr>
                </table>
             <!--   <p id="payment-heading" class="border-double-tr pb-3">Payment Method</p>

                <div id="payment">
                    <div class="mt-3 payment-notice">
                        <p>Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.</p>
                    </div>-->
                    <div class="mt-4 form-check-label">
                        <input type="checkbox" class="payment-checkbox"> <span class="text-muted">I have read and agree to the website</span> <span>terms and conditions </span> <span class="text-muted">*</span>
                    </div>

                    <a href="#" onclick="checkOut()" class="btn btn-dark mt-4 payment-button">PLACE ORDER</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Modal -->
<div class="modal" id="myModal" style="z-index: 10000002">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update profile</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="#">
                    <div class="form-group">
                        <label for="email">Full Name:</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $accProfile->name?>" placeholder="Full Name" name="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Address:</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $accProfile->address?>" placeholder="Address" name="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Phone Number:</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $accProfile->phoneNumber?>" placeholder="Phone Number" name="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" value="<?php echo $accProfile->email?>" placeholder="Email" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Update profile</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>