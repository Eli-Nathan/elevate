<?php 
        
        $pageTitle = 'Our Work';
        $includePath = $_SERVER['DOCUMENT_ROOT'];
        $includePath .= "/elevate/includes/";
        include $includePath . 'header.php';
        $workPage = 'workMain';
        
?>
<?php 
if (!isset($_GET['link'])) { ?>
    <!-- Head section -->
    <div class="head headNotHome serviceHead col-sm-12">
        <div class='headSub col-sm-12 text-center'> <a href='<?php echo $rootPath; ?>' title='Home Page'>
            <img src='<?php echo $rootPath; ?>images/elevate.png' alt='Elevate Design' /></a>
            <h2 class='text-center'>Our Work</h2>
            <p class='text-center'>Have a wee peek at some of the work we've done!</p>
        </div>
    </div>
    <!-- /.Head -->
<?php 
    $dontAdd = true;  
    include $includePath . 'work.php'; 
}
    else {
        $link = $_GET['link'];
        include $includePath . 'work-single.php';
    }
    include $includePath . 'footer.php';
?>
