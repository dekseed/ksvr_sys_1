    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home') }}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">KSVR</h2>
                    </a></li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                        <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    @if (\Request::is('home'))<li class="active">@else<li class=" nav-item">@endif<a href="{{ route('home') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">หน้าหลัก</span></a>
                    {{-- <ul
                     class="menu-content">
                        <li class="active"><a href="dashboard-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href="dashboard-ecommerce.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul> --}}
                </li>
                <li class="{{ Request::is('home/profile*') ? 'active' : '' }} nav-item"><a href="{{ route('profile.show', Auth::user()->id) }}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="ข้อมูลส่วนตัว">ข้อมูลส่วนตัว</span></a>
                </li>
                @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                <li class=" nav-item"><a href="{{ route('users.index') }}"><i class="feather icon-users"></i><span class="menu-title" data-i18n="จัดการข้อมูลสมาชิก">ข้อมูลสมาชิก</span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::is('admin/user*') ? 'active' : '' }}"><a href="{{ route('users.index') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">รายการ</span></a>
                        </li>
                        <li class="{{ Request::is('admin/permission-role') || Request::is('admin/permission/*') || Request::is('admin/roles/*') ? 'active' : '' }}"><a href="{{ route('permission_role') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="สิทธิ์การใช้งาน">สิทธิ์การใช้งาน</span></a>
                        </li>

                    </ul>
                </li>
                @endif
                <li class=" navigation-header"><span class="menu-title" data-i18n="ระบบ">ระบบ</span>
                </li>
                @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                <li class=" nav-item"><a href=""><i class="feather icon-inbox"></i><span class="menu-title" data-i18n="ระบบบันทึกข้อมูลครุภัณฑ์">ระบบบันทึกข้อมูลครุภัณฑ์</span></a>
                    <ul class="menu-content">
                         <li class="{{ Request::is('stock') ? 'active' : '' }}"><a href="{{ route('dashboard_stock') }}"><i class="feather icon-airplay"></i><span class="menu-item" data-i18n="หน้าแรก">หน้าแรก</span></a></li>
                        <li class=" nav-item"><a href="#"><span class="menu-title" data-i18n="ครุภัณฑ์"><i class="feather icon-inbox"></i> <span class="menu-item" data-i18n="ครุภัณฑ์">ครุภัณฑ์</span></a>
                            <ul class="menu-content">
                                <li class="{{ Request::is('stock/schedule*') ? 'active' : '' }}"><a href="{{ route('schedule.index') }}">
                                    <i class="feather icon-circle"></i><span class="menu-item" data-i18n="รายการ">รายการ</span></a>
                                </li>
                                <li class="{{ Request::is('stock/category-equipment') ? 'active' : '' }}"><a href="{{ route('category-equipment.index') }}">
                                    <i class="feather icon-circle"></i><span class="menu-item" data-i18n="หมวดหมู่/ประเภท">หมวดหมู่ / ประเภท</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a href="#"><span class="menu-title" data-i18n="สิ่งอุปกรณ์ใช้สิ้นเปลือง"><i class="feather icon-codepen"></i> <span class="menu-item" data-i18n="สป.สิ้นเปลือง">สป.สิ้นเปลือง</span></a>
                            <ul class="menu-content">
                                <li class="{{ Request::is('stock/waste*') ? 'active' : '' }}"><a href="{{ route('waste.index') }}">
                                    <i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">รายการ</span></a>
                                </li>
                                <li class="{{ Request::is('stock/category-waste') ? 'active' : '' }}"><a href="{{ route('category-waste.index') }}">
                                    <i class="feather icon-circle"></i><span class="menu-item" data-i18n="หมวดหมู่/ประเภท">หมวดหมู่ / ประเภท</span></a>
                                </li>
                        {{-- <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li> --}}
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                <li class=" nav-item"><a href="#"><i class="feather icon-package"></i><span class="menu-title" data-i18n="ระบบแจ้งซ่อมอุปกรณ์">ระบบแจ้งซ่อมอุปกรณ์</span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::is('users/repair*') ? 'active' : '' }}"><a href="{{ route('repair.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">รายการ (สำหรับผู้ใช้งานทั่วไป)</span></a>
                        </li>
                        @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                        <li class="{{ Request::is('admin/repair-admin*') ? 'active' : '' }}"><a href="{{ route('repair-admin.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="หมวดหมู่/ประเภท">รายการ (สำหรับผู้ดูแลระบบ)</span></a>
                        </li>
                        @endif
                        {{-- <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li> --}}
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-package"></i><span class="menu-title" data-i18n="ระบบแจ้งซ่อมอุปกรณ์">ระบบยืม/คืน อุปกรณ์คอมพิวเตอร์</span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::is('users/borrow*') ? 'active' : '' }}"><a href="{{ route('borrow.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">รายการ (สำหรับผู้ใช้งานทั่วไป)</span></a>
                        </li>
                        @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                        <li class="{{ Request::is('admin/borrow-admin*') ? 'active' : '' }}"><a href="{{ route('borrow-admin.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="หมวดหมู่/ประเภท">รายการ (สำหรับผู้ดูแลระบบ)</span></a>
                        </li>
                        @endif
                        {{-- <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li> --}}
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-package"></i><span class="menu-title" data-i18n="KsvrCheckUp">Ksvr Check Up</span></a>
                    {{-- <ul class="menu-content">
                        <li class="{{ Request::is('stock/schedule*') ? 'active' : '' }}"><a href="{{ route('schedule.index') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">รายการ</span></a>
                        </li>
                        <li class="{{ Request::is('stock/category-equipment') ? 'active' : '' }}"><a href="{{ route('category-equipment.index') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="หมวดหมู่/ประเภท">หมวดหมู่ / ประเภท</span></a>
                        </li>
                        {{-- <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul> --}}
                </li>
                <li class=" navigation-header"><span class="menu-title" data-i18n="ระบบเว็บไซต์">ระบบเว็บไซต์</span>
                </li>
                @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                <li class=" nav-item"><a href="#"><i class="feather icon-package"></i><span class="menu-title" data-i18n="ประกาศจัดซื้อจัดจ้าง">ประกาศจัดซื้อจัดจ้าง</span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::is('web/tender*') ? 'active' : '' }}"><a href="{{ route('tender.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">รายการ</span></a>
                        </li>
                        @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                        <li class="{{ Request::is('web/cate-tender*') ? 'active' : '' }}"><a href="{{ route('cate-tender.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="หมวดหมู่/ประเภท">หมวดหมู่/ประเภท</span></a>
                        </li>
                        @endif
                        {{-- <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li> --}}
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-package"></i><span class="menu-title" data-i18n="ประกาศประชาสัมพันธ์">ประกาศประชาสัมพันธ์</span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::is('web/publicize*') ? 'active' : '' }}"><a href="{{ route('publicize.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">รายการ</span></a>
                        </li>
                        @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                        <li class="{{ Request::is('web/cate-publicize*') ? 'active' : '' }}"><a href="{{ route('cate-publicize.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="หมวดหมู่/ประเภท">หมวดหมู่/ประเภท</span></a>
                        </li>
                        @endif
                        {{-- <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li> --}}
                    </ul>
                </li>
                @endif
                <li class=" navigation-header"><span class="menu-title" data-i18n="ระบบ">ช่วยเหลือ</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-package"></i><span class="menu-title" data-i18n="KsvrCheckUp">คู่มือการใช้งาน</span></a>
                    {{-- <ul class="menu-content">
                        <li class="{{ Request::is('stock/schedule*') ? 'active' : '' }}"><a href="{{ route('schedule.index') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">รายการ</span></a>
                        </li>
                        <li class="{{ Request::is('stock/category-equipment') ? 'active' : '' }}"><a href="{{ route('category-equipment.index') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="หมวดหมู่/ประเภท">หมวดหมู่ / ประเภท</span></a>
                        </li>
                        {{-- <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul> --}}
                </li>


            </ul>

        </div>
    </div>
