<!DOCTYPE html>
<html>
<head>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/Sortable/1.4.2/Sortable.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://codepen.io/zavoloklom/pen/Gubja.css">
    <link rel="stylesheet" type="text/css" href="http://codepen.io/zavoloklom/pen/yaozl.css">
    <link rel="icon" type="icon" href="<?php echo base_url();?>logic/img/logo-dutika.png" type="image/png">
    <link rel = "stylesheet" href = "<?php echo base_url();?>logic/styles/style-login.css">
    <style type="text/css">
      html,body{
        overflow: unset;
      }
    </style>
    <title>Dutika</title>
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
            <?php foreach ($foto as $d):?>
            </div>
        </nav>
    <div class="kontener">
      <div class="userfoto">
        <img src="<?php echo base_url();?>images/user/user/<?php echo $d->foto;?>">
          <!-- <div class="tambah-teman">
            <button>ADD FRIEND</button>
          </div> 
          <div class="koleksi-badges-info">
            <a href="#"><button class="active">REQUEST FIGHT</button></a>
          </div>-->
          <div class="tambah-teman">
            <a href="<?= site_url('user/C_profile/ubah/').'/'.$this->session->userdata('username') ?>"><button>UBAH PROFIL</button></a>
          </div>
      </div>
      <div class="nama-user">
        <h1><?php echo $d->username;?></h1>
        <h2>TINGKATAN : <?php echo $d->tingkat;?></h2>
      </div>
      <div class="view-user-status">
        <h3>KOLEKSI LENCANA</h3>
        <img src="<?php echo base_url();?>logic/img/badges/aktif-badges.png" alt="aktif-badges">
        <img src="<?php echo base_url();?>logic/img/badges/capai-smp.png" alt="capai-smp">
        <img src="<?php echo base_url();?>logic/img/badges/capai-smu.png" alt="capai-smu">
        <img src="<?php echo base_url();?>logic/img/badges/invite-friend-badges.png" alt="invite-friend-badges">
        <img src="<?php echo base_url();?>logic/img/badges/rank1-sd.png" alt="rank1-sd">
        <img src="<?php echo base_url();?>logic/img/badges/rank1-smp.png" alt="rank1-smp">
      </div>
    </div>
    <?php  endforeach;?>
</body>
<script>
$(document).ready(function () {
    "use strict";
    var myNav = {
        init: function () {
            this.cacheDOM();
            this.browserWidth();
            this.bindEvents();
        },
        cacheDOM: function () {
            this.navBars = $(".navBars");
            this.xBxHack = $("#xBxHack");
            this.navMenu = $("#menu");
        },
        browserWidth: function () {
            $(window).resize(this.bindEvents.bind(this));
        },
        bindEvents: function () {
            var width = window.innerWidth;

            if (width < 600) {
                this.navBars.click(this.animate.bind(this));
                this.navMenu.hide();
                this.xBxHack[0].checked = false;
            } else {
                this.resetNav();
            }
        },
        animate: function (e) {
            var checkbox = this.xBxHack[0];

            if (!checkbox.checked) {
                this.navMenu.slideDown();
            } else {
                this.navMenu.slideUp();
            }

        },
        resetNav: function () {
            this.navMenu.show();
        }
    };
    myNav.init();
});
</script>
<script>
var contentHidden = true,
    $toggleButton = document.getElementById('toggleButton'),
    $toggledContent = document.getElementById('toggledContent');
    // equivalent jQuery code:
    // $toggleButton = $('#toggleButton');
    // $toggledContent = $('#toggledContent');

// jQuery equivalent: $toggledButton.click()
$toggleButton.onclick = function()
    {
    showHideContent();
    }

function showHideContent()
    {
    if (contentHidden)
        {
        $toggleButton.innerText = 'Close MathFight';
        contentHidden = false;
        $toggledContent.className = "toggledContent";
        // equivalent jQuery code:
        // $toggledContent.removeClass('hide');
        }
    else
        {
        $toggleButton.innerText = 'Play MathFight';
        contentHidden = true;
        $toggledContent.className = "toggledContent hide";
        // equivalent jQuery code:
        // $toggledContent.addClass('hide')
        }
    }
</script>
<script type="text/javascript">
                //this function can remove a array element.
            Array.remove = function(array, from, to) {
                var rest = array.slice((to || from) + 1 || array.length);
                array.length = from < 0 ? array.length + from : from;
                return array.push.apply(array, rest);
            };
        
            //this variable represents the total number of popups can be displayed according to the viewport width
            var total_popups = 0;
            
            //arrays of popups ids
            var popups = [];
        
            //this is used to close a popup
            function close_popup(id)
            {
                for(var iii = 0; iii < popups.length; iii++)
                {
                    if(id == popups[iii])
                    {
                        Array.remove(popups, iii);
                        
                        document.getElementById(id).style.display = "none";
                        
                        calculate_popups();
                        
                        return;
                    }
                }   
            }
        
            //displays the popups. Displays based on the maximum number of popups that can be displayed on the current viewport width
            function display_popups()
            {
                var right = 250;
                
                var iii = 0;
                for(iii; iii < total_popups; iii++)
                {
                    if(popups[iii] != undefined)
                    {
                        var element = document.getElementById(popups[iii]);
                        element.style.right = right + "px";
                        right = right + 320;
                        element.style.display = "block";
                    }
                }
                
                for(var jjj = iii; jjj < popups.length; jjj++)
                {
                    var element = document.getElementById(popups[jjj]);
                    element.style.display = "none";
                }
            }
            
            //creates markup for a new popup. Adds the id to popups array.
            function register_popup(id, name)
            {
                
                for(var iii = 0; iii < popups.length; iii++)
                {   
                    //already registered. Bring it to front.
                    if(id == popups[iii])
                    {
                        Array.remove(popups, iii);
                    
                        popups.unshift(id);
                        
                        calculate_popups();
                        
                        
                        return;
                    }
                }               
                
                var element = '<div class="popup-box chat-popup" id="'+ id +'">';
                element = element + '<div class="popup-head">';
                element = element + '<div class="popup-head-left">'+ name +'</div>';
                element = element + '<div class="popup-head-right"><a href="javascript:close_popup(\''+ id +'\');">&#10005;</a></div>';
                element = element + '<div style="clear: both"></div></div><div class="popup-messages">';
                            element = element + '<div id="messages" class="messages">';
                element = element + '<ul>';
                    element = element + '<li>';
                       element = element + ' <span class="left-chat">Lel</span>';
                        element = element + '<div class="clear"></div>';
                   element = element + ' </li> ';
                   element = element + ' <li>';
                        element = element + '<span class="right-chat">Wut M8</span>';
                       element = element + ' <div class="clear"></div>';
                    element = element + '</li> ';
               element = element + ' </ul>';
              element = element + '  <div class="clear"></div>';
            element = element + '</div>';
            
            element = element + '<div class="input-box">';
                element = element + '<textarea placeholder="Write Your Message"></textarea>';
           element = element + ' </div>';
                element = element + '</div>';
                element = element + '</div>';
                document.getElementsByTagName("body")[0].innerHTML = document.getElementsByTagName("body")[0].innerHTML + element;  
        
                popups.unshift(id);
                        
                calculate_popups();
                
            }
            
            //calculate the total number of popups suitable and then populate the toatal_popups variable.
            function calculate_popups()
            {
                var width = window.innerWidth;
                if(width < 540)
                {
                    total_popups = 0;
                }
                else
                {
                    width = width - 200;
                    //320 is width of a single popup box
                    total_popups = parseInt(width/320);
                }
                
                display_popups();
                
            }
            
            //recalculate when window is loaded and also when window is resized.
            window.addEventListener("resize", calculate_popups);
            window.addEventListener("load", calculate_popups);
</script>
</html>