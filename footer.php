
<footer class="container-fluid text-center">
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
endif; ?>
          <footer class="container-fluid text-center"><!-- div for the main image to stretch s to the edge of the page-->
        </div>
        <div class="col-md-6">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
endif; ?>
        </div>
    </div> <!-- row -->
</div> <!-- container -->
</footer>
<?php wp_footer(); ?>
</body>
</html>