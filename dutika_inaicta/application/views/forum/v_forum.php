<?php $this->load->view('header');?>
<?php
  date_default_Timezone_set('Asia/Jakarta');
  $date=date("Y/m/d H:i:s");

?>
<div class="column-two">
<div class="left">
<h2> FORUM </h2>
<div class="forum-warp">
<div class="title-forum"><p class="title-title">FORUM</p>
  <div class="new-thread-box-text">
    <select class="form-control" name="id_kategori">
      <?php foreach ($kategori as $q):?>
      <option value="<?php echo $q->id_kategori;?>"><?php echo $q->kategori;?></option>
      <?php endforeach;?>
              
    </select>
  </div>
<a  href="#popup2">
  <div class="new-thread-box">

  </div>
</a>
</div>
<div id="popup2" class="overlay">
  <div class="popup">
    <h2>THREAD BARU</h2><br>

    <a class="close" href="#">&times;</a>
    <?php foreach ($data as $q):?>
    <div class="content">
      <form action="<?php echo base_url();?>forum/C_forum/simpan" method="POST" >
        Kategori :
        <select class="" name="id_kategori">
      <?php foreach ($kategori as $h):?>
      <option value="<?php echo $h->id_kategori;?>"><?php echo $h->kategori;?></option>
      <?php endforeach;?>
              
    </select><br>
		Username
		<input type="hidden" value="<?php echo $q->id_user;?>" name="id_user">
		<input type = "text" class="content-form" style="outline: none;" value="<?php echo $this->session->userdata('username');?>" readonly><br><br>
		Tanggal
		<input type = "text" class="content-form" style="outline: none;" name="tanggal" value="<?php echo $date;?>" readonly><br><br>
    Judul <br>
    <input type = "text" class="content-form" style="outline: none;" name="judul"><br><br>
    Unggah Gambar : <input type = "file" name = "gambar" class=""><br>
    Deskripsi <br>
    <textarea class = "deskripsi" name = "isi" style="max-height:230px;"></textarea><br>
    <input type = "submit" class="create" name="simpan" value="BUAT THREAD BARU">
      </form>
     <?php endforeach;?>
    </div>
  </div>
</div>
<?php foreach ($forum as $f):?>
    <div class="columnsContainer-forum">
        <div class="leftColumn-forum">
        <div class="forum-profile"><img src="<?php echo base_url();?>images/user/user/<?php echo $f->foto;?>" alt=""/>
        </div>
        </div>
      <a href="<?php echo base_url();?>forum/C_forum/lihat/<?php echo $f->id_forum;?>">
       <div class="rightColumn-forum">
        <p class="title-information"><?php echo $f->judul;?></p>
        <p class="right-forum-how"><?php echo $f->isi;?></p>
        <div class="information-forum">
          <i class="fa fa-circle-o" aria-hidden="true" style="color:#00c8f8;"></i>
            <span class="value-forum">by : <?php echo $f->username;?></span>
            <span class="value-forum-separator"></span>
          <i class="fa fa-circle-o" aria-hidden="true" style="color:#00c8f8;margin-left:5px;"></i>
             <span class="value-forum"><?php echo $f->tgll; ?></span>
          <i class="fa fa-circle-o" aria-hidden="true" style="color:#00c8f8;margin-left:5px;"></i>
             <span class="value-forum"><?php echo $f->kategori;?></span>
       </div>
      </div>
                   <hr class="style1-forum">
    </a>
    </div>
<?php endforeach;?>
   
    <ul class="pagination" role="menubar" aria-label="Pagination" style="margin-top:30px;">
    <li class="current"><a href="">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li><a href="#">7</a></li>
    <li><a href="#">8</a></li>
    <li><a href="#">9</a></li>
    <li><a href="#">10</a></li>
  </ul>  
</div>
<h2> MISI HARIAN </h2>
<div class="hint-warp">
    <div class="columnsContainer-daily">
        <div class="leftColumn-daily">
        <img src="<?php echo base_url();?>logic/img/medal.png">
        </div>
       <div class="rightColumn-daily">
        <p>Misi Harian : Kalahkan 69 Pemain</p>
        <p class="right-daily-how">Ayoo Kalahkan 69 pemain dalam duel matematika dengan menjadi yang teratas di papan skor!</p>
        <p class="right-daily-how">Hadiah : </p>
        <img class="img-valign-daily" src="<?php echo base_url();?>logic/img/coin.png" alt="" width="25px" height="25px">
          <span class="value-daily">696</span>
          <span class="value-daily-separator"></span>
        <img class="img-valign-daily" src="<?php echo base_url();?>logic/img/score.png" alt="" width="25px" height="25px">
          <span class="value-daily">696</span>
          <i class="fa fa-check" style="color:#018700;margin-left:20px;"></i>
          <span class="value-daily">Selesai</span>
       </div>
    </div>
</div>
</div>
</div>
<?php $this->load->view('chatting');?>
</body>
<script src="<?php echo base_url();?>logic/js/autosize.js">
<script>
    autosize(document.querySelectorAll('textarea'));
</script>
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




