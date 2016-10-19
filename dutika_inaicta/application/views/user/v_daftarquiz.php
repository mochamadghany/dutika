<?php $this->load->view('header');?>
<div class="column-two">
<div class="left">
<h2> Practice </h2>
<div class="container-leaderboard">
  
  <div class="wrapper-leaderboard">
    <table class="leaderboard-table">
      <thead class="leaderboard-thead">
        <tr class="leaderboard-tr">
          <th class="leaderboard">No</th>

          <th class="leaderboard-th" style="width:20%;">Title</th>
          <th class="leaderboard-th">Decription</th>
          <th class="leaderboard-th">Level</th>
          <th class="leaderboard-th"></th>
        </tr>
      </thead>
      <?php $a = 1;?>

 <?php foreach ($kategori as $data) { ?>
      <tbody class="leaderboard-tbody">
        <tr class="leaderboard-tr">
<td class="urutan leaderboard-td"><?php echo $a;?></td>          
<td class="urutan leaderboard-td"><?php echo $data->judul_quiz;?></td>
          <td class="nama leaderboard-td"><?php echo $data->keterangan;?></td>
          <td class="daerah leaderboard-td"><?php echo $data->tingkat;?> <?php echo $data->kelas;?></td>
          <td class="skor leaderboard-td"><a href="<?php echo base_url();?>user/bots/c_bots/jawab/<?php echo $data->id_quiz?>"><div class="btn btn-block btn-info ripple-effect" style="width:20%;" value="Answer">Answer</div></a></td>
        </tr>
            <?php $a++;?>
      <?php } ?>
     
      </tbody>
    </table>
  </div>
</div>
<h2> DAILY CHALLANGE </h2>
<div class="hint-warp">
    <div class="columnsContainer-daily">
        <div class="leftColumn-daily">
        <img src="img/medal.png">
        </div>
       <div class="rightColumn-daily">
        <p>Daily Challange : Defeat 69 Player</p>
        <p class="right-daily-how">Defeat 69 Player by Click Play Math Fight in Bottom left or Above then Defeat your opponent.Defeat 69 Player by Click Play Math Fight in Bottom left or Above then Defeat your opponent</p>
        <p class="right-daily-how">Reward : </p>
        <img class="img-valign-daily" src="img/coin.png" alt="" width="25px" height="25px">
          <span class="value-daily">696</span>
          <span class="value-daily-separator"></span>
        <img class="img-valign-daily" src="img/score.png" alt="" width="25px" height="25px">
          <span class="value-daily">696</span>
          <i class="fa fa-check" style="color:#018700;margin-left:20px;"></i>
          <span class="value-daily">Complete</span>
       </div>
    </div>
</div>
</div>
</div>

<?php $this->load->view('chatting');?>