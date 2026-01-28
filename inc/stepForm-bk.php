
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
                <div class="steps step1 active">

                    <h3> Do you have sole ownership of the property or do you share ownership with your spouse or partner? </h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="ownership">
                            <div class="option-title">I Am The Sole Owner Of The Property</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="ownership">
                            <div class="option-title">Joint Ownership With Spouse</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="ownership">
                            <div class="option-title">Joint Ownership With Partner</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step2 d-none">
                    <h3>Is your share in the property worth at least AED 1 million?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="propshare">
                            <div class="option-title">Yes</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="propshare">
                            <div class="option-title">No</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step3 d-none">
                    <h3>Is the property mortgaged or under an installment plan?</h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="morinstal">
                            <div class="option-title">Mortgaged</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="morinstal">
                            <div class="option-title">Fully Paid</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="morinstal">
                            <div class="option-title">Partially Paid</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step4 d-none">
                    <h3> Is the property off-plan (under construction) or ready? </h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="offplan">
                            <div class="option-title">Off-plan (Under Construction)</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="offplan">
                            <div class="option-title">Ready Property</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step5 d-none">
                    <h3> Do you have dependents to sponsor under this visa? </h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="dependent">
                            <div class="option-title">Yes</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="dependent">
                            <div class="option-title">No</div>
                        </label>
                    </div>
                </div>
                
                <?php /* ?>
                <div class="steps step6 d-none">
                    <h3> Will you be able to request an NOC from your current sponsor? </h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">Yes</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">No</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step7 d-none">
                    <h3> How many employees are working in your company? </h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">10 Employees</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">More than 10 Employees</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">More than 50 & above</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step8 d-none">
                    <h3> Do you hold any managerial or C-level position? </h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">Yes</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">No</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step9 d-none">
                    <h3> Does your company fall under mainland or free zone? </h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">Mainland</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">Free Zone</div>
                        </label>
                    </div>
                </div>
                
                <div class="steps step10 d-none">
                    <h3> Do you have dependents to sponsor under this visa? </h3>

                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">Yes</div>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="noc">
                            <div class="option-title">No</div>
                        </label>
                    </div>
                </div> 
                <?php */ ?>  

                <div class="completeForm d-none">
                    <h3> Your Golden Visa assessment is ready!</h3>
                    <p>Please share your details to receive your results.</p>

                    <div class="fieldDv">
                        <label>Full Name</label>
                        <input type="text" name="fname" class="field" placeholder="Enter First Name" />
                    </div>

                    <div class="fieldDv">
                        <label>Email</label>
                        <input type="email" name="email" class="field" placeholder="Enter Email" />
                    </div>

                    <div class="fieldDv">
                        <label>Phone NUmber</label>
                        <input type="text" name="phone" class="field" placeholder="Enter Phone Number" />
                    </div>

                    <div class="fieldDv">
                        <label>Nationality</label>
                        <select name="nationality" class="field"><option value="">Select Your Nationality</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cabo Verde">Cabo Verde</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo (Brazzaville)">Congo (Brazzaville)</option><option value="Congo (Kinshasa)">Congo (Kinshasa)</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Eswatini">Eswatini</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="North Macedonia">North Macedonia</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>
                    </div>

                    
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