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
            $ran_num=rand(0,(count($say)-1));
            $question=$say[$ran_num]->question;
            echo " " . $question;
          ?>
        </center>

        <br>

        <?php echo form_open('home/remember');?>
          <input type="hidden" name="learn_id" value="<?php echo $say[$ran_num]->learn_id?>">
          <div class="row clearfix">
            <div class="col-md-4 column">
              </div>
            <div class="col-md-4 column">
                <div class="form-group">
                  <input type="hidden" name="question" class="form-control" value="<?php echo $question; ?>">
                  <span class="help-block"><font color="red"><?php echo form_error('question');?></font></span>
                  <input type="text" name="answer" class="form-control" size="50" placeholder="">
                  <span class="help-block"><font color="red"><?php echo form_error('answer');?></font></span>
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