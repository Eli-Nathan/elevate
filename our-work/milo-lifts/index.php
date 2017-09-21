<?php 
        
        $pageTitle = 'Milo Lifts Graphic Design';

        $includePath = $_SERVER['DOCUMENT_ROOT'];
        $includePath .= "/elevate/includes/";
        include $includePath . 'header.php';

?>
<!-- Head section -->
<div class="head headDarken headNotHome col-sm-12" style='background:url(<?php echo $rootPath; ?>images/milo-cap.png); background-size:100%; background-position:center'>
    <div class='headSub  col-sm-12 text-center'> <a href='<?php echo $rootPath; ?>' title='Home Page'><img src='<?php echo $rootPath; ?>images/elevate.png' alt='Elevate Design' /></a>
        <h2 class='text-center'>Milo Lifts</h2>
        <p class='text-center'>Instagram Weight Lifter</p>
    </div>
</div>
<!-- /.Head -->
<div class="ourWork workSingle col-sm-12">
    <div class='workText col-sm-7'>
        <h3>Milo Lifts</h3>
        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.</p>
    </div>
    <div class='workImg col-sm-5'>
        <img src='<?php echo $rootPath; ?>images/milo-cap.png' alt='Milo Lifts Logo Design' />
    </div>    
</div>
<?php
    $theWork = 'milo';
    include $includePath . 'smallWork.php'; 
    include $includePath . 'footer.php'; 
?>
