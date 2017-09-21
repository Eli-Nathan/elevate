<?php 
        
        $pageTitle = 'Our Work';
        $includePath = $_SERVER['DOCUMENT_ROOT'];
        $includePath .= "/elevate/includes/";
        include $includePath . 'header.php';
        if(isset($_GET['link'])) {
            $link = $_GET['link'];
            include $includePath . 'work-single.php';
        }
else {
    echo '<script>window.location = "/elevate/our-work/"; </script>';
}
        include $includePath . 'footer.php';
?>
