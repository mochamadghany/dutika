<!DOCTYPE html>
<html>
<head>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/Sortable/1.4.2/Sortable.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://codepen.io/zavoloklom/pen/Gubja.css">
  <link rel="stylesheet" type="text/css" href="http://codepen.io/zavoloklom/pen/yaozl.css">
    <title>Dutika</title>
    
    <link rel="icon" type="icon" href="<?php echo base_url();?>logic/img/logo-dutika.png" type="image/png">
    <link rel = "stylesheet" href = "<?php echo base_url();?>logic/styles/style-login.css">
</head>
<body>

<input type="checkbox" id="xBxHack" />
        <nav class="mainNav" id="mainNav">
            <div class="container container-nav">
        <label class="navBars" for="xBxHack">
            <i class="fa fa-bars"></i>
        </label>
            <ul id="menu" class="menu-responsive">
            <li><a href="<?php echo base_url();?>C_index"><i class="fa fa-home big"></i>&nbsp;HOME</a></li>
            <li><a href="#">MISI</a></li>
            <li><a href="<?php echo base_url();?>user/bots/c_bots">BOT</a></li>
            <li><a href="#">BELAJAR</a></li>
            <li><a href="<?php echo base_url();?>forum/C_forum">FORUM</a></li>
            <li><a href="<?php echo base_url();?>rank/C_rank">SKOR</a></li>
            
        </ul>
                </div>
                <ul class="nav-list" id="nav">
                    <li>

                             <!-- notification dropdown -->      
            <li class="message-nav dropdown">
               <a href="#" id="dropdownMenu1" data-toggle="dropdown" class="btn-notification" aria-haspopup="true" aria-expanded="true">
                  <i class="fa fa-bell"></i>
                                <span class="notification-label notification-label-red">3</span>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                       <li class="notification-title">
                        <h4>Pemberitahuan</h4>
                     </li>
                  <a href="#" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="padding:0;">
                     <ul class="notification-list">
                        <li class="notification-item">
                           <a class="notification-anchor" href="#">
                              <span class="notification-img">
                                 <img src="<?php echo base_url();?>/logic/img/swag-bitch.jpg"/>
                               </span>
                                 <p class="notification-user">
                                 <span>Fajar Saputo J</span> |
                                 <span class="timestamp">15 menit yang lalu</span>
                                 </p>
                                 <p class="notification-type">
                                    Saya Menantang Anda Untuk Berduel
                                 </p>
                                 
                           </a>
                        </li>
                        <li class="notification-item">
                           <a class="notification-anchor" href="#">
                              <span class="notification-img">
                                 <img src="<?php echo base_url();?>logic/img/swag-bitch.jpg"/>
                               </span>
                                 <p class="notification-user">
                                 <span>Fajar Saputo J</span> |
                                 <span class="timestamp">15 menit yang lalu</span>
                                 </p>
                                 <p class="notification-type">
                                    Saya Menantang Anda Untuk Berduel
                                 </p>
                                 
                           </a>
                        </li>
                        <li class="notification-item">
                           <a class="notification-anchor" href="#">
                              <span class="notification-img">
                                 <img src="<?php echo base_url();?>logic/img/swag-bitch.jpg"/>
                               </span>
                                 <p class="notification-user">
                                 <span>Fajar Saputo J</span> |
                                 <span class="timestamp">15 menit yang lalu</span>
                                 </p>
                                 <p class="notification-type">
                                    Saya Menantang Anda Untuk Berduel
                                 </p>
                                 
                           </a>
                        </li>
                        <li class="notification-item">
                           <a class="notification-anchor" href="#">
                              <span class="notification-img">
                                 <img src="<?php echo base_url();?>logic/img/swag-bitch.jpg"/>
                               </span>
                                 <p class="notification-user">
                                 <span>Fajar Saputo J</span> |
                                 <span class="timestamp">15 menit yang lalu</span>
                                 </p>
                                 <p class="notification-type">
                                   Saya Menantang Anda Untuk Berduel
                                 </p>
                                 
                           </a>
                        </li>
                         <li class="notification-item">
                           <a class="notification-anchor" href="#">
                              <span class="notification-img">
                                 <img src="<?php echo base_url();?>logic/img/swag-bitch.jpg"/>
                               </span>
                                 <p class="notification-user">
                                 <span>Fajar Saputo J</span> |
                                 <span class="timestamp">15 menit yang lalu</span>
                                 </p>
                                 <p class="notification-type">
                                    Saya Menantang Anda Untuk Berduel
                                 </p>
                                 
                           </a>
                        </li>
                     </ul>
                     <li class="notification-footer"><h4><a href="#">Lihat Semua</a></h4></li>
                  </ul>
               </a>
            </li>
            <!-- end -->
    <?php foreach ($score as $q):?>
            <li class="profil-image">
                  <a id="filter-sort-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                   <img src="<?php echo base_url();?>images/user/user/<?php echo $q->foto;?>" />
                  </a>   
                  <ul class="dropdown-menu sorting dropdown-menu-right" aria-labelledby="filter-sort-dropdown" style="margin-right:-30px;margin-top:10px;">
                     <ul class="filter-sort-list" >
                        <li class="filter-sort-item">
                           <a href="<?php echo base_url();?>C_index" class="black-filter"><p>Home</p></a>
                        </li>
                        <li class="filter-sort-item" href="#">
                           <a href="<?php echo base_url();?>user/C_profile" class="black-filter">Profil</a>
                        </li>
                        <li class="filter-sort-item" href="#">
                           <a href="<?php echo base_url();?>forum/C_forum/logout" class="black-filter">Keluar</a>
                        </li>
                     </ul>
                  </ul>
               </a>
            </li>
                </ul>
            </div>
        </nav>
<div class="column-one" >
    <div class="profile-content"><img src="<?php echo base_url();?>images/user/user/<?php echo $q->foto;?>" alt="Portret of Sara Robertson"/>
      <h1><?php echo $q->username;?></h1>
      <p>TINGKATAN : <?php echo $q->tingkat;?> KELAS : <?php echo $q->kelas;?></p>
    </div>
    <div class="score-warp">
        <img class="img-valign" src="<?php echo base_url();?>logic/img/score.png" alt="" />
        <span class="score-separator"></span>
        <span class="non-data-text"><?php echo $q->scoree;?></span>
    </div>
  
    <div class="score-warp-coins">
        <img class="img-valign" src="<?php echo base_url();?>logic/img/coin.png" alt="" />
        <span class="score-separator"></span>
        <span class="non-data-text"><?php echo $q->coin;?> </span>
    </div>
    <div style="width:100%;overflow:hidden;">
    <p style="margin:10px;"><i class="fa fa-question"></i> Hint & Quote</p>
<div class="fader-horizontal">
  <ul >
    <li>
      <div class="box-1">
        <img src="<?php echo base_url();?>logic/img/hint-bot.png"><br>
        <p class="title-hint">Kesulitan dalam soal? Yuk tanya teman kamu di forum</p>
        </div>
    </li>
    <li>
    <li>
      <div class="box-1">
        <img src="<?php echo base_url();?>logic/img/hint-bot.png"><br>
        <p class="title-hint">Kamu bisa duel dengan bot, dengan tingkat beberapa kesulitan</p>
        </div>
    </li>
    <li>
    <li>
    <li>
      <div class="box-1">
        <img src="<?php echo base_url();?>logic/img/hint-bot.png"><br>
        <p class="title-hint">Jadilah yang teratas di papan skor, dan bagikan ke temanmu!</p>
        </div>
    </li>
    <li>
    <li>
      <div class="box-1">
        <img src="<?php echo base_url();?>logic/img/hint-bot.png"><br>
        <p class="title-hint">Jadilah yang terhebat dengan menyelesaikan Misi Harian!</p>
        </div>
    </li>
    <li>
    <li>
      <div class="box-1">
        <img src="<?php echo base_url();?>logic/img/hint-bot.png"><br>
        <p class="title-hint">Raih penghargaan setiap kamu naik level!</p>
        </div>
    </li>
    <li>

  </ul>
</div>
</div>
</div>
     <?php endforeach;?>