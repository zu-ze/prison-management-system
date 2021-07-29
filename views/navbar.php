<navbar class="navbar-public flex-row justify-space-between">
    <ul class="flex-row justify-space-between">
        <li class="nav-link">
            <a href="/"><span>PMS</span></a>
        </li>
    </ul>
    <ul class="flex-column justify-space-between" id="top-menu">
    <?php if(Application::$app->session->getUser()): ?>
            <li class="nav-link">
                <a href="#"><span><?php echo Application::$app->session->getUser()['name']; ?></span></a>
                <ul id="sub-menu">
                    <li class="nav-link">
                        <a href="/admin"><span class="fas fa-fw fa-tachometer-alt"></span> dashboard</a>
                    </li>
                    <li class="nav-link">
                        <a href="/logout"><span class="fas fa-sign-in-alt"></span> logout</a>
                    </li>
                </ul>
            </li>
    <?php else: ?>
            <li class="nav-link">
                <a href="/login"><span>Login</span></a>
            </li>
    <?php endif; ?>
    
    </ul>
</navbar>