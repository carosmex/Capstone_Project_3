<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
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
                <a href="{{ route('admin.calendar') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>

            <li class="nav-item nav-category">Components</li>

            <li class="nav-item">
                <a href="{{ route('index.ticket') }}" class="nav-link">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">Tickets</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('create.customer') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Customer</span>
                </a>
            </li>

        </ul>
    </div>
</nav>
