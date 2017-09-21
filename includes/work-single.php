    <?php
    $stmt = $mysqli->prepare("SELECT id, client, service, internal, images, link, serviceLink , description FROM portfolio WHERE internal = ?");
    $stmt->bind_param('s', $link);
    $stmt->execute();
    $stmt->bind_result($workId, $client, $service, $internal, $images, $link, $serviceLink, $description);
    $stmt->store_result();
    // str_repeat("", 10);
    while ($stmt->fetch()) {
        $parts = explode(',', $images);
        echo "
        <!-- /.Head -->
        
        <div class='head headDarken headNotHome col-sm-12' style='background:url(". $rootPath . $parts[0] ."); background-size:100%; background-position:bottom'>
            <div class='headSub  col-sm-12 text-center'> <a href='". $rootPath ."' title='Home Page'>
                <img src='". $rootPath ."images/elevate.png' alt='Elevate Design' /></a>
                <h2 class='text-center'>".$client."</h2>
            </div>
        </div>
        <!-- /.Head -->
        <div class='ourWork workSingle col-sm-12'>
        <div class='workText col-sm-7'>
            <h3>".$client."</h3>
            <p>".$description."</p>
            <a class='btn' href='".$link."' target='_blank'>View Site</a>
        </div>
        <div class='workImg col-sm-5'>";
        foreach($parts as $img) {    
            echo "<img src='". $rootPath . $img ."' alt='" . $client . " - " . $service . "' />";
        }
        echo " </div>
        </div>";
    }
      ?>
