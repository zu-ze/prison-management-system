<!-- Heading -->
<div class="search-box flex-row">

    <!--Card content-->
    <div>
        <h4 class="">
            <a href="/">Home Page</a>
            <span>/</span>
            <span>Dashboard</span>
        </h4>
    </div>
    <div>
        <form class="">
            <!-- Default input -->
            <input type="search" placeholder="Type your query" aria-label="Search" class="">
            <button class="" type="submit"><span>SEARCH</span></button>
        </form>
    </div>

</div>
<div class="flex-row justify-center">
    <?php if(Application::$app->session->getFlash('success')):?>
        <div class="alert alert-success">
            <p><?php echo Application::$app->session->getFlash('success'); ?></p>
        </div>
    <?php endif; ?>
    <?php if(Application::$app->session->getFlash('failed')):?>
        <div class="alert alert-failed">
            <p><?php echo Application::$app->session->getFlash('failed'); ?></p>
        </div>
    <?php endif; ?>
</div>
<!-- Heading -->