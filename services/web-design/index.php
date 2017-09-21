<?php 
        
        $pageTitle = 'Web Design Services';

        $includePath = $_SERVER['DOCUMENT_ROOT'];
        $includePath .= "/elevate/includes/";
        include $includePath . 'header.php';

?>
    <!-- Head section -->
    <div class="head headNotHome webHead col-sm-12">
        <div class='headSub col-sm-12 text-center'> <a href='<?php echo $rootPath; ?>' title='Home Page'><img src='<?php echo $rootPath; ?>images/elevate.png' alt='Elevate Design' /></a>
            <h2 class='text-center'>Web Design</h2>
            <p class='text-center'>Your website is usually the first thing your customers see. It's never been more important to have the best of the best! Have a look below to see what web services we offer</p>
        </div>
    </div>
    <!-- /.Head -->
    <div class="singleService col-sm-12">
        <div class='singleServiceText col-sm-6'>
            <h3>Websites</h3>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
            <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
            <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
            <h4 id='web-design'>Web Design</h4>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <h4 id='web-development'>Web Development</h4>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <h4 id='content-management'>Content Management</h4>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
        </div>
        <div class='singleServiceImg col-sm-6'>
            <h3>Some examples</h3> <img src='<?php echo $rootPath; ?>images/mock-up2.png' alt='Bar Bible Logo'>
            <hr> <img src='<?php echo $rootPath; ?>images/mock-ups.png' alt='Milo Lifts'> </div>
    </div>
    <?php 
    $theService = "web";
    include $includePath . 'moreServices.php';
    include $includePath . 'footer.php';

?>