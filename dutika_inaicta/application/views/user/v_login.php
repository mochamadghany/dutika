<!DOCTYPE html>
<html>
<head>
	<title>Dutika</title>
  <link rel="icon" type="icon" href="img/logo-dutika.png" type="image/png">
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel = "stylesheet" href = "<?php echo base_url();?>logic/styles/style.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://codepen.io/zavoloklom/pen/Gubja"></script>
	<script src="http://codepen.io/zavoloklom/pen/yaozl"></script>
	<link rel="stylesheet" type="text/css" href="http://codepen.io/zavoloklom/pen/Gubja.css">
	<link rel="stylesheet" type="text/css" href="http://codepen.io/zavoloklom/pen/yaozl.css">
</head>

<body>
<div class="hold">
  <div class="header">
    <div class="container">
      <div id="logo">
      <img src="<?php echo base_url();?>logic/img/logo.png">
      </div>
      <ul class="nav-index">
        <li><a href="<?php echo base_url();?>forum/C_forum">FORUM</a></li>
        <li><a href="#">BOT</a></li>
        <li><a href="<?php echo base_url();?>rank/C_rank">RANK</a></li>
        <li><a href="#popup1">LOG IN</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="section">
  <div class="slider">
    <div class="container slidercontent">
      <h1 class="hero">DUTIKA</h1>
      <h2 class="hero">Duel Mathematics</h2>
      <a href="#popup22"><div class="call"><span>Sign Up Now !</span></div></a>
    </div>
  </div>
</div>
<div class="section" >
  <div class="container" >
    <h1 class="reset" style="text-align:center!important;margin-bottom:0;margin-top:100px;">FIGHT MATH</h1>
  </div>
</div>
<div class="section">
  <div class="container">
    <div class="col two">
      <h1 class="icon"><img src="<?php echo base_url();?>logic/img/practice-index.png"></h1>
      <h1 class="service">Practice</h1>
      <p>Test Your Math Skill Before Fight With Opponent Answer As Fast As You Can</p>
    </div>
    <div class="col two">
      <h1 class="icon"><img src="<?php echo base_url();?>logic/img/medal-index.png"></h1>
      <h1 class="service">Fight with Opponent</h1>
      <p>Fight With Opponent By Answer 5 Correct Question See who Have More Skill You or Opponent</p>
    </div>
    <div class="group"></div>
  </div>
</div>

<div class="section bg">
  <div class="container">
    <h1>Gallery</h1>
    <h2>Wow wow wow!</h2>
    <div class="col three bg nopad pointer">
      <div class="imgholder"><img src="<?php echo base_url();?>logic/img/forum.jpg"></div>
      <h1 class="feature">Forum</h1>
      <p>You Can Make A Question or Something important like Bug Or Something Here</p>
    </div>
    <div class="col three bg nopad pointer">
      <div class="imgholder"><img src="<?php echo base_url();?>logic/img/badges-all.jpg"><</div>
      <h1 class="feature">Badges</h1>
      <p>If you True Math Fighter You Will Collect All Badges</p>
    </div>
    <div class="col three bg nopad pointer">
      <div class="imgholder"><img src="<?php echo base_url();?>logic/img/fight-versus.jpg"><</div>
      <h1 class="feature">Fight With Opponent</h1>
      <p>Find Match and Fight Your Opponent Make Sure Your Answer Correctly</p>
    </div>
    <div class="group margin"></div>
    <div class="group"></div>
  </div>
</div>
<div class="section bg">
  <div class="container">
    <h1>Compete Right Now !</h1>
    <h2>Learn</h2>
    <div class="col two bg margin extrapad">
      <h1 class="icon side"><img src="<?php echo base_url();?>logic/img/books.png"></h1>
      <span class="feature side">Wow</span><span class="side"></span>
      <p class="side">Make Sure You Learn Here Too</p>
    </div>
    <div class="col two bg margin extrapad">
      <h1 class="icon side"><img src="<?php echo base_url();?>logic/img/pro-graduation.png"></h1>
      <span class="feature side">Challange The World</span><span class="side"></span>
      <p class="side">Fight Opponent In Around The World</p>
    </div>
    <div class="group margin"></div>
    <div class="col two bg margin extrapad">
      <h1 class="icon side"><img src="<?php echo base_url();?>logic/img/world.png"></h1>
      <span class="feature side">Be The Best</span><span class="side"></span>
      <p class="side">Be The Best of The Best Show Your All Skill</p>
    </div>
    <div class="col two bg margin extrapad">
      <h1 class="icon side"><img src="<?php echo base_url();?>logic/img/student.png"></h1>
      <span class="feature side">Make Your Smart</span><span class="side"></span>
      <p class="side">Not Just a Game This All Question that Your Answer Will Still Remind on Your Mind in Anywhere</p>
    </div>
    <div class="group"></div>
  </div>
</div>
    
<div class="section" style="margin-bottom:-60px;">
  <div class="footer">
  <div class="container slidercontent">
      <h2 class="hero">What are You Waiting For?</h2>
      <img src="<?php echo base_url();?>logic/img/arrow-collapse.png" style="margin-bottom:50px;">
      <a href="#popup22"><div class="call"><span>Sign Up Now !</span></div></a>
    </div>
    <div class="container white">
      <div class="col four left" style="float:right">
        <h1>Creator</h1>
        <p>@Logic.or.id</p>
        <a href="<?php echo base_url();?>C_team">@About US</a>
      </div>
      <div class="group"></div>
    </div>
  </div>
</div>
<div style="clear: both;visible:hidden;"></div>​
<div id="popup1" class="overlay">
			<div id="login" class="signin-card" style="max-height: calc(100vh - 200px);">
				<a class="close" href="#">&times;</a>
  <h1 class="display1">LOGIN</h1>
  <p class="subhead">Duel Mathematics</p>
  <form action="<?php echo base_url();?>user/C_login/login" method="POST" class="" role="form">
    <div id="form-login-username" class="form-group">
      <input id="username" class="form-control" name="username" type="text" size="18" alt="login" required />
      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="username" class="float-label">Username</label>
    </div>
    <div id="form-login-password" class="form-group">
      <input id="passwd" class="form-control" name="password" type="password" size="18" alt="password" required>
      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="password" class="float-label">Password</label>
    </div>
    <br>
    <div>
      <button class="btn btn-block btn-info ripple-effect" type="submit" name="Submit" alt="sign in" >Log in</button>  
	</div>
	<br>
	<div>
      <a href="#popup22">No Account? Sign Up Here !</a><br> 
      <a href="#popup21">Forget Password ?</a>
	</div>

    </div>
  </form>
</div>
		</div>
		<div class="container">
	</div>
</div>
</div>

<div style="clear: both;"></div>​
	<div id="popup22" class="overlay" style="display:block;">
			<div id="login" class="signin-card" style="margin-top:10px;max-height: calc(100vh - 50px);">
				<a class="close" href="#">&times;</a>
  <h1 class="display1">Sign Up</h1>
  <p class="subhead">Duel Mathematics</p>
  <form action="<?= site_url('user/C_daftar/proses_daftar') ?>" method="POST" class="" role="form">
    <div id="form-login-username" class="form-group">
      <!-- Input Username -->
      <input id="username" class="form-control" name="nama" type="text" size="18" alt="login" required maxlength="16" />

      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="username" class="float-label">Full Name</label>
    </div>
    <div id="form-login-username" class="form-group">
      <!-- Input Username -->
      <input id="username" class="form-control" name="username" type="text" size="18" alt="login" required />

      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="username" class="float-label">Username</label>
    </div>
    <div id="form-login-username" class="form-group">
      <!-- Input Username -->
      <input id="username" class="form-control" name="email" type="email" size="18" alt="login" required />

      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="username" class="float-label">E-mail</label>
    </div>
    <div id="form-login-password" class="form-group">
      <!-- Input Password -->
      <input id="passwd" class="form-control" name="password" type="password" size="18" alt="password" required>

      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="password" class="float-label">Password</label>
    </div>

    <select class="form-control" style="opacity: 0.9;" name="id_hint">
      <?php foreach ($hint as $q):?>
      <option value="<?php echo $q->id_hint;?>"><?php echo $q->pertanyaan;?></option>
    <?php endforeach;?>
    </select>
    <div id="form-login-answer" class="form-group">
      <!-- Input Jawaban -->
      <input id="username" class="form-control" name="jawaban" type="text" size="18" alt="answer" required />

      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="answer" class="float-label">Your Answer</label>
    </div>
    <br>
    <div>
      <button class="btn btn-block btn-info ripple-effect" type="submit" name="Submit" alt="sign in" >Sign Up</button>  
	</div>
	<br>
	<div>
      <a href="#popup1">Log In</a>
      <a href="#popup21" style="float:right;">Forget Password ?</a>
	</div>

    </div>
  </form>
</div>
		</div>
		<div class="container">
	</div>
	</div>
	</div>
  <div style="clear: both;"></div>​
  <div id="popup21" class="overlay" style="display:block;">
      <div id="login" class="signin-card" style="margin-top:100px;max-height: calc(100vh - 50px);">
        <a class="close" href="#">&times;</a>
  <h1 class="display1">Forget Password</h1>
  <p class="subhead">Duel Mathematics</p>
  <form action="<?php echo base_url(); ?>user/C_lupa_password/submit" method="POST" class="" role="form">
        <div id="form-login-username" class="form-group">
      <!-- Input Username -->
      <input id="username" class="form-control" name="id_user" type="hidden" size="18" alt="login"/>
      <input id="username" class="form-control" name="email" type="e-mail" size="18" alt="login" required />

      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="username" class="float-label">E-Mail</label>
    </div>
    <select class="form-control" style="opacity: 0.9;" name="hint">
      <?php foreach ($hint as $q):?>
      <option value="<?php echo $q->id_hint;?>"><?php echo $q->pertanyaan;?></option>
    <?php endforeach;?>
    </select>
    <div id="form-login-answer" class="form-group">
      <!-- Input Jawaban -->
      <input id="username" class="form-control" name="jawaban" type="text" size="18" alt="answer" required />

      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="answer" class="float-label">Your Answer</label>
    </div>
    <br>
    <div>
      <button class="btn btn-block btn-info ripple-effect" type="submit" name="submit" alt="sign in" >Find Account</button>  
  </div>
  <br>
  <div>
      <a href="#popup1">Log In</a>
      <a href="#popup22" style="float:right;">Register</a><br>
  </div>

    </div>
  </form>
</div>
    </div>
    <div class="container">
  </div>
  </div>
  </div>
<script>
window.onscroll = function() {
  var el = document.getElementsByClassName('header')[0];
  var className = 'small';
  if (el.classList) {
    if (window.scrollY > 10)
      el.classList.add(className);
    else
      el.classList.remove(className);
  }
};
</script>
</body>
</html>