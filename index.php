<title>Coinflip - by Echo</title>
<?php
 include 'settings.php';
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <script>
    var STEAMID = '<?php echo $user['steamid']; ?>';
    var TRADELINK = '<?php echo $user['tradelink']; ?>';
  </script>

	<script src="assets/js/jquery-3.2.1.js"></script>
	<script src="assets/js/jquery.cookie.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/socket.io-1.4.5.js"></script>
  <script src="assets/js/cryptojs.js"></script>
  <script src="assets/js/notify.js"></script>
  <script src="assets/js/tinysort.js"></script>
	<script src="assets/js/app.js?v<?=time()?>"></script>
  <script src="assets/js/offers.js?v<?=time()?>"></script>
  <script src="assets/js/countdownHackerTimer.js"></script>
  <script src="assets/js/countTo.js"></script>

	<script>
		$.notify.defaults({
		  clickToHide: true,
		  autoHide: true,
		  autoHideDelay: 2000,
		  arrowShow: true,
		  arrowSize: 177,
		  position: 'top center',
		  elementPosition: 'top center',
		  globalPosition: 'top center',
		  style: 'bootstrap',
		  className: 'error',
		  showAnimation: 'slideToggle',
		  showDuration: 600,
		  hideAnimation: 'slideToggle',
		  hideDuration: 600,
		  gap: 2
		});
	</script>
	<link rel="stylesheet" type="text/css" href="assets/css/app.css?v=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css?v=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css?v=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css?v=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="assets/css/w3.css?v=<?=time()?>">
</head>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/coinflip"><img src="assets/images/logonew.png" class="header-logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

        <ul class="nav navbar-nav menu header-menu">
          <?php include 'Header.php'; ?>
        </ul> 

      <ul class="nav navbar-nav navbar-right header-menu">	
		<li style="
    margin-top: 10px;
    padding: 5px;
    margin-top: 5px;
"> 
	<?php
	if($user)
	{ ?>

<div class="dropdown">
		<button class="dropbtn"><img width="32px" height="32px" style="width: 60px; height: 60px; border: 2px solid #5d4841; margin-right: 10px; border-radius: 100%; overflow: hidden; flex-shrink: 0;" src="<?=$user['avatar']?>"> <span class="profile-name"><?=$user['name']?> <span class="caret"></span></button>
  <div class="dropdown-content">
  <ul style="list-style: none;display: inline;">
    <?php include 'ProfileSettings.php'; ?>
    </ul>

	  </div>
	  </div>	
	<?php }else{ ?>
		<a href="login.php" style="padding: 2px 5px 0 5px; "><img src="https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_01.png"></a>
	<?php } ?>
		</li>
		
      </ul>
    </div>
  </div>
</nav>

<body class="hellos">



<div id="right-panel" class="panel-open">
<div id="chatWindow" style="height: calc(90% - 75px);">
<div id="chatStatus" class="online">
<span style=" color: #e94b24; font-size: 16px; ">Online:</span><span class="users-online-value" style="color: #e94b24; font-size: 16px; margin-left: -50px;">0</span>
<button id="mChatRules" class="btn duel-btn-lg" style="cursor: pointer; padding: 2px 4px; font-size: 11px; margin: 0; position: relative; top: -1px; padding: 4px 10px; background-color: #3b3132; color: #7d7273; background-repeat: no-repeat; background-position: 5px center; font-size: 12px; text-transform: uppercase; cursor: pointer;">chat rules</button>
</div>
<form id="Message">
<div id="chat-ctn">
<div style="margin-bottom: 25px; font-size: 9px;overflow-wrap: break-word;" id="chatMessages">
</div>
<div id="chatActions" style="background-color: #0e0a0b; padding: 13px; margin: 5px 0; box-shadow: inset 5px 5px 5px 0 rgba(0, 0, 0, 0.2), inset -1px -1px 1px 0 rgba(43, 31, 33, 0.84); display: flex; display: -webkit-flex; justify-content: center; align-items: center;"><input id="theMessage" type="text" placeholder="Write a message here..." class="form-control"><button id="sendMsg" type="submit" value="Send" class="btn duel-btn-lg" style="border-radius: 100%; background-image: url(https://csgonecro.com/assets/www/img/btn-send.png); background-repeat: no-repeat; background-position: center; width: 38px; height: 38px; margin-left: 10px; background-color: #e94b24; flex-shrink: 0;"></button></div>
</div>
</form>
</div>
</div>





	<div id="coinflip-wrapper" class="row">	
		<div id="topHH" style="margin-left: -15px;">
    <div class="row no-gutters" style="text-align: left; max-width: 80%;">
              <div class="col-12 col-sm-6 col-md-8">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="row" style="text-align: center;">
                      <div class="col-sm-4">
                       <span style="font-family: 'Lato',sans-serif; font-size: 28px; color: #e94b24;" class="stats-up">$ <span id="cfTotalAmount" data-decimals="2">0.00</span></span>
                        <br>
                        <span class="stats-down">TOTAL AMOUNT</span>
                      </div>
                      <div class="col-sm-4">
                        <span style="font-family: 'Lato',sans-serif; font-size: 28px; color: #e94b24;" class="stats-up cfTotalItems">0</span>
                        <br>
                        <span class="stats-down">TOTAL ITEMS</span>
                      </div>
                      <div class="col-sm-4">
                        <span style="font-family: 'Lato',sans-serif; font-size: 28px; color: #e94b24;" class="stats-up cfActiveGames">0</span>
                        <br>
                        <span class="stats-down">ACTIVE GAMES</span>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
            <div class="col-6 col-md-4">
              <button id="createCF" class="btn duel-btn-lg btn-create btn-lg btn-block" style="
                height: 8%;
            "><i class="fa fa-plus-square"></i> Create new</button>
            </div>
        </div>
    </div>
			<table class="tabelul table table-striped" style="width:100%;">
				<thead style="margin-bottom: 20px; border: 1px solid #453135; -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05); box-shadow: 0 1px 1px rgba(0, 0, 0, .05); border-bottom: 2px solid #e94b24">
					 <tr>
					 	<th>PLAYER</th>
					 	<th>SKINS</th>
					 	<th>TOTAL</th>
            <th></th>
					 	<th></th>
					</tr>
				</thead>              
				<tbody id="games"></tbody>
			</table>

	</div>

<!-- ALLL MODALS -->
<?php include 'Modals.php'; ?>
<!-- ALL MODALS -->




<div class="modal fade" id="depositModal">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <p id="myModalLabel" class="depositAlert modal-title alert text-center alert-success">Loaded ~ items (<i class="fa fa-gg-circle"></i> 0) from cache.</p>
         </div>
         <div class="modal-body deposit-items text-center" id="deposit-items" style="text-align:center;height:500px;overflow-x:hidden;">
                   </div>
         <div class="modal-footer">
            <div class="btn-group dropup pull-left" style="margin-bottom:0;">
              <button type="button" class="btn btn-primary refreshInv"><i class="fa fa-refresh"></i></button>
            </div>
            <b><span style="color: orange">Items selected: <span class="itemsSelected">0</span>/20</span></b>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn cfDep depositNow btn-primary">Deposit</button>
         </div>
      </div>
   </div>
</div>
</body>