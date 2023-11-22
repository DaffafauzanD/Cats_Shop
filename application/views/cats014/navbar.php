<nav class="navbar navbar-expand-xl">
    <div class="container-fluid justify-content-around">
        <div>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= site_url('cats014') ?>">Cats list</a></li>
                    <li><a class="dropdown-item" href="<?= site_url(
							'Categories014'
						) ?>">Categories list</a></li>
                    <?php if ($this->session->userdata('usertype') == 'Manager') { ?>
                    <li><a class="dropdown-item" href="<?= site_url('User014') ?>">User list</a></li>
                    <li><a class="dropdown-item" href="<?= site_url('cats014/sales') ?>">Report</a></li>
                    <?php } ?>
                    <li><a class="dropdown-item" href="<?= site_url('Auth014/changepass') ?>">Change password</a>
                    </li>
                    <li><a class="dropdown-item" href="<?= site_url('Auth014/changephoto') ?>">Change photo</a></li>
                    <li><a class="dropdown-item" href="<?= site_url('Auth014/logout') ?>">logout</a></li>
                </ul>
            </div>
        </div>
        <div>
            <a class="navbar-brand" href="<?= base_url() ?>">CATSHOP014</a>
        </div>
        <div>
            <a style="text-transform: capitalize;" class="navbar-brand"
                href="<?= base_url() ?>"><?= $this->session->userdata('username') ?>.</a>
        </div>
    </div>
</nav>