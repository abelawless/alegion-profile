<!doctype html>
<html lang="en"  class="no-js">
    <head>
        <meta charset="utf-8">
        <title>dashboard</title>
        <meta name="description" content="">
        <?php include('inc/globals.php'); ?>
    </head>
    <body class="home">
        <header>
                <?php include('inc/header.php'); ?>
        </header>
        <div class='column grid12'>
            <div id="stats" class="column grid8">
                <div id="main-content" class="content">
                    <div class="column grid3 stat">
                        <p>143<br><span>Tasks</span></p>
                    </div>
                    <div class="column grid3 stat">
                        <p>32<br><span>Hours</span></p>
                    </div>
                    <div class="column grid3 stat">
                        <p>4.5<br><span>Tasks/hr</span></p>
                    </div>
                    <div class="column grid3 stat">
                        <p>$653<br><span>Amount</span></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div id='contact' class='column grid4'>
                <h5>Inigo Montoya</h5>
                <div class="box">
                    <a class="button" href="#popup2">Edit Contact</a>
                </div>
                <p class='address'>555 Lefthanded Dr.</p>
                <p class='city'>Austin, TX 55555</p>
                <p class='phone'>012-345-6789</p>
                <h6>Payment</h6>
                <div class="box">
                    <a class="button" href="#popup1">Edit Payment</a>
                </div>
                <p><strong>Visa ******5583</strong></p>
                

                    <div id="popup1" class="overlay">
                        <div class="popup">
                            <a class="close" href="#">&times;</a>
                            <?php include('inc/payment.php'); ?>
                        </div>
                    </div>
                    <div id="popup2" class="overlay">
                        <div class="popup">
                            <a class="close" href="#">&times;</a>
                            <?php include('inc/contactinfo.php'); ?>
                        </div>
                    </div>

            </div>
            <br class='clear'>
            <div class='title column grid12'>Task Accuracy</div>
            <div id='tasks' class='column grid12'>
                <img src='img/rich.png' alt=''>
            </div>
            <div class='title column grid12'>Skills</div>
            <div id='skills' class='column grid12'>
                <div class='column grid2'>
                    <img src='img/circle-large2.png' alt=''><br/>
                    Skill01
                </div>
                <div class='column grid2'>
                    <img src='img/circle-large.png' alt=''><br/>
                    Skill02
                </div>
                <div class='column grid2'>
                    <img src='img/circle-large2.png' alt=''><br/>
                    Skill03
                </div>
                <div class='column grid2'>
                    <img src='img/circle-large.png' alt=''><br/>
                    Skill04
                </div>
                <div class='column grid2'>
                    <img src='img/circle-large.png' alt=''><br/>
                    Skill05
                </div>
                <div class='column grid2'>
                    <img src='img/circle-large.png' alt=''><br/>
                    Skill06
                </div>
            </div>
        </div>
        <br class='clear'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="assets/js/jquery.colorscroll.js"></script>
        <script src="assets/js/jquery-scrolltofixed-min.js"></script>
        
    </body>
</html>