<!DOCTYPE html>
<html>
<head>
    <title>Dutika</title>
    <link rel="icon" type="icon" href="<?php echo base_url();?>logic/img/logo-dutika.png" type="image/png">
    <link rel = "stylesheet" href = "<?php echo base_url();?>logic/styles/style-login.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- jquery buat loading -->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <!-- tutup jquery -->
      <script type="text/javascript">
      function counter(time, url){
            var interval = setInterval(function(){
                // $('#waktu').text(time);
                time = time - 1;
         
                if(time == 0){
                    clearInterval(interval);
                    window.location = url;
                }
            }, 3000);
        }
 
    $(document).ready(function(){
        counter(10, '<?php echo base_url();?>user/duel/c_duel/hasil_find');
    });
</script>
</head>
<body>

<input type="checkbox" id="xBxHack" />
        <nav class="mainNav" id="mainNav">
            <div class="container container-nav">
                <p class="progress-title">ANDA SEKARANG SEDANG MENCARI LAWAN</p><a href="<?php echo base_url();?>c_index"><i class="fa fa-times progress-cancel" style="font-size:24px;"></i></a>
            </div>
        </nav>  
        <div class="progress-wrap progress-loading" data-progress-percent="100">
              <div class="progress-bar-loading progress-loading"></div>
        </div>
<div id="waktu"></div>
<center>
    <div class="loading-progress"><p>Harap Tunggu</p></div>
</center>
</body>
<script>
  // on page load...
    moveProgressBar();
    // on browser resize...
    $(window).resize(function() {
        moveProgressBar();
    });

    // SIGNATURE PROGRESS
    function moveProgressBar() {
      console.log("moveProgressBar");
        var getPercent = ($('.progress-wrap').data('progress-percent') / 100);
        var getProgressWrapWidth = $('.progress-wrap').width();
        var progressTotal = getPercent * getProgressWrapWidth;
        var animationLength = 30000;
        
        // on page load, animate percentage bar to data percentage length
        // .stop() used to prevent animation queueing
        $('.progress-bar-loading').stop().animate({
            left: progressTotal
        }, animationLength);
    }
</script>
</html>