<?php 
        
        $pageTitle = 'Marketing Services';

        $includePath = $_SERVER['DOCUMENT_ROOT'];
        $includePath .= "/elevate/includes/";
        include $includePath . 'header.php';

?>
    <!-- Head section -->
    <div class="head headNotHome marketingHead col-sm-12">
        <div class='headSub col-sm-12 text-center'>
            <a href='<?php echo $rootPath; ?>' title='Home Page'><img src='<?php echo $rootPath; ?>images/elevate.png' alt='Elevate Design' /></a>
            <h2 class='text-center'>Marketing</h2>
            <p class='text-center'>Get your name out there and make sure it's there to stay!</p>
        </div>
    </div>
    <!-- /.Head -->
    <div class="singleService col-sm-12">
        <div class='singleServiceText col-sm-6'>
            <h3>Marketing</h3>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
            <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
            <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
            <h4 id='social-media'>Social Media Marketing</h4>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <h4 id='seo'>Search Engine Optimisation (SEO)</h4>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <h4 id='ppc'>Pay Per Click (PPC)</h4>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
        </div>
        <div class='singleServiceImg col-sm-6'>
            <h3>Some examples</h3> <img src='<?php echo $rootPath; ?>images/analytics.png' alt='Google Analytics'>
            <hr> <img src='<?php echo $rootPath; ?>images/dram.png' alt='Dram Scotland SEO'> </div>
    </div>
    <?php 
    $theService = "market";
    include $includePath . 'moreServices.php';
    include $includePath . 'footer.php';

?>