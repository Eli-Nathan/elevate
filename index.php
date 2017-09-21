<?php 

        $includePath = $_SERVER['DOCUMENT_ROOT'];
        $includePath .= "/elevate/includes/";
        include $includePath . 'header.php';

?>
        <!-- Head section -->
        <div class="head col-sm-12">
            <video id="vid" poster='<?php echo $rootPath; ?>images/poster.png' video loop autobuffer autoplay>
                <source id="mp4" src="<?php echo $rootPath; ?>images/elevator.mp4" type="video/mp4"> </video>
            <div class='headSub col-sm-12 text-center'> <img src='<?php echo $rootPath; ?>images/elevate.png' alt='Elevate Design' />
                <p class='col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12'>Our digital agency, based here in sunny Glasgow, will help connect your business with your customers through super clean websites, effective branding and stunning designs.</p>
                <div class='btnDiv col-sm-12'> <a class='btn' href='<?php echo $rootPath; ?>our-work/'>Our Work</a> <a class='btn' href='<?php echo $rootPath; ?>services/'>Our Services</a> </div>
            </div>
        </div>
        <!-- /.Head -->
        <div class="services col-sm-12">
            <div class="service-block serv-1 col-md-3 col-sm-6">
                <div class="service-head col-sm-12">
                    <h4 class='col-sm-9'>Web Design & Development </h4><i class='col-sm-3 fa fa-desktop'></i> </div>
                <div class="service-content col-sm-12">
                    <p>From our first meeting over a cup of coffee, to getting your site on the internet, I provide professional and effective web development. Fancy a chat about an update for your website? Get in contact to start planning.
                        <br>
                        <br> </p>
                    <hr> <a href='<?php echo $rootPath; ?>services/web-design/'>Web design services &nbsp; <i class='fa fa-angle-right'></i></a> </div>
            </div>
            <div class="service-block serv-2 col-md-3 col-sm-6">
                <div class="service-head col-sm-12">
                    <h4 class='col-sm-9'>Graphic Design</h4> <i class='col-sm-3 fa fa-pencil'></i></div>
                <div class="service-content col-sm-12">
                    <p>There's nothing like a few little graphic tweaks to make your site stand out! I can work a bit of magic on Photoshop to create the best ideas for your business. If you have your own designs, I can create a story board to show you how your finished product might look.</p>
                    <hr> <a href='<?php echo $rootPath; ?>services/graphic-design/'>Graphic design services &nbsp; <i class='fa fa-angle-right'></i></a> </div>
            </div>
            <div class="service-block serv-3 col-md-3 col-sm-6">
                <div class="service-head col-sm-12">
                    <h4 class='col-sm-9'>Marketing</h4> <i class='col-sm-3 fa fa-paper-plane'></i></div>
                <div class="service-content col-sm-12">
                    <p>Search engine optimisation and social media branding; these are just a couple of ways that I can help your business take off. Whether starting from scratch or just looking for a wee update, linking your pages to social media and Google can be profitable for any business.</p>
                    <hr> <a href='<?php echo $rootPath; ?>services/marketing/'>Marketing services &nbsp; <i class='fa fa-angle-right'></i></a> </div>
            </div>
            <div class="service-block serv-4 col-md-3 col-sm-6">
                <div class="service-head col-sm-12">
                    <h4 class='col-sm-9'>UK & UI</h4><i class='col-sm-3 fa fa-user'></i></div>
                <div class="service-content col-sm-12">
                    <p>There's no need to pay through the nose. Each project will be appropriately costed and we can agree on a price beforehand. There's nothing stopping you from getting a great product for less. Your satisfaction is my greatest priority.</p>
                    <hr> <a href='<?php echo $rootPath; ?>services/ux-ui/'>UX & UI services &nbsp; <i class='fa fa-angle-right'></i></a> </div>
            </div>
        </div>
        <div class='mobileServices col-sm-12'> <a class='accordBtn btn text-left' data-toggle="collapse" data-target="#webDev"><span class='col-xs-9'>Web Design & Development</span> <span class='col-xs-3 text-center'><i class='col-sm-3 fa fa-desktop'></i> &nbsp; <i class='caret-icon fa fa-caret-down'></i></span></a>
            <div id="webDev" class="collapse col-sm-12">
                <div class='serviceInner'>
                    <p>From our first meeting over a cup of coffee, to getting your site on the internet, I provide professional and effective web development. Fancy a chat about an update for your website? Get in contact to start planning.</p>
                    <hr> <a href='<?php echo $rootPath; ?>services/web-design/'>Web design services &nbsp; <i class='fa fa-angle-right'></i></a> </div>
            </div> <a class='accordBtn btn text-left' data-toggle="collapse" data-target="#graphDes"><span class='col-xs-9'>Graphic Design</span> <span class='col-xs-3 text-center'><i class='col-sm-3 fa fa-pencil'></i> &nbsp; <i class='caret-icon fa fa-caret-down'></i></span></a>
            <div id="graphDes" class="collapse col-sm-12">
                <div class='serviceInner'>
                    <p>There's nothing like a few little graphic tweaks to make your site stand out! I can work a bit of magic on Photoshop to create the best ideas for your business. If you have your own designs, I can create a story board to show you how your finished product might look.</p>
                    <hr> <a href='<?php echo $rootPath; ?>services/graphic-design/'>Graphic design services &nbsp; <i class='fa fa-angle-right'></i></a> </div>
            </div> <a class='accordBtn btn text-left' data-toggle="collapse" data-target="#marketing"><span class='col-xs-9'>Marketing</span> <span class='col-xs-3 text-center'><i class='col-sm-3 fa fa-paper-plane'></i> &nbsp; <i class='caret-icon fa fa-caret-down'></i></span></a>
            <div id="marketing" class="collapse col-sm-12">
                <div class='serviceInner'>
                    <p>Search engine optimisation and social media branding; these are just a couple of ways that I can help your business take off. Whether starting from scratch or just looking for a wee update, linking your pages to social media and Google can be profitable for any business.</p>
                    <hr> <a href='<?php echo $rootPath; ?>services/marketing/'>Marketing services &nbsp; <i class='fa fa-angle-right'></i></a> </div>
            </div> <a class='accordBtn btn text-left' data-toggle="collapse" data-target="#ux"><span class='col-xs-9'>UX & UI</span> <span class='col-xs-3 text-center'><i class='col-sm-3 fa fa-user'></i> &nbsp; <i class='caret-icon fa fa-caret-down'></i></span></a>
            <div id="ux" class="collapse col-sm-12">
                <div class='serviceInner'>
                    <p>There's no need to pay through the nose. Each project will be appropriately costed and we can agree on a price beforehand. There's nothing stopping you from getting a great product for less. Your satisfaction is my greatest priority.</p>
                    <hr> <a href='<?php echo $rootPath; ?>services/ux-ui/'>UX & UI services &nbsp; <i class='fa fa-angle-right'></i></a> </div>
            </div>
        </div>
        <div class='clearfix'></div>
        <div class='cta col-sm-12'>
            <div class='ctaInner col-sm-12 text-center'>
                <h1><img src='<?php echo $rootPath; ?>images/logo-white.png' alt='Elevate' class='elevate' /> your business</h1>
                <div class='col-sm-12'>
                    <p>Get in touch today for a quote for web design, branding or marketing services that will raise you far above your competition</p>
                </div>
                <div class='img-down col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1'>
                    <a href='<?php echo $rootPath; ?>contact'><img src='<?php echo $rootPath; ?>images/grow.png' alt='Desk' /></a> <a class='btn' href='<?php echo $rootPath; ?>contact'>Get in touch</a> </div>
            </div>
        </div>
        <div class='work col-sm-12'>
            <div class='workText col-sm-6 '>
                <h2>Our Work</h2>
                <hr>
                <p>Here at <img class='elevate' src='<?php echo $rootPath; ?>images/logo-black.png' alt="Elevate" title='Elevate' />, we strive to provide the best of the best. We've built many websites for businesses big and small across a wide range of industries. From small highland hotels to Scotland's leading licensed trade publisher, we build and maintain some of the best websites around. </p>
                <p>And we don't stop there! We also provide graphic design and marketing services. Logos and social media marketing are just some of the services we give you. Have a look at our portfolio to see what we can do for you!</p> <a class='btn' href='#'>View Portfolio</a> </div>
            <div class='workImg col-sm-6'> <img src='<?php echo $rootPath; ?>images/mock-up2.png' alt='Portfolio Sample' /> </div>
        </div>
        <div class='reviews col-sm-12 text-center'>
            <h2>Some kind words</h2>
            <hr>
            <p>Elevate designed my brilliant website - I am a very demanding client and gave them a very specific brief which they delivered.
                <br> They have listened to my requests as the needs of my business have developed and changed.
                <br> They are attentive , driven and client focused! Thank you!</p>
            <p class='name'>Deborah Ho - Deborah Holistics</p>
        </div>
        <div class='recentWork col-sm-12'>
            <div class='col-sm-6 recentText'>
                <h2 class='text-center'>Our Latest Project</h2>
                <hr>
                <p>Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                <div class='text-center'> <a class='btn' href='#'>View project</a> </div>
            </div>
            <div class='col-sm-6 latestImg'></div>
        </div>
        <?php $dontShowCTA = true; ?>
       <?php include $includePath . 'footer.php'; ?>