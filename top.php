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



<center>
<div class="container" style="margin-top: 100px;"> 
<h2><span style="color:white">How levels are calculated? See <a href="levels.php">here</a></span></h2>
      <table class="tabelul table table-striped" style="width:100%;">
        <thead>
           <tr>
            <th>#</th>
            <th>PLAYER NAME</th>
            <th>LEVEL</th>
          </tr>
        </thead>              
        <tbody>
  <?php
      $Xp01 = $db->query('SELECT name,xp,id,avatar,level FROM users ORDER BY xp DESC');
      $Xp = $Xp01->fetchAll();

      foreach($Xp as $key => $value)
      {



        echo '<tr><td>'.intval($key+1).'</td>';
        echo '<td><img style="width: 32px; height: 32px;" src="' . $value['avatar'] . '"> '.$value['name'].'</td>';
        echo '<td>'.$value['level'].'</td></tr>';
      }

   ?>
   </tbody>
  </table>
</div>
</center>


<!-- ALLL MODALS -->
<?php include 'Modals.php'; ?>
<!-- ALL MODALS -->
</body>



