<!DOCTYPE html>
<html>
<head>
    <title>Dutika</title>
    <link rel="icon" type="icon" href="<?php echo base_url();?>logic/img/logo-dutika.png" type="image/png">
    <link rel = "stylesheet" href = "<?php echo base_url();?>logic/styles/style-login.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">      
       <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script type="text/javascript">
      function counter(time, url){
            var interval = setInterval(function(){
                $('#waktu').text(time);
                time = time - 1;
         
                if(time == 0){
                    clearInterval(interval);
                    window.location = url;
                }
            }, 1000);
        }
 
    $(document).ready(function(){
        counter(30, '<?php echo base_url();?>user/duel/c_duel/masuk_quiz/<?php echo md5($id_duel);?>');
    });
</script>
      <style>
ol { 
  line-height: -2;
  list-style-type: none;
  counter-reset: section;
  margin-left: 3rem;
  font-family: sans-serif;
  font-size: 14px;
}
li {
    counter-increment: section;
    margin-top: 2rem;
}
li:before {
    content: counters(section,"");
    border: 2px solid white;
    border-radius: 50%;
    display: inline-block;
    float: left;
    width: 3rem;
    height: 3rem;
    text-align: center;
    padding-top: .25rem;
    font-weight: 700;
    margin-left: -5rem;
    margin-right: 1rem;
    background: rgba(0,0,0,0.025);
}

@media screen and (max-width: 30em) { 
  ol { margin-left: 0; } 
li:before { 
  display: block;
  float: none;
  margin: 1rem auto;
}
}
      </style>
</head>
<body style="overflow:auto;">

<input type="checkbox" id="xBxHack" />
        <nav class="mainNav" id="mainNav">
            <div class="container container-nav">
                <p class="progress-title">YOU ARE NOW MEET WITH YOUR OPPONENT GET READY</p><a href="login.html"><i class="fa fa-times progress-cancel" style="font-size:24px;"></i></a>
</div>
        </nav>
        <div class="progress-wrap progress-loading" data-progress-percent="-100">
  <div class="progress-bar-loading progress-loading"></div>
</div>
<center>
    <div class="container-versus">
  <div class="row ">
    <div class="col-lg-12">

      <div id="hilang">
        <div class="col-md-3" style="margin-top:50px;">
          <div class="profile-card text-center">

            
            <?php foreach ($data_duel as $soni):?>
              <div class="profile-info">

              <img class="profile-pic" src="<?php echo base_url();?>images/user/user/<?php echo $soni->foto;?>">

              <h2 class="hvr-underline-from-center"><?php echo $soni->nama;?><span>Level : <?php echo $soni->tingkat;?> </span> <span>Kelas :<?php echo $soni->kelas;?></span></h2>
              <div><img class="img-valign" src="<?php echo base_url();?>images/score.png" alt="" /><span class="non-data-text"><?php echo $soni->score_user;?> </span>
              </div>
              <br>
              <div ><h4>Status : </h4><span class="status-fightsalah" >
              <?php if($soni->status1==0)
              {
                ?>
                <span id="hilang1" class="status-fight">WAITING</span>
               <?php 
              }
              ?>
              <?php if($soni->status1==1)
              {
                ?>
                <span id="hilang1" class="status-fight">READY</span>
               <?php 
              }
              ?>
                <span id="tampil1" class="status-fight"></span>

              </div>
            </div>
            <input type="hidden" id="ready1" value="READY">
          <?php endforeach;?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="profile-card text-center" style="padding:5%;">

            <div class="profile-info">

              <h2 class="hvr-underline-from-center" style="margin-top:-30px;">RULES<span></span></h2>
              <div align="left">
                <ol class="hintfight">
                  <li>You Must Answer 5 Question
                  <li>Each Question have 1 Correct and 3  Incorrect Answer
                  <li>If your Answer Correctly You will get +100 Score And +500 Coins
                  <li>If Opponent Answer Correct Before your Correct Answer you will get +50 Score  and +250 Coins
                  <li>If Your Answer Incorrectly You Will Get Score And if You Not Answer You Will Get 0 Score 
                  <li>And Whoever get Highest Scores Win The Fight
                </ol>
              </div>
              </div>

          </div>
        </div>
        <div class="col-md-3" style="margin-top:50px;">
          
          <div class="profile-card text-center">

            <?php foreach ($data_duel2 as $soni):?>
            <div class="profile-info">

              <img class="profile-pic" src="<?php echo base_url();?>images/user/user/<?php echo $soni->foto;?>">

              <h2 class="hvr-underline-from-center"><?php echo $soni->nama;?><span>Level : <?php echo $soni->tingkat;?> </span> <span>Kelas :<?php echo $soni->kelas;?></span></h2>
              <div><img class="img-valign" src="<?php echo base_url();?>images/score.png" alt="" /><span class="non-data-text"><?php echo $soni->score_user;?> </span>
              </div>
              <br>
              <div ><h4>Status : </h4>
                         <?php if($soni->status2==0)
              {
                ?>
                <span id="hilang2" class="status-fight">WAITING</span>
               <?php 
              }
              ?>
              <?php if($soni->status2==1)
              {
                ?>
                <span id="hilang2" class="status-fight">READY</span>
               <?php 
              }
              ?>
            </div>
          <?php endforeach;?>
        </div>


      </div>
    </div>

  </div>

  <div id="tampil"></div>
</div>
<div class='button-ready -border' onclick="myFunction(<?php echo $id_user;?>)">
<!-- onclick="myFunction()" -->
Start Fight

</div>
</center>
</body>
<script>
  function myFunction(obj) {
       var str = obj;
    // alert(str);
  
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("tampil").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url();?>user/duel/c_duel/status_duel?q=" + str,true);
      xmlhttp.send();
            var sel0 = $("#hilang");
                sel0.hide();
    }
</script>
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