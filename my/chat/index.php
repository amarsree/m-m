        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
            <?php 
                if(isset($_SESSION['fname'])){
                ?>
                <div class="text-center">
               <div class="open-btn" id="addClass"><i  aria-hidden="true"></i> Chat hear</div>
                </div>

            <?php
                }else{
                    ?>
            <div class="text-center">
               <div class="open-btn" id="addClass1"><i aria-hidden="true"></i> Chat hear</div>
                </div>
                <?php
                }
                
                ?> 
          <aside id="sidebar_secondary" class="tabbed_sidebar ng-scope chat_sidebar">

        <div class="popup-head chat_popup">
                  <div class="popup-head-left pull-left"><a Design and Developmenta title="Gurdeep Osahan (Web Designer)" target="_blank" href="https://web.facebook.com/iamgurdeeposahan">
        <img class="md-user-image" alt="Gurdeep Osahan (Web Designer)" title="Gurdeep Osahan (Web Designer)" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" title="Gurdeep Osahan (Web Designer)" alt="Gurdeep Osahan (Web Designer)">
        <h1>Name</h1><small><br> <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>Admin</small></a></div>
                    <div class="popup-head-right pull-right">
                             
                                <div class="btn-group gurdeepoushan">
                          
                    </div>
                    
                    <button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                              </div>
                </div>

        <div id="chat" class="chat_box_wrapper chat_box_small chat_box_active" style="opacity: 1; display: block; transform: translateX(0px);">
            <div class="chat_box touchscroll chat_box_colors_a" id="scroll">

               <div class="chat">
                  


                  </div>
            </div>
        </div>
        <div class="chat_submit_box">
            <div class="uk-input-group">
                <div class="gurdeep-chat-box">
                <!-- <span style="vertical-align: sub;" class="uk-input-group-addon">
                <a href="#"><i class="fa fa-smile-o"></i></a>
                </span> -->
                <input type="text" placeholder="Type a message" id="submit_message" name="submit_message" class="md-input">
                <span style="vertical-align: sub;" class="uk-input-group-addon">
                <a href="#"><!-- <i class="fa fa-camera"></i> --></a>
                </span>
                </div>
            
            <span class="uk-input-group-addon" >

            <a href="#" ><i class="glyphicon glyphicon-send" id="send" style="left: 70px;"></i></a></div>
            </span>
            
        </div>
                
         </aside>   
               
                <script type="text/javascript" src="script.js"></script>
                <script type="text/javascript" src="chat/javascript.js"></script>