<navbar class="navbar-public">
    <ul class="navbar-nav">
        <li class="nav-link">
            <a href="/"><span>PMS</span></a>
        </li>
    <?php if(Application::$app->session->getUser()): ?>
            <li class="nav-link">
                <a href="/logout"><span>Logout</span></a>
            </li>
    <?php else: ?>
            <li class="nav-link">
                <a href="/login"><span>Login</span></a>
            </li>
    <?php endif; ?>
    
    </ul>
</navbar>