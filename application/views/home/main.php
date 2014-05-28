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
        <center>
          <?php
            for ($i=0;$i<count($reply);$i++) { 
              echo $reply[$i]->knowledge;
            }
          ?>
        </center>
      
      </div>

      <!-- bootstrap -->
      <script src="<?php echo base_url();?>js/jquery-1.10.2.min.js"></script>
      <script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/bootswatch.js"></script>
      
 </body>
</html>