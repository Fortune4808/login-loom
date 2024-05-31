<?php if ($page=='staff_reg'){?>
    <div class="caption-div reg-form animated fadeInRight">
        <div class="title-div"><i class="bi-person-plus"></i> New Staff/Agent Registration Form <div class="close" title="close"  onclick="alert_close()"><i class="bi-x"></i></div></div>            
        <div class="profile-content-div">
            <div class="form-div">
                <div class="text-div">Kindly fill the form below to <span>Add New Staff/Agent</span></div>
            
                <input type="hidden" name="action" value=""/>
                <div class="data">
                    <label>FULLNAME:</label>
                    <input type="text" id="fullname" placeholder="FULL NAME" title="FULL NAME"/>
                </div>

                <div class="data">
                    <label>PHONE NUMBER:</label>
                    <input type="text" id="password" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
                </div>
                <div class="data">
                    <label>EMAIL ADDRESS:</label>
                    <input type="email" id="email" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS"/>
                </div>
                <div class="data">
                    <label>STAFF ROLE:</label>
                    <select>
                        <!-- <option value="active">ACTIVE</option>
                        <option value="suspend">SUSPEND</option> -->
                    </select>
                </div>
                <div class="data">
                    <label>STAFF STATUS:</label>
                    <select>
                        <!-- <option value="active">ACTIVE</option>
                        <option value="suspend">SUSPEND</option> -->
                    </select>
                </div>
                <button class="btn" type="button" title="submit" id="submit_btn" onclick="_sign_in();"><i class="bi-check-lg"></i> Submit</button>
            </div>
        </div>
    </div>
<?php }?>


<?php if ($page=='beneficiary-reg'){?>
    <div class="caption-div reg-form animated fadeInRight">
        <div class="title-div"><i class="bi-person-plus"></i> New Beneficiary Registration Form <div class="close" title="close"  onclick="alert_close()"><i class="bi-x"></i></div></div>            
        <div class="profile-content-div">
            <div class="form-div">
                <div class="text-div">Kindly fill the form below to <span>Add New Beneficiary</span></div>
            
                <input type="hidden" name="action" value=""/>
                <div class="data">
                    <label>FULLNAME:</label>
                    <input type="text" id="fullname" placeholder="FULL NAME" title="FULL NAME"/>
                </div>

                <div class="data">
                    <label>REWARD:</label>
                    <input type="number" id="reward" placeholder="0.00" title="REWARD"/>
                </div>

                <div class="data">
                    <label>STATUS:</label>
                    <select>
                        <!-- <option value="active">ACTIVE</option>
                        <option value="suspend">SUSPEND</option> -->
                    </select>
                </div>
                <button class="btn" type="button" title="submit" id="submit_btn" onclick="_sign_in();"><i class="bi-check-lg"></i> Submit</button>
            </div>
        </div>
    </div>
<?php }?>


<?php if ($page=='pass-form'){?>
    <div class="caption-div reg-form animated fadeInRight">
        <div class="title-div"><i class="bi-lock"></i> Change Password Form <div class="close" title="close"  onclick="alert_close()"><i class="bi-x"></i></div></div>            
        <div class="profile-content-div">
            <div class="form-div">
                <div class="text-div">Enter the <span>OLD PASSWORD</span> and create your <span>NEW PASSWORD</span></div>

                <input type="hidden" name="action" value=""/>
                <div class="data">
                    <label>OLD PASSWORD:</label>
                    <input type="password" id="old_pass" placeholder="ENTER OLD PASSWORD" title="OLD PASSWORD"/>
                </div>

                <div class="data">
                    <label>NEW PASSWORD:</label>
                    <input type="password" id="new_pass" placeholder="CREATE NEW PASSWORD" title="NEW PASSWORD"/>
                </div>

                <div class="data">
                    <label>CONFIRM PASSWORD:</label>
                    <input type="password" id="confirm_pass" placeholder="CONFIRM NEW PASSWORD" title="CONFIRMED PASSWORD"/>
                </div>
                <button class="btn" type="button" title="submit" id="submit_btn" onclick="_submit_();"><i class="bi-arrow-repeat"></i> Submit</button>
            </div>
        </div>
    </div>
<?php }?>


<?php if ($page=='admin-profile'){?>
    <div class="caption-div full-width-caption animated fadeInUp">
        <div class="title-div"><i class="bi-person"></i> ADMINISTRATOR'S PROFILE <div class="close" title="close"  onclick="alert_close()"><i class="bi-x"></i></div></div>            
        <div class="profile-content-div">
            <div class="profile-cover-div"></div>
            
            <div class="profile-summary">
                <label>
                <div class="pix-div"><img src="all-images/image-pix/friends.png" id="passportimg3"/></div>
                </label>				
                
                <div class="text-div">
                    <div class="name">Ogunleye Opeyemi Fortune</div>
                    <div class="text"> STATUS: <strong>ACTIVATED </strong> | LAST LOGIN DATE: <strong> 2024-03-13 17:25:15</strong></div>
                </div>
            </div> 
            
            <div class="admin-profile-div">
                <div class="in-div">
                    <div class="title">BASIC INFORMATION</div>

                    <div class="segment">
                        <div class="data form-segment">
                            <label>SURNAME:</label>
                            <input type="text" id="surname" placeholder="SURNAME" title="SURNAME"/>
                        </div>

                        <div class="data form-segment">
                            <label>OTHER NAMES:</label>
                            <input type="text" id="othername" placeholder="OTHER NAMES" title="OTHER NAMES"/>
                        </div>
                    </div>

                    <div class="segment">
                        <div class="data form-segment">
                            <label>DATE OF BIRTH:</label>
                            <input type="date" id="dob" title="DATE OF BIRTH"/>
                        </div>

                        <div class="data form-segment">
                            <label>GENDER:</label>
                            <select>
                                <option value="male">MALE</option>
                                <option value="female">FEMALE</option>
                            </select>
                        </div>

                        <div class="data form-segment">
                            <label>RELIGION AFFILIATION:</label>
                            <select>
                                <option value="christianity">CHRISTIANITY</option>
                                <option value="muslim">ISLAMIC</option>
                                <option value="others">OTHERS</option>
                            </select>
                        </div>
                    </div>

                    <br clear="all">
                    <br clear="all">

                    <div class="title">CONTACT INFORMATION</div>
                    <div class="segment">
                        <div class="data form-segment">
                            <label>NATIONALITY:</label>
                            <div class="input-group">
                                <input type="text" id="nationality" placeholder="NATIONALITY:" readonly="readonly" title="NATIONALITY"/>
                                <i class="bi-lock"></i>
                            </div>
                        </div>

                        <div class="data form-segment">
                            <label>STATE OF ORIGIN:</label>
                            <select id="state" title="Select State of Origin" onchange="_get_lga()">
                               <option value="<?php echo $state; ?>" selected="selected"><?php echo $state; ?></option>
                                <option value='Abia'>Abia State</option>
                                <option value='Adamawa'>Adamawa State</option>
                                <option value='AkwaIbom'>AkwaIbom State</option>
                                <option value='Anambra'>Anambra State</option>
                                <option value='Bauchi'>Bauchi State</option>
                                <option value='Bayelsa'>Bayelsa State</option>
                                <option value='Benue'>Benue State</option>
                                <option value='Borno'>Borno State</option>
                                <option value='CrossRivers'>CrossRivers State</option>
                                <option value='Delta'>Delta State</option>
                                <option value='Ebonyi'>Ebonyi State</option>
                                <option value='Edo'>Edo State</option>
                                <option value='Ekiti'>Ekiti State</option>
                                <option value='Enugu'>Enugu State</option>
                                <option value='Gombe'>Gombe State</option>
                                <option value='Imo'>Imo State</option>
                                <option value='Jigawa'>Jigawa State</option>
                                <option value='Kaduna'>Kaduna State</option>
                                <option value='Kano'>Kano State</option>
                                <option value='Katsina'>Katsina State</option>
                                <option value='Kebbi'>Kebbi State</option>
                                <option value='Kogi'>Kogi State</option>
                                <option value='Kwara'>Kwara State</option>
                                <option value='Lagos'>Lagos State</option>
                                <option value='Nasarawa'>Nasarawa State</option>
                                <option value='Niger'>Niger State</option>
                                <option value='Ogun'>Ogun State</option>
                                <option value='Ondo'>Ondo State</option>
                                <option value='Osun'>Osun State</option>
                                <option value='Oyo'>Oyo State</option>
                                <option value='Plateau'>Plateau State</option>
                                <option value='Rivers'>Rivers State</option>
                                <option value='Sokoto'>Sokoto State</option>
                                <option value='Taraba'>Taraba State</option>
                                <option value='Yobe'>Yobe State</option>
                                <option value='Zamfara'>Zamafara State</option>
                            </select>
                        </div>

                        <div class="data form-segment">
                            <label>LOCAL GOVT. AREA:</label>
                            <select id="lga" title="Select LOCAL GOVT. AREA" onchange="_get_lga()">
                                <option value="<?php echo $lga; ?>" selected="selected"><?php echo $lga; ?></option>
                            </select>
                        </div>

                    </div>

                    <div class="data address">
                        <label>ADDRESS:</label>
                        <div class="input-group">
                            <input type="text" id="nationality" placeholder="ADDRESS:" title="NATIONALITY"/>
                        </div>
                    </div>
                    <div class="segment">
                        <div class="data form-segment">
                            <label>EMAIL:</label>
                            <div class="input-group">
                                <input type="text" id="email" placeholder="EMAIL ADDRESS:" readonly="readonly" title="EMAIL ADDRESS"/>
                                <i class="bi-lock"></i>
                            </div>
                        </div>

                        <div class="data form-segment">
                            <label>PHONE NUMBER:</label>
                            <input type="text" id="othername" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
                        </div>
                    </div>
                    <br clear="all"/>
                    <br clear="all"/>
                     <div class="title">ACCOUNT INFORMATION</div>

                    <div class="segment">
                        <div class="data form-segment">
                            <label>STAFF ID:</label>
                            <div class="input-group">
                                <input type="text" id="staff_id" placeholder="STAFF ID" readonly="readonly" title="STAFF ID"/>
                                <i class="bi-lock"></i>
                            </div>
                        </div>

                        <div class="data form-segment">
                            <label>POST:</label>
                            <div class="input-group">
                                <input type="text" id="post" placeholder="POST" readonly="readonly" title="POST"/>
                                <i class="bi-lock"></i>
                            </div>
                        </div>

                    </div>

                    <div class="segment">
                        <div class="data form-segment">
                            <label>DATE OF REGISTRATION:</label>
                            <div class="input-group">
                                <input type="text" id="reg_date" placeholder="DATE OF REGISTRATION" readonly="readonly" title="DATE OF REGISTRATION"/>
                                <i class="bi-lock"></i>
                            </div>
                        </div>

                        <div class="data form-segment">
                            <label>LAST LOGIN DATE:</label>
                            <div class="input-group">
                                <input type="text" id="login_date" placeholder="LAST LOGIN DATE" readonly="readonly" title="POST"/>
                                <i class="bi-lock"></i>
                            </div>
                        </div>

                    </div>

                    <br clear="all"/>
                    <br clear="all"/>
                    <div class="title">ADMINISTRATIVE INFORMATION</div>
                    <div class="segment">
                        <div class="data form-segment">
                            <label>USER ROLE:</label>
                            <div class="input-group">
                                <input type="text" id="user_role" placeholder="USER ROLE" readonly="readonly" title="USER ROLE"/>
                                <i class="bi-lock"></i>
                            </div>
                        </div>

                        <div class="data form-segment">
                            <label>USER STATUS:</label>
                            <div class="input-group">
                                <input type="text" id="user_status" placeholder="USER STATUS" readonly="readonly" title="POST"/>
                                <i class="bi-lock"></i>
                            </div>
                        </div>

                    </div>
                    <br clear="all"/>
                    <button class="btn" type="button" title="submit" id="submit_btn" onclick="_update_profile();">UPDATE PROFILE <i class="bi-check-lg"></i></button>
                    
                </div>
            </div>

        </div>
    </div>
<?php }?>
    
    
    
    