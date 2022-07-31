<!-- MODALS trade-url -->
<div class="modal fade" id="tradeLink">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title"><?=$user['name']?>'s profile</h4>
         </div>
          <div id="settings-msg" class="modal-title alert text-center alert-success" role="alert">By supplying your steam trade link, you're confirming that you've read and agree to <a href="https://x/how-to-play" style="color:#242424;">CSGOECHO Terms of Service and Privacy Policy</a>.</div> 
        <br>
        <div class="input-group">
                  <span class="input-group-btn">
                    <button class="btn btn-default " type="button" onclick="window.open('http://steamcommunity.com/id/id/tradeoffers/privacy#trade_offer_access_url', '_blank'); return false;"><i style="height: 26px; padding: 5px;" class="fa fa-check "></i></button>
                  </span>
                  <input id="input1" type="text" name="link" id="link" class="form-control" required="" parsley-type="text" value="" size="256" placeholder="Enter a valid Trade URL" data-parsley-id="40">
                </div>
        <p style="color: #ddd;" class="form-description text-right"><a href="http://steamcommunity.com/id/id/tradeoffers/privacy#trade_offer_access_url" target="_blank">Find your Trade URL here</a></p>  
         <div class="modal-footer">
            <div class="form-group">
              <div class="col-sm-12">
                <input id="button1" value="Submit" type="button" class="btn duel-btn-lg">
              </div>
            </div>
        <script>
          $(document).ready(function() {
            $('#input1').val("<?php echo $user['tradelink']; ?>");
          });
        </script>
         </div>
      </div>
   </div>
</div>
<!-- MODALS trade-url -->

<!-- Modal COINFLIP GAME -->
<div class="modal fade" id="coinflip">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Coinflip <span id="coinflip-watch-gameid" class="cfvGameID"></span></h4>
         </div>
      <div class="modal-inner"><div id="cfRoundView" data-gameid="26">
            <div class="row">
              <div class="col-xs-4">
                <div class="col-header col-left"><img id="P1avatar"></img>
                </div>
              </div>
        <div class="col-xs-4 col-timer">
              <div id="coinflip-coin">
                <div class="coinflip-coin coinflip_winner_2" style="margin-top:-5px;margin-left:65px;"> 
                  <div id="coin-flip-cont" style="position:relative;" class="">
        <div id="coin" class="">
        <div class="front"></div>
        <div class="back"></div>
        </div>
        <div class="counter"></div>
      </div>
    </div>
    </div>
    </div>
              <div class="col-xs-4">
                <div class="col-header col-right"><img id="P2avatar"></img>
                </div>
              </div>
            </div>
            <div class="row row-header">
              <div class="col-xs-4 lname text-right"><div id="name-1"><span id="P1name">none</span></div></div>
              <div class="col-xs-4 verify"><span style="font-size: 12px;color: #888;">Hash: </span><span class="gameHashh" style="color: #888;"></span><div class="gameSecrettt" style="color: #888;"></div></div>
              <div class="col-xs-4 rname text-left"><div id="name-2"><span id="P2name">None</span></div></div>
            </div>
            <div class="row">
              <div id="cfRoundCreator" class="col-xs-6">
                <div class="row row-total">
                  <div class="col-xs-4"><i class="fa fa-dollar"></i> <span id="ctp" class="total-amount">0</span></div>
                  <div class="col-xs-4"><span class="P1-tItems"></span> items</div>
                  <div class="col-xs-4"><span class="P1chance"></span></div>
                </div>
                <div id="ItemsP1" class="col-items">
                </div>
              </div>
              <div id="cfRoundOpponent" class="col-xs-6">
                <div class="row row-total">
                  <div class="col-xs-4"><i class="fa fa-dollar"></i> <span id="ptp" class="total-amount">0</span></div>
                  <div class="col-xs-4"><span class="P2-tItems"></span> items</div>
                  <div class="col-xs-4"><span class="P2chance"></span></div>
                </div>
                <div id="ItemsP2" class="col-items"></div>
              </div>
            </div>
    </div></div>
         <div class="modal-footer">
         </div>
      </div>
   </div>
</div>
 <!-- Modal COINFLIP GAME -->





 <!-- Modal cfjoin -->
<div class="modal fade" id="CFjoinGame">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Join a coinflip game</h4>
         </div>
          <div id="invUser">
              <div class="row row-inventory">
                <div class="col-xs-4 col-md-6">
                  <p class="small">
                    min. $<span class="Gap01"></span>, max. $<span class="Gap02"></span>,
                    max. <span id="cfMaxItems">12</span> items.
                    <br>Select from your items, choose team if needs, and then click to Send Trade Request.<br>You will receive an offer contains the selected items which you can confirm.</p>
                </div>
                <div class="col-xs-8 col-md-6">
                  <div id="inventoryMakeOffer">
                    <div class="row">
                <div style="line-height: 1.5;width: 165px;" class="col-sm-4"><div class="inventory-selected">Total: <span class="highlight"><span class="itemsVar">0</span> items</span> valued at $ <span id="totalValue" class="highlight">0.00</span><br>
                <span class="offerValidator">Needs: </span>
                </div></div>
                      <div class="col-sm-4"><div class="inventory-selected"></div></div>
                      <div class="col-sm-4 col-button"><button class="btn duel-btn-lg" id="cfJoin" onclick="cfJoinGame()" value="Deposit" readonly><i class="fa fa-codepen fa-lg"></i> Deposit</button></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-header">
                <button id="invRefresh" class="btn btnref pull-right"><i class="fa fa-refresh"></i> Refresh inventory</button>
              </div>
              <div class="inventory-user"><div class="modal-loading" style="display: none;"><img src="assets/images/loading.gif" alt="Loading" class="icon-loading"></div><div class="row item-holder noselect ps-container" data-ps-id="3d673896-2360-0f6d-b9b6-e99aab918636" style="height: 515px; display: block;">
           <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;">
            <div class="container1" style="overflow:scroll; overflow-x:hidden;">
           </div></div></div></div>
            </div>

                    </div>
         <div class="modal-footer">
         </div>
      </div>
   </div>
</div>
  <!-- Modal cfjoin -->



<!-- Modal create game -->
  <div class="modal fade" id="CFcreate">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Create a coinflip game</h4>
         </div>
      <div id="invUser">
          <div class="row row-inventory">
            <div class="col-xs-8 col-md-6">
              <div id="inventoryMakeOffer">
                <div class="row">
            <div style="line-height: 1.5;width: 165px;" class="col-sm-4"><div class="inventory-selected">Total: <span class="highlight"><span class="itemsVar2">0</span> items</span> valued at $ <span id="totalValue2" class="highlight">0.00</span><br>
            </div></div>
                  <div class="col-sm-4"><div class="inventory-selected"></div></div>
                  <div class="col-sm-4 col-button"><button id="sendItemsCF" class="btn duel-btn-lg" value="Create game" readonly><i class="fa fa-codepen fa-lg"></i> Create game</button></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-header">
            <button id="invRefresh2" class="btn btnref pull-right"><i class="fa fa-refresh"></i> Refresh inventory</button>
          </div>
          <div class="inventory-user"><div class="modal-loading2" style="display: none;"><img src="assets/images/loading.gif" alt="Loading" class="icon-loading"></div><div class="row item-holder noselect ps-container" data-ps-id="3d673896-2360-0f6d-b9b6-e99aab918636" style="height: 400px; display: block;">
       <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;">
        <div class="container2" style="overflow:scroll; overflow-x:hidden;">
       </div></div></div></div>
        </div>

                </div>
         <div class="modal-footer">
         </div>
      </div>
   </div>
</div>

<!-- Modal create game -->



 <!-- Modal settings -->
  <div class="modal fade" id="settingsModal">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title"><?=$user['name']?>'s settings</h4>
         </div>
         <center>
            <div class="input-group">
              <input id="hidetheLink" type="checkbox"> hide link on chat
              <br>
            </div>
          </center>
         <div class="modal-footer">
                    <button id="submitSettings" value="Submit" type="button" class="btn duel-btn-lg">Accept</button>
         </div>
      </div>
   </div>
</div>
  <!-- Modal settings -->


  <!-- Modal rules --> 
  <div class="modal fade" id="chatRules">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="confirmModalLabel">Rules</h4>
         </div>
 <div class="col-md-2 modal-icon" style="margin-top: 35px;">
<i class="fa fa-hand-peace-o"></i>
</div>
<div class="col-md-10 modal-text" style="margin-top: 35px;"><p>Everyone could use our chat platform by following these rules:</p><ul><li>No advertising</li><li>No spamming</li><li>No begging</li><li>Not harassing other people</li><li>No caps</li><li>No trading/selling messages</li></ul><p class="fs11">If you don't follow the rules, you could get a mute between 5 minutes and 30 days. In extreme cases you could get a lifetime chat mute.</p><p class="fs11">If you wanna get helped talk in english please. If you have any problems with trades, open a <a href="#" target="_blank">Support ticket</a>. Mostly we response in 1 day, but occurs when we need more time to fix it.</p></div>

         <div class="modal-footer">
            <button id="rclose" value="Okay" type="submit" class="btn duel-btn-lg">Okay</button>  
         </div>
      </div>
   </div>
</div>

<!-- Modal rules --> 

<!-- Modal trades -->
<div class="modal fade" id="tradeModal">
   <div class="modal-dialog" style="top:40%;">
      <div class="modal-content">
        <!--<p style="font-weight: bold;" id="myModalLabel" class="tradeAlert modal-title alert text-center alert-danger"><i class="fa fa-spinner fa-spin"></i> Processing trade offer...</p>-->
      </div>
   </div>
</div>
<!-- Modal trades -->