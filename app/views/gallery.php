<?php
  include(ACTIVE_PAGE_CHECKER);
  include(HEADER); 
?>
 <!-- Page Content -->
<div class="container gallery" style="margin-top: 30px;">

    <div class="row">

        <div class="col-lg-12">
        <?php $_GET['title']="GALLERY";include(HEADING); ?>
        </div>

        <!-- image links: starts -->
        <div id="links">
        <?php
            if ($handle = opendir('assets/images/gallery')) {
                while (false !== ($file = readdir($handle)))
                {
                    if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'jpg')
                    {
        ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo IMG_DIR."gallery/".$file; ?>" title="<?php echo ucfirst($file);?>" data-gallery>
                    <img class="img-responsive" src="<?php echo IMG_DIR."gallery/thumbnail/".$file; ?>" alt="">
                </a>
            </div>
        <?php } } } ?>
        </div>
        <!-- image links: ends -->

    </div>
</div>
<!-- gallery model: starts -->
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery model: ends -->
<?php
  include(FOOTER); 
?>