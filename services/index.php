<?php 
        
        $pageTitle = 'Services';

        $includePath = $_SERVER['DOCUMENT_ROOT'];
        $includePath .= "/elevate/includes/";
        include $includePath . 'header.php';

?>
    <!-- Head section -->
    <div class="head headNotHome serviceHead col-sm-12">
        <div class='headSub col-sm-12 text-center'> <a href='<?php echo $rootPath; ?>' title='Home Page'><img src='<?php echo $rootPath; ?>images/elevate.png' alt='Elevate Design' /></a>
            <h2 class='text-center'>Services</h2>
            <p class='text-center'>Have a look below to see what we can offer you or your business.</p>
        </div>
    </div>
    <!-- /.Head -->
    <div class="servicesPage col-sm-12">
        <div class='serviceBlock col-md-3 col-sm-6 text-center'> <a href='<?php echo $rootPath; ?>services/web-design/'><img src='<?php echo $rootPath; ?>images/startup.png' alt='Web Design Image'>
                    <h4>Web Design</h4></a>
            <p class='text-left'>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <hr> <a href='<?php echo $rootPath; ?>services/web-design/'>Learn more &nbsp; <i class='fa fa-angle-right'></i></a> </div>
        <div class='serviceBlock col-md-3 col-sm-6 text-center'> <a href='<?php echo $rootPath; ?>services/graphic-design/'><img src='<?php echo $rootPath; ?>images/computer.png' alt='Graphic Design Image'>
                    <h4>Graphic Design</h4></a>
            <p class='text-left'>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <hr> <a href='<?php echo $rootPath; ?>services/graphic-design/'>Learn more &nbsp; <i class='fa fa-angle-right'></i></a> </div>
        <div class='serviceBlock col-md-3 col-sm-6 text-center'> <a href='<?php echo $rootPath; ?>services/marketing/'><img src='<?php echo $rootPath; ?>images/group.png' alt='Marketing Image'>
                    <h4>Marketing</h4></a>
            <p class='text-left'>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <hr> <a href='<?php echo $rootPath; ?>services/marketing/'>Learn more &nbsp; <i class='fa fa-angle-right'></i></a> </div>
        <div class='serviceBlock col-md-3 col-sm-6 text-center'> <a href='<?php echo $rootPath; ?>services/ux-ui/'><img src='<?php echo $rootPath; ?>images/user-icon.png' alt='UX Image'>
                    <h4>User Experience</h4></a>
            <p class='text-left'>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <hr> <a href='<?php echo $rootPath; ?>services/ux-ui/'>Learn more &nbsp; <i class='fa fa-angle-right'></i></a> </div>
    </div>
    <?php include $includePath . 'footer.php'; ?>