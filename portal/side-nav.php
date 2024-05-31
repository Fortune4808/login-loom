<div class="side-nav">
    <div class="in-div">
    <ul>
        <div class="links-div">
            <li onclick="_get_page('dashboard');"><i class="bi-speedometer2"></i> Dashboard</li>
        </div>
            <li onclick="_expand_link('staff');" title="Admin"><i class="bi-person"></i> Admin/Staff <i class="fa fa-chevron-down"></i>
                <div class="dashboard-in" id="staff-li" style="display:none">   
                    <div class="li-in" onclick="_get_page('active-staff');"> - Active Staff</div>
                    <div class="li-in" onclick="_get_page('suspended-staff');"> - Suspended Staff</div>
                </div>
            </li>

            <li onclick="_expand_link('agents');" title="Agents"><i class="bi-person"></i> Agents Page<i class="fa fa-chevron-down"></i>
                <div class="dashboard-in" id="agents-li" style="display:none">   
                    <div class="li-in" onclick="_get_page('active-clients');"> - Active Clients</div>
                    <div class="li-in" onclick="_get_page('beneficiary-list');"> - Beneficiary List</div>
                </div>
            </li>
            
            <li onclick="_expand_link('settings');"  title="Settings">  <i class="bi-gear"></i> Settings  <i class="fa fa-chevron-down"></i>
                <div class="dashboard-in" id="settings-li" style="display:none">   
                    <div class="li-in" onClick=""> - System Settings</div>
                    <div class="li-in" onClick="_get_form('pass-form');"> - Change Password</div>
                </div>
            </li>
     

     
            <li><i class="bi-power"></i> Log-Out</li>
        </div>
    </ul>
</div>