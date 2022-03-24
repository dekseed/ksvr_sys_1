    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-dark navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home') }}">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">KSVR</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    {{-- <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="{{ route('home') }}" data-toggle="dropdown"><i class="feather icon-home"></i><span data-i18n="Dashboard">หน้าหลัก</span></a>
                        <ul class="dropdown-menu">
                            <li {{ Request::is('home/profile*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('profile.show', Auth::user()->id) }}" data-toggle="dropdown" data-i18n="Profile"><i class="feather icon-user"></i>ข้อมูลส่วนตัว</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html" data-toggle="dropdown" data-i18n="eCommerce"><i class="feather icon-shopping-cart"></i>eCommerce</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li {{ Request::is('home') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('home') }}" data-i18n="Dashboard"><i class="feather icon-home"></i>หน้าหลัก</a>
                    </li>
                    @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="{{ route('users.index') }}" data-toggle="dropdown"><i class="feather icon-users"></i><span data-i18n="Users">ข้อมูลสมาชิก</span></a>
                            <ul class="dropdown-menu">
                                <li {{ Request::is('admin/user*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('users.index') }}" data-toggle="dropdown" data-i18n="Users-List"><i class="feather icon-users"></i>รายการ</a>
                                </li>
                                <li {{ Request::is('admin/permission-role*') || Request::is('admin/permission*') || Request::is('admin/roles*') ? 'class=active' : '' }}  data-menu=""><a class="dropdown-item" href="{{ route('permission_role') }}" data-toggle="dropdown" data-i18n="Permission"><i class="feather icon-lock"></i>สิทธิ์การใช้งาน</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if (Auth::user()->status == '1')
                        @if (Auth::user()->hasRole(['superadministrator', 'administrator', 'schedule-stock']))
                            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="{{ route('dashboard_stock') }}" data-toggle="dropdown"><i class="feather icon-package"></i><span data-i18n="Durable-Articles">ระบบบันทึกข้อมูลครุภัณฑ์</span></a>
                                <ul class="dropdown-menu">
                                    <li {{ Request::is('stock') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('dashboard_stock') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-airplay"></i>แผงควบคุม</a>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="{{ route('dashboard_stock') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-package"></i>ครุภัณฑ์</a>
                                        <ul class="dropdown-menu">
                                            <li {{ Request::is('stock/schedule*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('schedule.index') }}" data-toggle="dropdown" data-i18n="Shop"><i class="feather icon-list"></i>รายการ</a>
                                            </li>
                                            <li {{ Request::is('stock/category-equipment*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('category-equipment.index') }}" data-toggle="dropdown" data-i18n="Category"><i class="feather icon-layers"></i>หมวดหมู่ / ประเภท</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="{{ route('waste.index') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-inbox"></i>สป.สิ้นเปลือง</a>
                                        <ul class="dropdown-menu">
                                            <li {{ Request::is('stock/waste*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('waste.index') }}" data-toggle="dropdown" data-i18n="Shop"><i class="feather icon-list"></i> สป.สิ้นเปลืองทั่วไป</a>
                                            </li>
                                            <li {{ Request::is('stock/model-cart-ink*') || Request::is('stock/stock-wastes-Model-Cartr-Ink*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('model-cart-ink.index') }}" data-toggle="dropdown" data-i18n="Shop"><i class="feather icon-list"></i> สป.สิ้นเปลืองตลับหมึก</a>
                                            </li>
                                            <li {{ Request::is('stock/category-waste*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('category-waste.index') }}" data-toggle="dropdown" data-i18n="Category"><i class="feather icon-layers"></i>หมวดหมู่ / ประเภท</a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        @endif

                            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-monitor"></i><span data-i18n="Equipment-repair">ระบบงานแผนกศูนย์คอมฯ</span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="{{ route('dashboard_stock') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-package"></i>ระบบแจ้งดำเนินงานแผนกศูนย์คอมฯ</a>
                                        <ul class="dropdown-menu">
                                            <li {{ request()->is('repair/repair*') || request()->is('repair/cartridge-user*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('repair.index') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-list"></i>รายการ (สำหรับผู้ใช้งานทั่วไป)</a>
                                            </li>
                                            @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                                            <li {{ Request::is('admin/repair-admin*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('repair-admin.index') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-list"></i>รายการ (สำหรับผู้ดูแลระบบ)</a>
                                            </li>
                                            @endif

                                        </ul>
                                    </li>
                                    {{-- <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="{{ route('dashboard_stock') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-package"></i>ระบบแจ้งเปลี่ยนตลับหมึก</a>

                                        <ul class="dropdown-menu">
                                            <li {{ request()->is('users/cartridge_user*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('cartridge_user.index') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-list"></i>รายการ (สำหรับผู้ใช้งานทั่วไป)</a>
                                            </li>
                                            @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                                            <li {{ request()->is('admin/cartridge*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('cartridge.index') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-list"></i>รายการ (สำหรับผู้ดูแลระบบ)</a>
                                            </li>
                                            @endif
                                        </ul>
                                    </li> --}}
                                </ul>
                            </li>

                            {{-- @if (Auth::user()->hasRole(['superadministrator']))
                            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-monitor"></i><span data-i18n="Equipment-Borrowing">ระบบยืม/คืน อุปกรณ์คอมพิวเตอร์</span></a>
                                <ul class="dropdown-menu">
                                    <li {{ Request::is('users/borrow*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('borrow.index') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-list"></i>รายการ (สำหรับผู้ใช้งานทั่วไป)</a>
                                    </li>
                                    @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                                    <li {{ Request::is('admin/borrow-admin*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('borrow-admin.index') }}" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-list"></i>รายการ (สำหรับผู้ดูแลระบบ)</a>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                            @endif --}}
                            @if (Auth::user()->hasRole(['superadministrator', 'administrator', 'operating_room']))
                            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-activity"></i><span data-i18n="Equipment-Borrowing">Ksvr Check Up</span></a>
                                <ul class="dropdown-menu">
                                    <li {{ Request::is('check_up/index*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('check_up.index') }}" data-toggle="dropdown" data-i18n="Ksvr-Check-Up-index"><i class="feather icon-list"></i>รายการ</a>
                                    </li>

                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-inbox"></i>Ksvr Check Up V.1</a>
                                        <ul class="dropdown-menu">
                                            <li {{ Request::is('check_up/army*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('check_up.army') }}" data-toggle="dropdown" data-i18n="Shop"><i class="feather icon-list"></i>หน่วยทหาร</a>
                                            </li>
                                            <li {{ Request::is('check_up/police*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('check_up.police') }}" data-toggle="dropdown" data-i18n="Category"><i class="feather icon-list"></i>หน่วยงานตำรวจ</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-inbox"></i>Ksvr Check Up V.2</a>
                                        <ul class="dropdown-menu">
                                            <li {{ Request::is('check_up-2/army*') ? 'class=active' : '' }} data-menu=""222222><a class="dropdown-item" href="{{ route('check_up.army_2') }}" data-toggle="dropdown" data-i18n="Shop"><i class="feather icon-list"></i>หน่วยทหาร</a>
                                            </li>
                                            <li {{ Request::is('check_up/police*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('check_up.police') }}" data-toggle="dropdown" data-i18n="Category"><i class="feather icon-list"></i>หน่วยงานตำรวจ</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li {{ Request::is('check_up/cate-check_up*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('cate-check_up.index') }}" data-toggle="dropdown" data-i18n="Ksvr-Check-Up-index"><i class="feather icon-list"></i>หมวดหมู่/ประเภท</a>
                                    </li>
                                </ul>
                            </li>
                            @endif

                            @if (Auth::user()->hasRole(['superadministrator', 'administrator', 'tender', 'clerical', 'LAB']))
                            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-layout"></i><span data-i18n="Website">ระบบเว็บไซต์</span></a>
                                <ul class="dropdown-menu">
                                    {{-- <li {{ Request::is('check_up/index*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('check_up.index') }}" data-toggle="dropdown" data-i18n="Ksvr-Check-Up-index"><i class="feather icon-list"></i>รายการ</a>
                                    </li> --}}
                                    @if(Auth::user()->hasRole(['superadministrator', 'administrator', 'tender']))
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-package"></i>ประกาศจัดซื้อจัดจ้าง</a>
                                        <ul class="dropdown-menu">
                                            <li {{ Request::is('web/tender*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('tender.index') }}" data-toggle="dropdown" data-i18n="Tender"><i class="feather icon-list"></i>รายการ</a>
                                            </li>
                                            <li {{ Request::is('web/cate-tender*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('cate-tender.index') }}" data-toggle="dropdown" data-i18n="Category-Tender"><i class="feather icon-list"></i>หมวดหมู่/ประเภท</a>
                                            </li>
                                        </ul>
                                    </li>
                                    @endif
                                    @if(Auth::user()->hasRole(['superadministrator', 'administrator', 'clerical']))
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-message-square"></i>ประกาศประชาสัมพันธ์</a>
                                        <ul class="dropdown-menu">
                                            <li {{ Request::is('web/publicizes*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('publicizes.index') }}" data-toggle="dropdown" data-i18n="Publicize"><i class="feather icon-list"></i>รายการ</a>
                                            </li>
                                            <li {{ Request::is('web/cate-publicizes*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('cate-publicizes.index') }}" data-toggle="dropdown" data-i18n="Category-Publicize"><i class="feather icon-list"></i>หมวดหมู่/ประเภท</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-thumbs-up"></i>ประกาศรับสมัครงาน</a>
                                        <ul class="dropdown-menu">
                                            <li {{ Request::is('web/job*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('job.index') }}" data-toggle="dropdown" data-i18n="Job"><i class="feather icon-list"></i>รายการ</a>
                                            </li>
                                            <li {{ Request::is('web/cat-job*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('cat-job.index') }}" data-toggle="dropdown" data-i18n="Category-Job"><i class="feather icon-list"></i>หมวดหมู่/ประเภท</a>
                                            </li>
                                        </ul>
                                    </li>
                                    @endif
                                    @if(Auth::user()->hasRole(['superadministrator', 'administrator', 'LAB']))
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Durable-Articles-index"><i class="feather icon-message-square"></i>ระบบเอกสารคุณภาพ (LAB-eDoc-Folder) </a>
                                        <ul class="dropdown-menu">
                                            <li {{ Request::is('web/LAB-Upload*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('LAB-Upload.index') }}" data-toggle="dropdown" data-i18n="Publicize"><i class="feather icon-list"></i>รายการ</a>
                                            </li>
                                            <li {{ Request::is('web/cate-LAB-Upload*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('cate-LAB-Upload.index') }}" data-toggle="dropdown" data-i18n="Category-Publicize"><i class="feather icon-list"></i>หมวดหมู่/ประเภท</a>
                                            </li>
                                        </ul>
                                    </li>

                                    @endif
                                </ul>
                            </li>
                            @endif

                            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-activity"></i><span data-i18n="Equipment-Borrowing">Covid-19</span></a>
                                <ul class="dropdown-menu">
                                    <li {{ Request::is('home/timeline-covid*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('timeline-covid.index') }}" data-toggle="dropdown" data-i18n="Ksvr-Check-Up-index"><i class="feather icon-list"></i>ระบบบันทึก Timeline</a>
                                    </li>
                                    @if (Auth::user()->hasRole(['superadministrator', 'administrator', 'Community_Health_Center', 'covid']))
                                        <li {{ Request::is('users/report_ques_his_covid*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('report_ques_his_covid.index') }}" data-toggle="dropdown" data-i18n="Ksvr-Check-Up-index"><i class="feather icon-list"></i>รายงานประวัติการเดินทาง</a>
                                        </li>
                                        <li {{ Request::is('users/Surveillance_Area_Covid*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('Surveillance_Area_Covid.index') }}" data-toggle="dropdown" data-i18n="Ksvr-Check-Up-index"><i class="feather icon-list"></i>ข้อมูลพื้นที่เสี่ยง</a>
                                        </li>

                                    @endif
                                    <li {{ Request::is('inquiry-form-Covid*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('inquiry-form-Covid.index') }}" data-toggle="dropdown" data-i18n="Ksvr-Check-Up-index"><i class="feather icon-list"></i>ระบบแบบสอบสวนผู้ป่วย</a>
                                    </li>
                                </ul>
                            </li>

                    @endif

                    {{-- <li data-menu=""><a class="nav-link" href="#"><i class="feather icon-help-circle"></i><span data-i18n="Help">ช่วยเหลือ</span></a>

                    </li> --}}
                    <li data-menu=""><a class="nav-link" href="#"><i class="feather icon-info"></i><span data-i18n="Guide">คู่มือการใช้งาน</span></a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->
