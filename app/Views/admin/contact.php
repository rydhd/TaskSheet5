<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Contact</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <?= $this->include('admin_partials/table') ?>
                <?= $this->include('admin_partials/maps') ?>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>