<header>
    <div class="menu">
        <ul>
            <?php foreach ($main_menu as $link):
                if($link['page'] == $title): ?>
                    <li class="active"><a href="<?php echo $link['url'] ?>"><?php echo $link['page'] ?></a></li>
                <?php else: ?>
                    <li class="an-center"><a href="<?php echo $link['url'] ?>"><?php echo $link['page'] ?></a></li>
                <?php endif;
            endforeach; ?>
        </ul>
    </div>

    <div class="logo">
        <a href="index.html"><img src="assets/logos/logo.svg" alt="logo - MS WebSite consulting" width="150px"></a>
    </div>
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>