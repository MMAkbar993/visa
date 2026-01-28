
<div id="stepForm" class="stepFormDv" style="display: none;"> 
    <div class="ajxloader"><img src="<?php echo $dir; ?>assets/images/ajaxloader.gif" /></div>
    <div id="formError"></div>
    <div class="innerDv">
        <div class="headerDv">
            <figure class="logo"><img src="<?php echo $dir; ?>assets/images/logo-blue.svg" /></figure>
            <p class="step">Step <span>1</span> of 6</p>
        </div>
        
        <div class="progressDv">
            <div class="progressBar">
                <div class="progressBarInner" style="width: 0%;">
                    <span class="progressCount">0%</span>
                </div>
            </div>
        </div>
        
        <div class="formDv">
            <form action="javascript:;">
                    <h2>Take our free and quick assessment now to get started</h2>
                <div class="steps step1 active" data-step="owns_property_in_uae">

                    <h3 class="d-none">I own a property in the UAE</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="owns_property_in_uae" value="I own a property in the UAE" data-next="property_value_above_2m">
                            <div class="option-title">I own a property in the UAE</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step2 d-none" data-step="property_value_above_2m">
                    <h3>Do you own property in the UAE worth AED 2 million?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="property_value_above_2m" value="Yes" data-next="property_ownership_type">
                            <div class="option-title">Yes</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="property_value_above_2m" value="No" data-next="property_value_range">
                            <div class="option-title">No</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step3a d-none" data-step="property_ownership_type">
                    <h3>Do you have sole ownership of the property or do you share ownership with your spouse or unrelated partner?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="property_ownership_type" value="I am the sole owner of the property" data-next="property_payment_status">
                            <div class="option-title">I am the sole owner of the property</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="property_ownership_type" value="Joint ownership with spouse" data-next="property_payment_status">
                            <div class="option-title">Joint ownership with spouse</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="property_ownership_type" value="Joint ownership with unrelated partner" data-next="share_value_above_2m">
                            <div class="option-title">Joint ownership with unrelated partner</div>
                        </label>
                    </div>
                </div>

                <div class="steps step3b d-none" data-step="property_value_range">
                    <h3>What is the value of your property?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="property_value_range" value="Between AED 750K and AED 1 Million" data-next="completeForm">
                            <div class="option-title">Between AED 750K and AED 1 Million</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="property_value_range" value="Between AED 1 Million and AED 2 Million" data-next="wants_free_eligibility_review">
                            <div class="option-title">Between AED 1 Million and AED 2 Million</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step4a d-none" data-step="share_value_above_2m">
                    <h3>Is your share in the property worth at least AED 2 million?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="share_value_above_2m" value="Yes" data-next="property_payment_status">
                            <div class="option-title">Yes</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="share_value_above_2m" value="No" data-next="completeForm">
                            <div class="option-title">No</div>
                        </label>
                    </div>
                </div>

                <div class="steps step4b d-none" data-step="wants_free_eligibility_review">
                    <h3>Properties purchased below AED 2 million may still qualify based on their current market value. Would you like a free eligibility review?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="wants_free_eligibility_review" value="Yes" data-next="completeForm">
                            <div class="option-title">Yes</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="wants_free_eligibility_review" value="No" data-next="completeForm">
                            <div class="option-title">No</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step5 d-none" data-step="property_payment_status">
                    <h3>Is the property mortgaged or under an installment plan?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="property_payment_status" value="Mortgaged" data-next="property_completion_status">
                            <div class="option-title">Mortgaged</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="property_payment_status" value="Fully Paid" data-next="property_completion_status">
                            <div class="option-title">Fully Paid</div>
                        </label>

                        <label class="radio-option">
                            <input type="radio" name="property_payment_status" value="Partially Paid" data-next="property_completion_status">
                            <div class="option-title">Partially Paid</div>
                        </label>
                    </div>
                </div>

                <div class="steps step6 d-none" data-step="property_completion_status">
                    <h3>Is the property off-plan (Under construction) or ready?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="property_completion_status" value="Off-plan (Under construction)" data-next="has_dependents">
                            <div class="option-title">Off-plan (Under construction)</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="property_completion_status" value="Ready Property" data-next="has_dependents">
                            <div class="option-title">Ready Property</div>
                        </label>
                    </div>
                </div>

                <div class="steps step7 d-none" data-step="has_dependents">
                    <h3>Do you currently have any dependents under your sponsorship?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="has_dependents" value="Yes" data-next="number_of_dependents">
                            <div class="option-title">Yes</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="has_dependents" value="No" data-next="completeForm">
                            <div class="option-title">No</div>
                        </label>
                    </div>
                </div>

                <div class="steps step8 d-none" data-step="number_of_dependents">
                    <h3>How many dependents?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="number_of_dependents" value="1" data-next="completeForm">
                            <div class="option-title">1</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="number_of_dependents" value="2" data-next="completeForm">
                            <div class="option-title">2</div>
                        </label>

                        <label class="radio-option">
                            <input type="radio" name="number_of_dependents" value="3 or more" data-next="completeForm">
                            <div class="option-title">3 or more</div>
                        </label>
                    </div>
                </div>

                <div class="completeForm d-none" data-step="completeForm">
                    <h3>Your Golden Visa assessment is ready!</h3>
                    <p>Please share your details to receive your results.</p>

                    <div class="fieldDv">
                        <label>Full Name</label>
                        <input type="text" name="fname" class="field" placeholder="Enter First Name" />
                    </div>

                    <div class="fieldDv">
                        <label>Email Address</label>
                        <input type="email" name="email" class="field" placeholder="Enter Email" />
                    </div>

                    <div class="fieldDv">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="field" placeholder="Enter Phone Number" />
                    </div>

                    <div class="fieldDv">
                        <label>Nationality</label>
                        <select name="nationality" class="field"><option value="">Select Your Nationality</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cabo Verde">Cabo Verde</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo (Brazzaville)">Congo (Brazzaville)</option><option value="Congo (Kinshasa)">Congo (Kinshasa)</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Eswatini">Eswatini</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="North Macedonia">North Macedonia</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>
                    </div>

                    <p>By submitting this form, you consent to Upzone contacting you via email, phone, and WhatsApp regarding your inquiry. Your data will be handled in accordance with our Privacy Policy, and you can withdraw consent at any time.</p>

                    
                </div>

                <div class="actions">
                    <button type="button" class="btn btn-primary backBtn"> Back </button>
                    <button type="button" class="btn btn-primary continueBtn"> Continue </button>
                    <button type="button" class="btn btn-primary submitBtn d-none"> Submit Assesment </button>
                </div>
                
            </form>
        </div>
    </div>
</div>