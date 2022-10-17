
  <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">

            <nav class="drawer  drawer--dark">
                <div class="drawer-spacer drawer-spacer-border">
                    <div class="media align-items-center">
                        {{-- <img src="{{asset('/')}}assets/images/avatars/andrew-robles-300868.jpg" class="img-fluid rounded-circle mr-2" width="40" alt=""> --}}
                        <div class="media-body" style="line-height: 1.2">
                            <a href="profile.html"><strong>Andrew Robles</strong></a>
                            <div>Site Manager</div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle dropdown-clear-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="profile.html" class="dropdown-item dropdown-item-action ">View Profile</a>
                                <a href="account.html" class="dropdown-item dropdown-item-action ">Edit Account</a>
                                <a href="#" class="dropdown-item dropdown-item-action">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DROPDOWN -->
               
                <!-- HEADING -->
                <div class="drawer-heading">
                    Menu
                </div>
                <!-- MENU -->
                <ul class="drawer-menu" id="mainMenu" data-children=".drawer-submenu">
                    
                    <li class="drawer-menu-item ">
                        <a href="#">
                            <i class="material-icons">home</i>
                            <span class="drawer-menu-text">Dashboard</span>
                      </a>
                    </li>

                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#pageMenu" aria-controls="pageMenu" aria-expanded="false" class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">Reception/ Billing</span>
                      </a>
                        <ul class="collapse" id="pageMenu">
                            
                            <li class="drawer-menu-item"><a href="{{ route('newpatbill') }}">New Bill - New Patient</a></li>
                            <li class="drawer-menu-item"><a href="{{ route('newbilling') }}">New Bill - Old Patient</a></li>
                            <li class="drawer-menu-item"><a href="{{ route('allnewbills') }}">All Bills</a></li>
                            <li class="drawer-menu-item"><a href="{{ route('tokens') }}">Token/Slip Generate</a></li>
                            <li class="drawer-menu-item"><a href="{{ route('duecollection') }}">Due Collection</a></li>
                            <li class="drawer-menu-item"><a href="{{ route('allcollections') }}">Collection History</a></li>
                            <li class="drawer-menu-item"><a href="{{ route('viewmycols') }}">View My Transction</a></li>
                        </ul>
                    </li>
                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#Patients" href="#" data-target="#Patients" aria-controls="Patients" aria-expanded="false" class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">Patients</span>
                      </a>
                        <ul class="collapse" id="Patients">
                            
                            <li class="drawer-menu-item"><a href="{{ route('patients') }}">Patients List</a></li>
                            <li class="drawer-menu-item"><a href="#">Patients History</a></li>
                        </ul>
                    </li>
                     <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#layers" href="#" data-target="#layers" aria-controls="layers" aria-expanded="false" class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">Doctor</span>
                      </a>
                        <ul class="collapse" id="layers">
                           
                            <li class="drawer-menu-item"><a href="{{ route('doctors') }}">Add Doctor</a></li>
                            <li class="drawer-menu-item"><a href="#">Doctor List</a></li>
                        </ul>
                    </li>
                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#Prescription" href="#" data-target="#Prescription" aria-controls="Prescription" aria-expanded="false" class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">Prescription</span>
                      </a>
                        <ul class="collapse" id="Prescription">
                            
                            <li class="drawer-menu-item"><a  href="#">Template Setup</a></li>
                            <li class="drawer-menu-item"><a  href="#">Search Patient</a></li>
                            <li class="drawer-menu-item"><a  href="#">Print (Blank Prescription)</a></li>
                        </ul>
                    </li>
                     <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#LAB" href="#" data-target="#LAB" aria-controls="LAB" aria-expanded="false" class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">LAB Management </span>
                      </a>
                        <ul class="collapse" id="LAB">
                            
                            <li class="drawer-menu-item"><a  href="#">Test Result </a></li>
                            <li class="drawer-menu-item"><a  href="#">Test Result Status</a></li>
                            <li class="drawer-menu-item"><a  href="{{ route('test_categories') }}">Test Category</a></li>
                            <li class="drawer-menu-item"><a  href="{{ route('test_depts') }}">Test Department</a></li>
                            <li class="drawer-menu-item"><a  href="{{ route('tests') }}">Test</a></li>
                            <li class="drawer-menu-item"><a  href="#">Specimen</a></li>
                            <li class="drawer-menu-item"><a  href="{{ route('tests') }}">Analyzer</a></li>

                        </ul>
                    </li>
                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#Referral" href="#" data-target="#Referral" aria-controls="Referral" aria-expanded="false" class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">  Referral/ PC  </span>
                      </a>
                        <ul class="collapse" id="Referral">
                            <li  class="drawer-menu-item" ><a  href="{{ route('referrals') }}">Add Referral</a></li>
                            <li  class="drawer-menu-item" ><a  href="{{ route('referral') }}">Referral Commission</a></li>
                            <li  class="drawer-menu-item" ><a  href="{{ route('referralpayment') }}">Referral Payment</a></li>
                            <li  class="drawer-menu-item" ><a  href="{{ route('referralpay.due') }}">Daily Referral Due Summary</a></li>
                            <li  class="drawer-menu-item" ><a  href="{{ route('referralpay.paid') }}">Daily Referral Paid Summary</a></li>
                            <li  class="drawer-menu-item" ><a  href="{{ route('analyzers') }}">Analyzer</a></li>
                            <li  class="drawer-menu-item" ><a  href="{{ route('specimens') }}">specimans</a></li>
                        </ul>
                    </li>
                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#Account" href="#" data-target="#Account" aria-controls="Account" aria-expanded="false" class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">  Account  </span>
                      </a>
                        <ul class="collapse" id="Account">
                            <li  class="drawer-menu-item" ><a  href="{{ route('incomes') }}">Add Incomes</a></li>
                            <li  class="drawer-menu-item" ><a  href="{{ route('expences') }}">Add Expences</a></li>
                            <li class="drawer-menu-item"><a href="{{ route('allcollections') }}">Collection History</a></li>
                            <li class="drawer-menu-item"><a href="{{ route('discount') }}">Discount History</a></li>
                           
                        </ul>
                    </li>
                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#pageMenu2" aria-controls="pageMenu" aria-expanded="false" class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">HRMS</span>
                      </a>
                        <ul class="collapse" id="pageMenu2">
                            
                            <li class="drawer-menu-item"><a href="{{ route('leaves') }}">Leave</a></li>
                            <li class="drawer-menu-item"><a href="{{ route('leave_types') }}">Leave type</a></li>
                            <li class="drawer-menu-item"><a href="{{ route('attendance') }}">Attendance</a></li>
                        </ul>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="{{ route('employee') }}">
                        <i class="material-icons">people_outline</i>
                        <span class="drawer-menu-text">Employees</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="{{ route('setting') }}">
                        <i class="material-icons">settings</i>
                        <span class="drawer-menu-text">Setting</span>
                        </a>
                    </li>

                </ul>
               
            </nav>

        </div>
    </div>
</div>

</div>
<!-- // END drawer-layout -->