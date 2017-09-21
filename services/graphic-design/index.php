<?php 
        
        $pageTitle = 'Graphic Design Services';

        $includePath = $_SERVER['DOCUMENT_ROOT'];
        $includePath .= "/elevate/includes/";
        include $includePath . 'header.php';

?>
<!-- Head section -->
<div class="head headNotHome graphicHead col-sm-12">
    <div class='headSub col-sm-12 text-center'>
        <a href='<?php echo $rootPath; ?>' title='Home Page'><img src='<?php echo $rootPath; ?>images/elevate.png' alt='Elevate Design' /></a>
        <h2 class='text-center'>Graphic Design</h2>
        <p class='text-center'>Good design has always been a large factor in appealing to your customers base - logos and business card design are just some of the services we can offer</p>
    </div>
</div>
<!-- /.Head -->
<div class="singleService col-sm-12">
    <div class='singleServiceText col-sm-6'>
        <h3>Graphic Design</h3>
        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
        <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
        <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
        <p><i class='fa fa-angle-right'></i>&nbsp; &nbsp; Mauris blandit aliquet elit.</p>
        <h4 id='logos'>Logo Design</h4>
        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
        <h4 id='business-cards'>Business Card Design</h4>
        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
        <h4 id='promotional'>Promotional Artwork</h4>
        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>
    </div>
    <div class='singleServiceImg col-sm-6'>
        <h3>Some examples</h3> <img src='<?php echo $rootPath; ?>images/bar-news.png' alt='Bar Bible Logo'>
        <hr> <img src='<?php echo $rootPath; ?>images/milo-cap.png' alt='Milo Lifts'> </div>
</div>
<?php 
    $theService = "graphic";
    include $includePath . 'moreServices.php';
    include $includePath . 'footer.php';

?>
