<?php if ($page=='dashboard'){?>
    <div class="main-dashboard-div"> 
        <div class="in-div">
            <div class="panel1">
                <div class="text-div">
                    <p> TOTAL ADMIN/STAFF</p><br />
                    <p><span> 3</span></p>
                </div>
            </div>
            <div class="panel1 panel2">
                <div class="text-div">
                    <p> ACTIVE ADMIN/STAFF</p><br />
                    <p><span> 30</span></p>
                </div>
            </div>
            <div class="panel1">
                <div class="text-div">
                    <p> SUSPENDED ADMIN/STAFF</p><br />
                    <p><span> 3</span></p>
                </div>
            </div>
            <div class="panel1 panel2">
                <div class="text-div">
                    <p> PENDING ADMIN/STAFF</p><br />
                    <p><span> 0</span></p>
                </div>
            </div> 
        </div>
    </div> 
<?php }?>


<?php if ($page=='active-staff'){?>
    <div class="main-dashboard-div">   
        <div class="search-div">
            <div class="search-data">
                <input type="text" id="search" placeholder="Type here to search..." title="Type here to search"/>
            </div>
            <div class="active-admin">
                 <p><i class="bi-people-fill"></i>  ACTIVE ADMINISTRATOR'S LIST</p>
                 <button class="btn" title="Add new staff"  onClick="_get_form('staff_reg');">ADD NEW STAFF <i class="bi-person-plus"></i></button>
            </div>
            <div class="container-div" id="fetch_all_active-staff">
               <script>_all_active_staff()</script>
            </div>
        </div>
    </div> 
<?php }?>



<?php if ($page=='suspended-staff'){?>
    <div class="main-dashboard-div">   
        <div class="search-div">
            <div class="search-data">
                <input type="text" id="search" placeholder="Type here to search..." title="Type here to search"/>
            </div>
            <div class="active-admin">
                 <p><i class="bi-people-fill"></i>  SUSPENDED ADMINISTRATOR'S LIST</p>
                 <button class="btn" type="button" title="Add new staff" id="new_staff_btn" onclick="_get_form('staff_reg');">ADD NEW STAFF <i class="bi-person-plus"></i></button>
            </div>
            <div class="container-div">
                <div class="container-item" onclick="_get_admin_profile('admin-profile');">
                    <div class="profile">
                        <div class="picture-box">
                            <div class="in-div">
                                <img src="all-images/image-pix/friends.png" alt="profile-pic" title="Profile Pix" />
                            </div>
                        </div>
                    </div>
                    <div class="text-div">
                        <p>OGUNLEYE OPEYEMI FORTUNE<br /><hr /></p>
                        <br clear="all"/>
                        <p><span>STAFF ID: STF20231122044308001</span></p>
                        <p><span>09056251889</span></p>
                        <div class="activate-div"> SUSPENDED</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<?php }?>

<script>
    superplaceholder({
        el: search,
            sentences: [ 'Type here to search...'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
</script>


