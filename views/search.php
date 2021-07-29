<?php 
    $breadcrumbs = explode('/',Application::$app->request->getPath());
?>
<!-- Heading -->
<div class="search-box flex-row">

    <!--Card content-->
    <div>
        <h4 class="">
            <?php 
            foreach($breadcrumbs as $value):
                    if($value == ""):
                        echo "<a href='/'>Home Page</a>";
                    else: 
                        echo "<span> / </span>";
                        echo "<span>$value</span>";
                    endif;
                endforeach;
        ?>
        </h4>
    </div>
    <div>
        <form action="/admin/search" method="post">
            <input type="search" placeholder="Type your query" aria-label="Search" class="">
            <button class="btn btn-primary" type="submit"><span class="fas fa-search"></span></button>
        </form>
    </div>

</div>
<!-- Heading -->
<div class="flex-row justify-center">
    <?php if(Application::$app->session->getFlash('success')):?>
        <div class="alert alert-success shadowed">
            <p><?php echo Application::$app->session->getFlash('success'); ?></p>
        </div>
    <?php endif; ?>
    <?php if(Application::$app->session->getFlash('failed')):?>
        <div class="alert alert-failed shadowed">
            <p><?php echo Application::$app->session->getFlash('failed'); ?></p>
        </div>
    <?php endif; ?>

</div>