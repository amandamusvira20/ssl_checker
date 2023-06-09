<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
  <div class="sidebar-brand d-none d-md-flex">
    <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
      <use xlink:href="<?= base_url("assets/brand/coreui.svg#full") ; ?>"></use>
    </svg>
    <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
      <use xlink:href="<?= base_url("assets/brand/coreui.svg#signet") ; ?>"></use>
    </svg>
  </div>
  <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
    <li class="nav-item"><a class="nav-link" href="<?= base_url("index.html"); ?>" >
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-speedometer") ; ?>"></use>
        </svg> Dashboard<span class="badge badge-sm bg-info ms-auto"></span></a></li>
    <li class="nav-title">Master Data</li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url("colors.html"); ?>">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-drop"); ?>"></use>
        </svg>Server</a></li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url("typography.html"); ?>">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-pencil") ; ?>"></use>
        </svg>Domain</a></li>
    <li class="nav-title">Components</li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="<?= base_url("#") ; ?>">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-puzzle") ; ?>"></use>
        </svg> Base</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/accordion.html"); ?>"><span class="nav-icon"></span> Accordion</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/breadcrumb.html"); ?>"><span class="nav-icon"></span> Breadcrumb</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/cards.html"); ?>"><span class="nav-icon"></span> Cards</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/carousel.html"); ?>"><span class="nav-icon"></span> Carousel</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/collapse.html"); ?>"><span class="nav-icon"></span> Collapse</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/list-group.html"); ?>"><span class="nav-icon"></span> List group</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/navs-tabs.html"); ?>"><span class="nav-icon"></span> Navs &amp; Tabs</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/pagination.html"); ?>"><span class="nav-icon"></span> Pagination</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/placeholders.html"); ?>"><span class="nav-icon"></span> Placeholders</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/popovers.html"); ?>"><span class="nav-icon"></span> Popovers</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/progress.html"); ?>"><span class="nav-icon"></span> Progress</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/scrollspy.html"); ?>"><span class="nav-icon"></span> Scrollspy</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/spinners.html"); ?>"><span class="nav-icon"></span> Spinners</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/tables.html"); ?>"><span class="nav-icon"></span> Tables</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("base/tooltips.html"); ?>"><span class="nav-icon"></span> Tooltips</a></li>
      </ul>
    </li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="<?= base_url("#") ; ?>">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-cursor") ; ?>"></use>
        </svg> Buttons</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="<?= base_url("buttons/buttons.html"); ?>"><span class="nav-icon"></span> Buttons</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("buttons/button-group.html"); ?>"><span class="nav-icon"></span> Buttons Group</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("buttons/dropdowns.html"); ?>"><span class="nav-icon"></span> Dropdowns</a></li>
      </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url("charts.html"); ?>">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-chart-pie") ; ?>"></use>
        </svg> Charts</a></li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="<?= base_url("#") ; ?>">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-notes") ; ?>"></use>
        </svg> Forms</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="<?= base_url("forms/form-control.html"); ?>"> Form Control</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("forms/select.html"); ?>"> Select</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("forms/checks-radios.html"); ?>"> Checks and radios</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("forms/range.html"); ?>"> Range</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("forms/input-group.html"); ?>"> Input group</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("forms/floating-labels.html"); ?>"> Floating labels</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("forms/layout.html"); ?>"> Layout</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("forms/validation.html"); ?>"> Validation</a></li>
      </ul>
    </li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="<?= base_url("#") ; ?>">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-star") ; ?>"></use>
        </svg> Icons</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="<?= base_url("icons/coreui-icons-free.html"); ?>"> CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("icons/coreui-icons-brand.html"); ?>"> CoreUI Icons - Brand</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("icons/coreui-icons-flag.html"); ?>"> CoreUI Icons - Flag</a></li>
      </ul>
    </li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="<?= base_url("#") ; ?>">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-bell") ; ?>"></use>
        </svg> Notifications</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="<?= base_url("notifications/alerts.html"); ?>"><span class="nav-icon"></span> Alerts</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("notifications/badge.html"); ?>"><span class="nav-icon"></span> Badge</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("notifications/modals.html"); ?>"><span class="nav-icon"></span> Modals</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("notifications/toasts.html"); ?>"><span class="nav-icon"></span> Toasts</a></li>
      </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url("widgets.html"); ?>">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-calculator") ; ?>"></use>
        </svg> Widgets<span class="badge badge-sm bg-info ms-auto"></span></a></li>
    <li class="nav-divider"></li>
    <li class="nav-title">Extras</li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="<?= base_url("#") ; ?>">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-star") ; ?>"></use>
        </svg> Pages</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="<?= base_url("login.html"); ?>" target="_top">
            <svg class="nav-icon">
              <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout") ; ?>"></use>
            </svg> Login</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("register.html"); ?>" target="_top">
            <svg class="nav-icon">
              <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout") ; ?>"></use>
            </svg> Register</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("404.html"); ?>" target="_top">
            <svg class="nav-icon">
              <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-bug") ; ?>"></use>
            </svg> Error 404</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("500.html"); ?>" target="_top">
            <svg class="nav-icon">
              <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-bug") ; ?>"></use>
            </svg> Error 500</a></li>
      </ul>
    </li>
    <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/" target="_blank">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-description") ; ?>"></use>
        </svg> Docs</a></li>
    <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
        <svg class="nav-icon">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-layers") ; ?>"></use>
        </svg> Try CoreUI
        <div class="fw-semibold">PRO</div>
      </a></li>
  </ul>
  <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
  <header class="header header-sticky mb-4">
    <div class="container-fluid">
      <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
        <svg class="icon icon-lg">
          <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-menu") ; ?>"></use>
        </svg>
      </button><a class="header-brand d-md-none" href="<?= base_url("#") ; ?>">
        <svg width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="<?= base_url("assets/brand/coreui.svg#full") ; ?>"></use>
        </svg></a>
      <ul class="header-nav d-none d-md-flex">
        <li class="nav-item"><a class="nav-link" href="<?= base_url("#") ; ?>">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("#") ; ?>">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("#") ; ?>">Settings</a></li>
      </ul>
      <ul class="header-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?= base_url("#") ; ?>">
            <svg class="icon icon-lg">
              <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-bell") ; ?>"></use>
            </svg></a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("#") ; ?>">
            <svg class="icon icon-lg">
              <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-list-rich") ; ?>"></use>
            </svg></a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url("#") ; ?>">
            <svg class="icon icon-lg">
              <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-envelope-open") ; ?>"></use>
            </svg></a></li>
      </ul>
      <ul class="header-nav ms-3">
        <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="<?= base_url("#") ; ?>" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-md"><img class="avatar-img" src="<?= base_url("assets/img/avatars/8.jpg"); ?>" alt="user@email.com"></div>
          </a>
          <div class="dropdown-menu dropdown-menu-end pt-0">
            <div class="dropdown-header bg-light py-2">
              <div class="fw-semibold">Account</div>
            </div><a class="dropdown-item" href="<?= base_url("#") ; ?>">
              <svg class="icon me-2">
                <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-bell") ; ?>"></use>
              </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="<?= base_url("#") ; ?>">
              <svg class="icon me-2">
                <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-envelope-open") ; ?>"></use>
              </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="<?= base_url("#") ; ?>">
              <svg class="icon me-2">
                <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-task") ; ?>"></use>
              </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="<?= base_url("#") ; ?>">
              <svg class="icon me-2">
                <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-comment-square") ; ?>"></use>
              </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
            <div class="dropdown-header bg-light py-2">
              <div class="fw-semibold">Settings</div>
            </div><a class="dropdown-item" href="<?= base_url("#") ; ?>">
              <svg class="icon me-2">
                <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-user") ; ?>"></use>
              </svg> Profile</a><a class="dropdown-item" href="<?= base_url("#") ; ?>">
              <svg class="icon me-2">
                <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-settings") ; ?>"></use>
              </svg> Settings</a><a class="dropdown-item" href="<?= base_url("#") ; ?>">
              <svg class="icon me-2">
                <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-credit-card") ; ?>"></use>
              </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="<?= base_url("#") ; ?>">
              <svg class="icon me-2">
                <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-file") ; ?>"></use>
              </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url("#") ; ?>">
              <svg class="icon me-2">
                <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked") ; ?>"></use>
              </svg> Lock Account</a><a class="dropdown-item" href="<?= base_url("#") ; ?>">
              <svg class="icon me-2">
                <use xlink:href="<?= base_url("assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout") ; ?>"></use>
              </svg> Logout</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="header-divider"></div>
    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
          <li class="breadcrumb-item">

            <!-- if breadcrumb is single--><span>Home</span>
          </li>
          <li class="breadcrumb-item active"><span>Domain</span></li>
        </ol>
      </nav>
    </div>
  </header>
  <div class="card">
    <div class="card-header">
    <a href="<?= base_url('domain/tambah') ?>" class="btn btn-primary">+ Tambah Data</a>
</div>
    <div class="card-body">
    <table class="table is-narrow" id="tabeldomain">
            <thead>
              <tr>
                <th>Server ID</th>
                <th>Domain</th>
                <th>Active</th> 
                <th>Aksi</th> 
              </tr>
            </thead>
            <?php foreach ($domain as $d) : ?>
              <tbody>
                <tr>
	                  <td><?= $d->server_id ?></td>
	                  <td><?= $d->domain ?></td>
	                  <td><?= $d->active ?></td>
	                  <td>
		                  <a href="" class="btn btn-warning btn-sm">Edit</a>
		                  <a href="" class="btn btn-danger btn-sm">Delete</a>
	                  </td>
                </tr>
              </tbody>
            <?php endforeach ?>
          </table>
  </div>
            </div>

<script>let table = new DataTable('#tabeldomain');</script>
<script> ('#tabeldomain');</script>