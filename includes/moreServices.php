<div class='moreServices col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-12'>
    <h3 class='text-center'>More services</h3>
    <?php if($theService !== "web") { ?>
    <div class='serviceBlock col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 text-center'> <a href='<?php echo $rootPath; ?>services/web-design/'><img src='<?php echo $rootPath; ?>images/startup.png' alt='Web Design Image'>
                    <h4>Web Design</h4></a>
    </div>
    <?php } 
    if($theService !== "graphic") { ?>
    <div class='serviceBlock col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 text-center'> <a href='<?php echo $rootPath; ?>services/graphic-design/'><img src='<?php echo $rootPath; ?>images/computer.png' alt='Graphic Design Image'>
                    <h4>Graphic Design</h4></a>
    </div>
    <?php }
    if($theService !== "market") { ?>
    <div class='serviceBlock col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 text-center'> <a href='<?php echo $rootPath; ?>services/marketing/'><img src='<?php echo $rootPath; ?>images/group.png' alt='Marketing Image'>
                    <h4>Marketing</h4></a> </div>
    <? }
    if($theService !== "user") { ?>
        <div class='serviceBlock col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 text-center'> <a href='<?php echo $rootPath; ?>services/ux-ui/'><img src='<?php echo $rootPath; ?>images/user-icon.png' alt='UX Image'>
                    <h4>User Experience</h4></a> </div>
        <?php } ?>
</div>
