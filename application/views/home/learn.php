<!DOCTYPE html>
<html lang="en">
    <head>

      <meta charset="utf-8">
      <title>EON</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="<?php echo base_url();?>css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />

    </head>
    <body>
      
      <div class="container">
        <br><br><br><br><br><br>
        
        <center>
          <?php
              echo " " . $reply[rand(0,(count($reply)-1))]->sorry;
          ?>
        </center>
        
        <br>

        <form action="<?php echo base_url();?>index.php/home" class="navbar-form navbar-center" method="post" role="search">

          <div class="row clearfix">
            <div class="col-md-4 column">
              </div>
            <div class="col-md-4 column">
                <div class="form-group">
                  <input type="text" name="say" class="form-control" size="50" placeholder="What are you Thinking?">
                </div>
            </div>
            <div class="col-md-4 column">
              </div>
          </div>
        </form>

          <br>

        <?php echo form_open('home/remember');?>

          <div class="row clearfix">
            <div class="col-md-4 column">
              </div>
            <div class="col-md-4 column">
              <p>Define: <?php echo $define; ?></p>
                <div class="form-group">
                  <input type="hidden" name="memory" class="form-control" size="50" value="<?php echo $define; ?>">
                  <span class="help-block"><font color="red"><?php echo form_error('memory');?></font></span>
                  <input type="text" name="knowledge" class="form-control" size="50" placeholder="What am i supposed to say to that?">
                  <span class="help-block"><font color="red"><?php echo form_error('knowledge');?></font></span>
                </div>
            </div>
            <div class="col-md-4 column">
              </div>
            </div>
          </form>

        
      
      </div>

      <!-- bootstrap -->
      <script src="<?php echo base_url();?>js/jquery-1.10.2.min.js"></script>
      <script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/bootswatch.js"></script>
      
 </body>
</html>