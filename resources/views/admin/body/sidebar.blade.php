<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            AWES<span>manila</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">web apps</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Email</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/read.html" class="nav-link">Read</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/compose.html" class="nav-link">Compose</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!--<li class="nav-item">
          <a href="pages/apps/chat.html" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Chat</span>
          </a>
        </li>-->

            <li class="nav-item">
                <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>

            <li class="nav-item nav-category">Components</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false"
                    aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Inventory Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/ui-components/accordion.html" class="nav-link">List of Materials</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ui-components/alerts.html" class="nav-link">List of Equipment</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ui-components/alerts.html" class="nav-link">Records of Materials</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ui-components/alerts.html" class="nav-link">Status of Equipment</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ui-components/alerts.html" class="nav-link">Inventory Logs</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false"
                    aria-controls="advancedUI">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Customers</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="advancedUI">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/advanced-ui/cropper.html" class="nav-link">Customer List</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Maintenance Scheduling</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false"
                    aria-controls="advancedUI">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">Scheduling</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="forms">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/advanced-ui/cropper.html" class="nav-link">Maintenance Schedule</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false"
                    aria-controls="advancedUI">
                    <i class="link-icon" data-feather="shopping-bag"></i>
                    <span class="link-title">Order</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/advanced-ui/cropper.html" class="nav-link">Order List</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Processed Order</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Purchase Order</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#special-pages" role="button"
                    aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="briefcase"></i>
                    <span class="link-title">Employee Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="special-pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/advanced-ui/cropper.html" class="nav-link">Contractors</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#icons" role="button" aria-expanded="false"
                    aria-controls="advancedUI">
                    <i class="link-icon" data-feather="pie-chart"></i>
                    <span class="link-title">Status Report</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="icons">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/advanced-ui/cropper.html" class="nav-link">Reorder level</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Pending Orders</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Reports</a>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
