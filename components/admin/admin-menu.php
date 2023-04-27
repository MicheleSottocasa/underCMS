<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 300px; position: sticky;">
    <a href="/under-admin/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="60" height="42"><use xlink:href="#ms-logo"></use></svg>
        <span class="fs-4">Admin dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <?php foreach ($admin_menu as $link):
            if($link['visible_name'] == $currentPage['name']): ?>
                <li class="nav-item">
                    <a href="<?php echo $link['url'] ?>" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#<?php echo $link['icon-name'] ?>"></use></svg>
                        <?php echo $link['visible_name'] ?>
                    </a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="<?php echo $link['url'] ?>" class="nav-link text-white" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#<?php echo $link['icon-name'] ?>"></use></svg>
                        <?php echo $link['visible_name'] ?>
                    </a>
                </li>
            <?php endif;
        endforeach; ?>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo $_SESSION['photo-path']; ?>" alt="" class="rounded-circle me-2" width="32" height="32">
            <strong><?php echo $_SESSION['surname'] . ' ' .  $_SESSION['name'] ?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <!--                    <li><a class="dropdown-item" href="#">New project...</a></li>-->
            <li><a class="dropdown-item" href="/under-admin/settings">Settings</a></li>
            <li><a class="dropdown-item" href="/under-admin/profile">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/core/functions/authenticate.php?username=<?php echo $_SESSION['username']?>&logout=1">Sign out</a></li>
        </ul>
    </div>
</div>