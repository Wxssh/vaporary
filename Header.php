  <script src="assets/js/bootstrap.min.js?v<?=time()?>"></script>

  		  <li class="active-menu"><a href="index.php"><i class="fa fa-user-circle" style="color:#1a8a49;"></i> COINFLIP</a></li>
          <li><a href="faq.php"><i class="fa fa-info-circle" aria-hidden="true"></i> FAQ</a></li>
          <li><a href="giveaways.php"><i class="fa fa-ticket" aria-hidden="true"></i> GIVEAWAYS</a></li>
          <li><a href="history.php"><i class="fa fa-list" aria-hidden="true"></i> HISTORY</a></li>
          <li><a href="top.php"><i class="fa fa-user" aria-hidden="true"></i> TOP PLAYERS</a></li>
          <?php
          	if($user['rank'] == 69)
          	{
          ?>
          	<li><a href="adminpanel.php"><i class="fa fa-lock" aria-hidden="true"></i> ADMIN PANEL</a></li>
          <?php
          	}
          ?>