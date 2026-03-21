<div class="sidebar sidebar-style-2" data-background-color="dark">
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
            <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
            <span class="navbar-brand text-white fw-bold mb-0 fs-5">
                ICT Governance Info
            </span>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
    </div>

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">

                <li class="nav-item <?= url_is('') || url_is('/') ? 'active' : '' ?>">
                    <a href="<?= base_url('/') ?>">
                        <i class="fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">...</h4>
                </li>

                <li class="nav-item <?= url_is('agency') ? 'active' : '' ?>">
                    <a href="<?= base_url('agency') ?>">
                        <i class="fas fa-users"></i>
                        <p>Agencies</p>
                    </a>
                </li>

                <li class="nav-item <?= url_is('alert') ? 'active' : '' ?>">
                    <a href="<?= base_url('alert') ?>">
                        <i class="fas fa-exclamation-circle"></i>
                        <p>Alerts</p>
                    </a>
                </li>

                <li class="nav-item <?= url_is('project') ? 'active' : '' ?>">
                    <a href="<?= base_url('project') ?>">
                        <i class="fas fa-book"></i>
                        <p>Projects</p>
                    </a>
                </li>

                <li class="nav-item <?= url_is('contact') ? 'active' : '' ?>">
                    <a href="<?= base_url('contact') ?>">
                        <i class="fas fa-address-book"></i>
                        <p>Contact</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>