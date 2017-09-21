<?php 
    if($workPage == 'workMain') {
        $amount = 9;
    }
    else {
        $amount = 3;
    }
    
?>
  <div class="ourWork col-sm-12">
  <?php
    $stmt = $mysqli->prepare("SELECT id, client, service, internal, images, serviceLink FROM portfolio ORDER BY RAND()");
    $stmt->execute();
    $stmt->bind_result($workId, $client, $service, $internal, $images, $serviceLink);
    $stmt->store_result();
    while ($stmt->fetch()) {
        $parts = explode(',', $images);
        echo "<div class='col-md-4 col-sm-6 workPiece'>
        <div class='panel panel-primary'> <a href='". $rootPath ."our-work/".$internal."/'>
                   <div class='panel-heading' style='background:url(". $rootPath . $parts[0] . "); background-size:cover; background-position:center'></div>
                </a>
            <div class='panel-body'>
                <a href='". $rootPath ."our-work/".$internal."/'>
                    <h3>". $client ."</h3>
                </a>
                <p><a href='". $rootPath ."services/".$serviceLink."/'>".$service."</a></p>
            </div>
        </div>
    </div>";
    }
      ?>
</div>