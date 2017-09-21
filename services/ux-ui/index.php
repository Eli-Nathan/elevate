<?php 
        
        $pageTitle = 'UX & UI Services';

        $includePath = $_SERVER['DOCUMENT_ROOT'];
        $includePath .= "/elevate/includes/";
        include $includePath . 'header.php';

?>
    <!-- Head section -->
    <div class="head headNotHome uxHead col-sm-12">
        <div class='headSub col-sm-12 text-center'>
            <a href='<?php echo $rootPath; ?>' title='Home Page'><img src='<?php echo $rootPath; ?>images/elevate.png' alt='Elevate Design' /></a>
            <h2 class='text-center'>UX & UI</h2>
            <p class='text-center'>Pretty websites mean nothing when they come from a "Souless" theme - We ensure that you website caters specifically to your customer's needs.</p>
        </div>
    </div>
    <!-- /.Head -->
    <div class="singleService col-sm-12">
        <div class='singleServiceText col-sm-6'>
            <h3>UX & UI</h3>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
            <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
            <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
            <h4 id='ux'>User Experience (UX)</h4>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <h4 id='ui'>User Interface (UI)</h4>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
            <h4 id='ua'>User Analysis</h4>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
        </div>
        <div class='singleServiceImg col-sm-6'>
            <h3>Some examples</h3> <img src='<?php echo $rootPath; ?>images/bricklane-ux-2.png' alt='Brick Lane UX'>
            <hr> <img src='<?php echo $rootPath; ?>images/bricklane-ux.png' alt='Brick Lane UI'> </div>
    </div>
    <?php 
    $theService = "user";
    include $includePath . 'moreServices.php';
    include $includePath . 'footer.php';

?>