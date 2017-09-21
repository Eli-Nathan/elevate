<div class="ourWork col-sm-12">
   <hr>
    <h3>More Projects...</h3>
    
    <?php 
        if($theWork == 'royal' || $theWork == 'milo' || $theWork == 'wagyu' || $theWork == 'bricklane') {
    
        if($theWork !== 'royal') { ?>
    <div class='col-md-4 col-sm-6 workPiece'>
        <div class="panel panel-primary"> <a href='<?php echo $rootPath; ?>our-work/royal-dunkeld/'>
                   <div class="panel-heading" style='background:url(<?php echo $rootPath; ?>images/royal.png); background-size:cover; background-position:center'></div>
                </a>
            <div class="panel-body">
                <a href='<?php echo $rootPath; ?>our-work/royal-dunkeld/'>
                    <h3>Royal Dunkeld</h3>
                </a>
                <p><a href='<?php echo $rootPath; ?>services/web-design/'>Web Design</a></p>
            </div>
        </div>
    </div>
    <?php }
    if($theWork !== 'milo') { ?> 
    <div class='col-md-4 col-sm-6 workPiece'>
        <div class="panel panel-primary">
            <a href='<?php echo $rootPath; ?>our-work/milo-lifts/'>
                <div class="panel-heading" style='background:url(<?php echo $rootPath; ?>images/milo-cap.png); background-size:cover; background-position:center'></div>
                </a>
            <div class="panel-body">
                <a href='<?php echo $rootPath; ?>our-work/milo-lifts/'>
                    <h3>Milo Lifts</h3>
                </a>
                <p><a href='<?php echo $rootPath; ?>services/graphic-design/'>Graphic Design</a></p>
            </div>
        </div>
    </div>
    <?php }
    if($theWork !== 'wagyu') { ?> 
    <div class='col-md-4 col-sm-6 workPiece'>
        <div class="panel panel-primary">
            <a href='<?php echo $rootPath; ?>our-work/highland-wagyu/'>
                <div class="panel-heading" style='background:url(<?php echo $rootPath; ?>images/latest.png); background-size:cover; background-position:center'></div>
                </a>
            <div class="panel-body">
                <a href='<?php echo $rootPath; ?>our-work/highland-wagyu/'>
                    <h3>The Grill by HW</h3>
                </a>
                <p><a href='<?php echo $rootPath; ?>services/web-design/'>Web Design</a></p>
            </div>
        </div>
    </div>
    <?php } 
    if($theWork !== 'bricklane') { ?> 
    <div class='col-md-4 col-sm-6 workPiece'>
        <div class="panel panel-primary">
            <a href='<?php echo $rootPath; ?>our-work/bricklane-studios/'>
                <div class="panel-heading" style='background:url(<?php echo $rootPath; ?>images/bricklane-ux-2.png); background-size:cover; background-position:center'></div>
                </a>
            <div class="panel-body">
                <a href='<?php echo $rootPath; ?>our-work/bricklane-studios/'>
                    <h3>Brick Lane Studios</h3>
                </a>
                <p><a href='<?php echo $rootPath; ?>services/web-design/'>Web Design</a></p>
            </div>
        </div>
    </div>
    <?php }  
        }
    else { ?>
        <div class='col-md-4 col-sm-6 workPiece'>
        <div class="panel panel-primary"> <a href='<?php echo $rootPath; ?>our-work/times-square/'>
                   <div class="panel-heading" style='background:url(<?php echo $rootPath; ?>images/times-square.png); background-size:cover; background-position:center'></div>
                </a>
            <div class="panel-body">
                <a href='<?php echo $rootPath; ?>our-work/times-square/'>
                    <h3>Times Square</h3>
                </a>
                <p><a href='<?php echo $rootPath; ?>services/web-design/'>Web Design</a></p>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6 workPiece'>
        <div class="panel panel-primary">
            <a href='<?php echo $rootPath; ?>our-work/media-world/'>
                <div class="panel-heading" style='background:url(<?php echo $rootPath; ?>images/dram.png); background-size:cover; background-position:center'></div>
                </a>
            <div class="panel-body">
                <a href='<?php echo $rootPath; ?>our-work/media-world/'>
                    <h3>Media World</h3>
                </a>
                <p><a href='<?php echo $rootPath; ?>services/web-design/#content-management'>Content Management</a></p>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6 workPiece'>
        <div class="panel panel-primary"> <a href='<?php echo $rootPath; ?>our-work/jacob-eaton/'>
                   <div class="panel-heading" style='background:url(<?php echo $rootPath; ?>images/jake.png); background-size:cover; background-position:center'></div>
                </a>
            <div class="panel-body">
                <a href='<?php echo $rootPath; ?>our-work/jacob-eaton/'>
                    <h3>Jacob Eaton</h3>
                </a>
                <p><a href='<?php echo $rootPath; ?>services/web-design/'>Web Design</a></p>
            </div>
        </div>
    </div>
    <?php } ?>
    <a href="/elevate/our-work/" class='btn'><i class='fa fa-desktop'></i> &nbsp; View all work...</a>
</div>