		
<div class = "container">


	<div class="cont">
	<div class="row">


    	<div class="container" id="formContainer">
        <div class = "queueAlert" hidden>
              <?php 
                  if($messageType == '')
                    echo '';
                  elseif ($messageType === 'Error') {
                    echo '<div class="alert-danger alert-dismissable btn btn-default btn-xs"">';
                    echo '<button type="button" class="close " data-dismiss="alert" aria-hidden="true">&times;</button><small>';
                    echo $message;
                    echo '</small></div>';
                  }
                  elseif ($messageType === 'Success') {
                    echo '<div class="alert-success alert-dismissable btn btn-default btn-xs">';
                    echo '<button type="button" class="close text-center" data-dismiss="alert" aria-hidden="true">&times;</button><small>';
                    echo $message.'<br><h3>&nbsp;&nbsp;&nbsp;&nbsp;Priority Number : '.$pnumber.'</h3>';
                    echo '</small></div>';
                  }

              ?>
      </div>

          <form class="form-signin" id="login" role="form"  action=<?php echo site_url() . '/mainframe/encode' ?> method=post>
          	<br />
            <h3 class="form-signin-heading">Fill up form</h3>

            <br />
            <a href="#" id="flipToRecover" class="flipLink">
              <div id="triangle-topright"></div>
            </a>
            <input type="text" class="form-control" name="idNumber" id="loginPass" placeholder="ID Number" required>
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Add to Queue</button>
          </form>
    
          <form class="form-signin" id="recover" role="form" action=<?php echo site_url() . '/mainframe/encode' ?> method=post>
          	<br />
            <h3 class="form-signin-heading">Fill up form</h3>
            <br />
            <a href="#" id="flipToLogin" class="flipLink">
              <div id="triangle-topleft" ></div>
            </a>
            <input type="text" class="form-control" name="idNumber" id="idNumber" placeholder="ID Number" required autofocus>
            <input type="text" class="form-control" name="cellNumber" id="cellNumber" placeholder="Cell Number" required>
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Add to Queue</button>
          </form>

        </div> <!-- /container -->
	</div>
	</div>
</div>