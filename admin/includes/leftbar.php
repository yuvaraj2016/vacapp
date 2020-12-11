<?php
if ($_SESSION['ur'] == 'Admin' || $_SESSION['ur'] == 'Super Admin' ||  $_SESSION['ur'] == 'Leasor' ||  $_SESSION['ur'] == 'Supervisor') {
    ?>
    <!--<nav class="ts-sidebar">
        <ul class="ts-sidebar-menu">

            <li class="ts-label" style="color: white;"></li>
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li><a href="#"><i class="glyphicon glyphicon-user"></i> User</a>
                        <ul>  
                            <li><a href="ht-manage-user.php">Create User</a></li>  
                            <li><a href="ht-manage-useraccess.php">User  Access</a></li> 
                            <li><a href="ht-manage-userrole.php">Default Roles And Pages</a></li>
                              
                        </ul>
                    </li>

            <li><a href="#"><i class="glyphicon glyphicon-wrench"></i> Configuration</a>              
                <ul>
                    <li><a href="#"><i class="fa fa-car"></i> Cars</a>
                        <ul>
                            <li><a href="ht-manage-createmaker.php">Car Makers</a></li>
                            <li><a href="ht-manage-cartype.php">Car type</a></li>
                            <li><a href="ht-manage-fueltype.php">Fuel Type</a></li>
                            <li><a href="ht-manage-createlist.php">Car List</a></li>
                            <li><a href="ht-manage-createmodel.php">Car Models</a></li>
                            
                           
                                
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-star"></i> Rating</a>
                        <ul>
                            <li><a href="#">Driver Rating</a></li>
                            <li><a href="#">Empty Rating</a></li>
                            <li><a href="#">Mileage Rating</a></li>
                            <li><a href="#">Driver Rating</a></li>
                            <li><a href="#">Trip</a></li>
                            <li><a href="#">Category Rating</a></li>
                            <li><a href="#">Incentives</a></li>
                        </ul>                                    
                    </li>
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i>Owner</a>
                        <ul>
                    <li><a href="ht-manage-owner-master.php"><i class="glyphicon glyphicon-calendar"></i>Owner Master</a>
                        </ul>
                    </li>
                     <li><a href="#"><i class="glyphicon glyphicon-user"></i>Driver</a>
                        <ul>
                    <li><a href="ht-manage-driver-lists.php"><i class="glyphicon glyphicon-calendar"></i>Driver Master</a>
                        </ul>
                    </li>
                   
                </ul>
            </li>
            <li><a href="#"><i class="glyphicon glyphicon-road"></i> Car Tracker</a>              
                <ul>
                    <li><a href="ht-manage-car.php"><i class="fa fa-car"></i> Car Master</a>  </li>
                    <li><a href="ht-manage-insurance.php"><i class="glyphicon glyphicon-heart"></i> Insurance</a>     </li>
                    <li><a href="ht-manage-service.php"><i class="glyphicon glyphicon-wrench"></i> Service</a>   </li>
                    <li><a href="ht-manage-diesel.php"><i class="glyphicon glyphicon-tint"></i> Diesel</a>   </li>
                    <li><a href="ht-manage-misc.php"><i class="glyphicon glyphicon-gbp"></i> Misc Expenses</a>   </li>
                   <li><a href="ht-bulk.php"><i class="glyphicon glyphicon-file"></i>Bulk Upload</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Driver Tracker</a>              
                <ul>
                    <li><a href="ht-manage-driver-category.php"><i class="fa fa-car"></i>Driver Category</a></li>
                    <li><a href="ht-manage-driver-lists.php"><i class="glyphicon glyphicon-scale"></i> Driver Master</a>  </li>
                    <li><a href="ht-manage-fuel.php"><i class="glyphicon glyphicon-oil"></i> Fuel Efficiency</a>     </li>
                    <li><a href="ht-manage-trip.php"><i class="glyphicon glyphicon-sort"></i> Trips</a>   </li>
                    <li><a href="ht-manage-target.php"><i class="glyphicon glyphicon-time"></i> Targets</a>   </li>
                     <li><a href="ht-manage-toll-tracker.php"><i class="glyphicon glyphicon-time"></i> Toll Tracker</a>   </li>
                 </ul>
            </li>
            <li> <a href="#"><i class="glyphicon glyphicon-gbp"></i> Finance</a>
                <ul>
                    
                    <li><a href="ht-manage-finance-tracker.php">Finance Tracker</a></li>
                            <li><a href="ht-manage-collection-tracker.php">Collection Tracker</a></li>
                            <li><a href="ht-manage-fleet-incentives-tracker.php">Fleet Incentive Tracker</a></li>
                            <li><a href="ht-manage-fleet-revenue.php">Fleet Revenue</a></li>
                            <li><a href="ht-manage-owner-revenue.php">Owner Revenue</a></li>
                            <li><a href="ht-manage-driver-payout.php">Driver Payout</a></li>
                      
                    
                </ul>
            
            </li>
            <li> <a href="ht-report.php"><i class="glyphicon glyphicon-calendar"></i> Reports</a></li>
            <li> <a href="ht-users.php"><i class="glyphicon glyphicon-user"></i> Users</a></li>



        </ul>
    </nav>-->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="dashboard.php" aria-expanded="false"><i class="mdi mdi-av-timer"></i><span class="hide-menu">Dashboard </span></a>

                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Masters</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Masters</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-car.php" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Car Master</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-owner-master.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Owner Master </span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-driver-lists.php" class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu"> Driver Master </span></a></li>

                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-currency-us"></i> <span class="hide-menu">Expense Tracker</span></li>
                    <li class="sidebar-item "> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-currency-inr"></i><span class="hide-menu">Expenses</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-diesel.php" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu"> Diesel</span></a></li>
                           
                            <li class="sidebar-item"><a href="ht-manage-toll-tracker.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Toll</span></a></li>
                           
                          <!--  <li class="sidebar-item"><a href="ht-manage-app-toll-tracker.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu">App Toll</span></a></li>-->
                            
                            <li class="sidebar-item"><a href="ht-manage-misc.php" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Misc</span></a></li>
                            
                                 <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-car"></i> <span class="hide-menu">Bill Uploads</span></a>
                                <ul aria-expanded="false" class="collapse second-level">
                                     <li class="sidebar-item"><a href="ht-manage-dieselbill-uploads.php" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu"> Diesel Bill Upload</span></a></li>
                                      <li class="sidebar-item"><a href="ht-manage-tollbill-uploads.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Toll Bill Upload</span></a></li>
                                      <li class="sidebar-item"><a href="ht-manage-app-tollbill-uploads.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> App Toll Bills</span></a></li>
                                       <li class="sidebar-item"><a href="ht-manage-miscbill-uploads.php" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Misc Bill Upload</span></a></li>
                                    
                                    
                                </ul>
                            </li>
                            
                           
                            <li class="sidebar-item"><a href="ht-manage-insurance.php" class="sidebar-link"><i class="mdi mdi-cash"></i><span class="hide-menu"> Insurance</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-service.php" class="sidebar-link"><i class="mdi mdi-wrench"></i><span class="hide-menu"> Service</span></a></li>

                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-highway"></i> <span class="hide-menu">Tracker</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-highway"></i><span class="hide-menu">Drive Tracker</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-trip.php" class="sidebar-link"><i class="mdi mdi-google-maps"></i><span class="hide-menu"> Trips</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-fuel.php" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu"> Fuel Efficiency</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-driver-incentives.php" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu">Driver Incentives</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-target.php" class="sidebar-link"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu"> Targets</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-leaves-tracker.php" class="sidebar-link"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu"> Leaves Tracker</span></a></li>
                        
                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-car-electric"></i> <span class="hide-menu">Fleet</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-car"></i><span class="hide-menu">Fleet</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-stickering-tracker.php" class="sidebar-link"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu"> Stickering Tracker</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-accidents-tracker.php" class="sidebar-link"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu"> Accidents Tracker</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-assets-tracker.php" class="sidebar-link"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Assets Tracker</span></a>
                             <ul aria-expanded="false" class="collapse second-level">
                                    <li class="sidebar-item"><a href="ht-manage-assets-tracker.php" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu">Assets Assignment</span></a></li>
                                    <li class="sidebar-item"><a href="ht-manage-assets-inventory.php" class="sidebar-link"><i class="mdi mdi-car"></i><span class="hide-menu"> Assets Inventory</span></a></li>
                                
                                </ul>
                             </li>
                            <li class="sidebar-item"><a href="ht-manage-fc.php" class="sidebar-link"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu"> FC Tracker</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-permit.php" class="sidebar-link"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Permit Tracker</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-recharge-tracker.php" class="sidebar-link"><i class="mdi mdi-cellphone-dock"></i><span class="hide-menu">Recharge Tracker</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-bank"></i> <span class="hide-menu">Finance</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-bank"></i><span class="hide-menu">Finance</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-finance-tracker.php" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu"> Finance Tracker</span></a></li>

                            <li class="sidebar-item"><a href="ht-manage-owner-revenue.php" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Owner Revenue</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-driver-payout.php" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu">  Driver Payout</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-fleet-incentives-tracker.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Fleet Incentives</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-fleet-revenue.php" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Fleet Revenue</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-dispute-amount.php" class="sidebar-link"><i class="mdi mdi-hexagon-multiple"></i><span class="hide-menu">Dispute Amount</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-driver-advance.php" class="sidebar-link"><i class="mdi mdi-currency-inr"></i><span class="hide-menu">Driver Advance</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-folder-multiple"></i> <span class="hide-menu">Reports</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-folder-multiple"></i><span class="hide-menu"> Reports</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-view-ActiveDrivers.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu">  Active Drivers</span></a></li>
                            <li class="sidebar-item"><a href="ht-view-TotalTrips.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-car"></i><span class="hide-menu"> Total Trip </span></a></li>
                            <li class="sidebar-item"><a href="ht-view-TotalKms.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-speedometer "></i><span class="hide-menu"> Total Kilometers</span></a></li>
                             <li class="sidebar-item"><a href="ht-view-TotalCost.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-currency-inr  "></i><span class="hide-menu">  Total Cost</span></a></li>
                            <li class="sidebar-item"><a href="ht-view-DieselConsumption.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-water"></i><span class="hide-menu"> Diesel Consumption</span></a></li>
                            <li class="sidebar-item"><a href="ht-view-DieselCost.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu">Diesel Cost</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-collection-tracker.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Collection Tracker</span></a></li>
                            <li class="sidebar-item"><a href="ht-driver-daily-payout.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Driver Daily Payout</span></a></li>
                        </ul>
                    </li>
               
                    <li class="nav-small-cap"><i class="mdi mdi-account-users"></i> <span class="hide-menu">Users</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-user.php" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu">  User Management</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-useraccess.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> User Access </span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-driver-category.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Driver Category</span></a></li>

                        </ul>
                    </li>
                         <li class="nav-small-cap"><i class="mdi mdi-settings"></i> <span class="hide-menu">Configure</span></li>                     
                    <li class="sidebar-item config"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Configure</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-car"></i> <span class="hide-menu">Cars</span></a>
                                <ul aria-expanded="false" class="collapse second-level">
                                    <li class="sidebar-item"><a href="ht-manage-createmaker.php" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu">Car Makers</span></a></li>
                                    <li class="sidebar-item"><a href="ht-manage-createlist.php" class="sidebar-link"><i class="mdi mdi-car"></i><span class="hide-menu"> Car List</span></a></li>
                                    <li class="sidebar-item"><a href="ht-manage-createmodel.php" class="sidebar-link"><i class="mdi mdi-car"></i><span class="hide-menu"> Car Models</span></a></li>
                                    <li class="sidebar-item"><a href="ht-manage-cartype.php" class="sidebar-link"><i class="mdi mdi-car "></i><span class="hide-menu">  Car Type</span></a></li>
                                    <li class="sidebar-item"><a href="ht-manage-fueltype.php" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu">  Fuel Type</span></a></li>
                                     <li class="sidebar-item"><a href="ht-manage-asset-types.php" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu"> Asset Type</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i> <span class="hide-menu">User</span></a>
                                <ul aria-expanded="false" class="collapse second-level">
                                    <li class="sidebar-item"><a href="ht-manage-userrole.php" class="sidebar-link"><i class="mdi mdi-account-convert"></i><span class="hide-menu"> Roles & Access</span></a></li>

                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-ticket-percent"></i> <span class="hide-menu">Driver</span></a>
                                <ul aria-expanded="false" class="collapse second-level">
                                    <li class="sidebar-item"><a href="ht-manage-driver-daily-percent.php" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu">Daily Pay Percent</span></a></li>
                                    <li class="sidebar-item"><a href="ht_manage_conf_driver_incentives.php" class="sidebar-link"><i class="mdi mdi-car"></i><span class="hide-menu"> Driver Incentives</span></a></li>
                                    <!-- <li class="sidebar-item"><a href="ht-manage-createmodel.php" class="sidebar-link"><i class="mdi mdi-car"></i><span class="hide-menu"> Car Models</span></a></li>
                                    <li class="sidebar-item"><a href="ht-manage-cartype.php" class="sidebar-link"><i class="mdi mdi-car "></i><span class="hide-menu">  Car Type</span></a></li>
                                    <li class="sidebar-item"><a href="ht-manage-fueltype.php" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu">  Fuel Type</span></a></li>
                                     <li class="sidebar-item"><a href="ht-manage-asset-types.php" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu"> Asset Type</span></a></li> -->
                                </ul>
                            </li>


                            <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-ticket-percent"></i> <span class="hide-menu">Fleet</span></a>
                                <ul aria-expanded="false" class="collapse second-level">
                                <li class="sidebar-item"><a href="ht-manage-service-center.php" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Service Center</span></a></li>
                                    <!-- <li class="sidebar-item"><a href="ht-manage-createmodel.php" class="sidebar-link"><i class="mdi mdi-car"></i><span class="hide-menu"> Car Models</span></a></li>
                                    <li class="sidebar-item"><a href="ht-manage-cartype.php" class="sidebar-link"><i class="mdi mdi-car "></i><span class="hide-menu">  Car Type</span></a></li>
                                    <li class="sidebar-item"><a href="ht-manage-fueltype.php" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu">  Fuel Type</span></a></li>
                                     <li class="sidebar-item"><a href="ht-manage-asset-types.php" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu"> Asset Type</span></a></li> -->
                                </ul>
                            </li>


 
                        </ul>
                    </li>

                    <li class="nav-small-cap"><i class="mdi mdi-account-users"></i> <span class="hide-menu">Audits</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Audits</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-car-audit.php" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu">Car Master Audit</span></a></li>
                           <!-- <li class="sidebar-item"><a href="ht-manage-toll-audit.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu">Toll Audit</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-app-toll-audit.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu">App Toll Audit</span></a></li>-->
                            <li class="sidebar-item"><a href="ht-manage-diesel-audit.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu">Diesel Audit</span></a></li>


                            <li class="sidebar-item"><a href="ht-manage-toll-audit.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu">Toll Audit</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-app-toll-audit.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu">App Toll Audit</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-misc-expence-audit.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu">Misc Expence Audit</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-insurance-audit.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu">Insurance Audit</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-service-audit.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu">Service Audit</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    
<?php }
if ($_SESSION['ur'] == 'Owner') {
    ?>
    
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="dashboard.php" aria-expanded="false"><i class="mdi mdi-av-timer"></i><span class="hide-menu">Dashboard </span></a>

                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Masters</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Masters</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
          
                  
                            <li class="sidebar-item"><a href="ht-manage-car.php" class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu"> Car Master </span></a></li>

                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-currency-us"></i> <span class="hide-menu">Expense Tracker</span></li>
                    <li class="sidebar-item "> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-currency-inr"></i><span class="hide-menu">Expenses</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-diesel.php" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu"> Diesel</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-toll-tracker.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Toll</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-misc.php" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Misc</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-insurance.php" class="sidebar-link"><i class="mdi mdi-cash"></i><span class="hide-menu"> Insurance</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-service.php" class="sidebar-link"><i class="mdi mdi-wrench"></i><span class="hide-menu"> Service</span></a></li>

                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-highway"></i> <span class="hide-menu">Drive Tracker</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-highway"></i><span class="hide-menu">Drive Tracker</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            
                              <li class="sidebar-item"><a href="ht-manage-trip.php" class="sidebar-link"><i class="mdi mdi-google-maps"></i><span class="hide-menu"> Trips</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-fuel.php" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu"> Fuel Efficiency</span></a></li>
            


                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-bank"></i> <span class="hide-menu">Finance</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-bank"></i><span class="hide-menu">Finance</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
             
                            <li class="sidebar-item"><a href="ht-manage-owner-revenue.php" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Owner Revenue</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-driver-payout.php" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu">  Driver Payout</span></a></li>
                      

                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-folder-multiple"></i> <span class="hide-menu">Reports</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-folder-multiple"></i><span class="hide-menu"> Reports</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-view-ActiveDrivers.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu">  Active Drivers</span></a></li>
                            <li class="sidebar-item"><a href="ht-view-TotalTrips.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-car"></i><span class="hide-menu"> Total Trip </span></a></li>
                            <li class="sidebar-item"><a href="ht-view-TotalKms.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-speedometer "></i><span class="hide-menu"> Total Kilometers</span></a></li>
                             <li class="sidebar-item"><a href="ht-view-TotalCost.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-currency-inr  "></i><span class="hide-menu">  Total Cost</span></a></li>
                            <li class="sidebar-item"><a href="ht-view-DieselConsumption.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-water"></i><span class="hide-menu"> Diesel Consumption</span></a></li>
                            <li class="sidebar-item"><a href="ht-view-DieselCost.php?firstdate=<?php echo date('Y-m-d', strtotime("-1 days")); ?>" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu">Diesel Cost</span></a></li>

                        </ul>
                    </li>
               
                    <li class="nav-small-cap"><i class="mdi mdi-account-users"></i> <span class="hide-menu">Users</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-user.php" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu">  User Management</span></a></li>
                    

                        </ul>
                   
                    
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
<?php } elseif ($_SESSION['urid'] == 5) {
    ?>
  <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
<!--                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="dashboard.php" aria-expanded="false"><i class="mdi mdi-av-timer"></i><span class="hide-menu">Dashboard </span></a>

                    </li>-->
<!--                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Masters</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Masters</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-car.php" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Car Master</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-owner-master.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Owner Master </span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-driver-lists.php" class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu"> Driver Master </span></a></li>

                        </ul>
                    </li>-->
                    <li class="nav-small-cap"><i class="mdi mdi-currency-us"></i> <span class="hide-menu">Expense Tracker</span></li>
                    <li class="sidebar-item "> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-currency-inr"></i><span class="hide-menu">Expenses</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-diesel.php" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu"> Diesel</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-toll-tracker.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Toll</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-misc.php" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Misc</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-insurance.php" class="sidebar-link"><i class="mdi mdi-cash"></i><span class="hide-menu"> Insurance</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-service.php" class="sidebar-link"><i class="mdi mdi-wrench"></i><span class="hide-menu"> Service</span></a></li>

                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-highway"></i> <span class="hide-menu">Drive Tracker</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-highway"></i><span class="hide-menu">Drive Tracker</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="ht-manage-trip.php" class="sidebar-link"><i class="mdi mdi-google-maps"></i><span class="hide-menu"> Trips</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-fuel.php" class="sidebar-link"><i class="mdi mdi-gas-station"></i><span class="hide-menu"> Fuel Efficiency</span></a></li>
                            <li class="sidebar-item"><a href="ht-manage-target.php" class="sidebar-link"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu"> Targets</span></a></li>


                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-bank"></i> <span class="hide-menu">Finance</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-bank"></i><span class="hide-menu">Finance</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <!--<li class="sidebar-item"><a href="ht-manage-finance-tracker.php" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu"> Finance Tracker</span></a></li>-->
                            <!--<li class="sidebar-item"><a href="ht-manage-collection-tracker.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Collection Tracker</span></a></li>-->
                            <!--<li class="sidebar-item"><a href="ht-manage-owner-revenue.php" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Owner Revenue</span></a></li>-->
                            <li class="sidebar-item"><a href="ht-manage-driver-payout.php" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu">  Driver Payout</span></a></li>
                            <!--<li class="sidebar-item"><a href="ht-manage-fleet-incentives-tracker.php" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Fleet Incentives</span></a></li>-->
                            <!--<li class="sidebar-item"><a href="ht-manage-fleet-revenue.php" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Fleet Revenue</span></a></li>-->

                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
   

    <?php
}
?>
