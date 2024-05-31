<?php if ($page=='clients-reg'){?>
    <div class="caption-div reg-form animated fadeInRight">
        <div class="title-div"><i class="bi-person-plus"></i> Grants Application Form <div class="close" title="close"  onclick="alert_close()"><i class="bi-x"></i></div></div>            
        <div class="profile-content-div">
            <div class="form-div">
                <div class="text-div">Kindly fill the form below to Apply For Grants. <span> Importance Notice!</span> Enter your details correctly to avoid rejection and make sure you enter your valid email address because your application number would be sent to your email address upon successfully application</div>
            
                <input type="hidden" name="action" value=""/>
                <div class="data">
                    <i class="bi-person-fill"></i> <label>AGENT ID:</label>
                    <input type="text" id="agent_id" placeholder="AGENT ID" title="AGENT ID"/>
                </div>

                <div class="data">
                    <i class="bi-person"></i> <label>FULLNAME:</label>
                    <input type="text" id="fullname" placeholder="FULL NAME" title="FULL NAME"/>
                </div>

                <div class="data">
                    <i class="bi-person-badge"></i> <label>MOTHER'S MAIDEN NAME:</label>
                    <input type="text" id="maiden_name" placeholder="MOTHER'S MAIDEN NAME" title="MOTHER'S MAIDEN NAME"/>
                </div>

                <div class="data">
                    <i class="bi-calendar3"></i> <label>DATE OF BIRTH:</label>
                    <input type="date" id="dob" title="DATE OF BIRTH"/>
                </div>

                <div class="data">
                    <i class="bi-house"></i> <label>FULL ADDRESS:</label>
                    <input type="text" id="address" placeholder="FULL ADDRESS" title="FULL ADDRESS"/>
                </div>

                <div class="data">
                    <i class="bi-geo-alt"></i> <label>TOWN/CITY:</label>
                    <input type="text" id="town" placeholder="TOWN/CITY" title="TOWN/CITY"/>
                </div>

                <div class="data">
                    <i class="bi-cash"></i> <label>MONTHLY INCOME:</label>
                    <input type="number" id="income" placeholder="0.00" title="MONTHLY INCOME"/>
                </div>

                <div class="data">
                    <i class="bi-telephone"></i> <label>PHONE NUMBER:</label>
                    <input type="text" id="phone_number" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
                </div>

                <div class="data">
                    <i class="bi-envelope"></i> <label>EMAIL ADDRESS:</label>
                    <input type="email" id="email" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS"/>
                </div>

                <div class="data">
                    <i class="bi-briefcase"></i> <label>OCCUPATION:</label>
                    <input type="text" id="occupation" placeholder="OCCUPATION" title="OCCUPATION"/>
                </div>

                <div class="data">
                    <i class="bi-gender-male"></i> <label>YOUR GENDER:</label>
                    <select id="gender">
                        <option value="">Select...</option>
                        <option value="male">MALE</option>
                        <option value="female">FEMALE</option>
                    </select>
                </div>

                <div class="data">
                    <i class="bi-people"></i> <label>MARITAL STATUS:</label>
                    <select id="marital_status">
                        <option value="">Select...</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                    </select>
                </div>

                <div class="data">
                    <i class="bi-credit-card"></i> <label>DO YOU OWN A CREDIT CARD?</label>
                    <select id="credit_card">
                        <option value="">Select...</option>
                        <option value="yes">YES</option>
                        <option value="no">NO</option>
                    </select>
                </div>

                <div class="data">
                    <i class="bi-currency-dollar"></i> <label>DO YOU WANT YOUR GRANTS IN CASH OR CHECK?</label>
                    <select id="prize_cash">
                        <option value="">Select...</option>
                        <option value="cash">CASH</option>
                        <option value="check">CHECK</option>
                    </select>
                </div>
                
                <button class="btn" type="button" title="submit" id="submit_btn" onclick="_user_registration();"><i class="bi-check-lg"></i> Submit Application</button>
            </div>
        </div>
    </div>
<?php }?>