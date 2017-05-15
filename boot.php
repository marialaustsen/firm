<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
    <meta name="author" content="BootstrapBay.com">
    <title>Bootstrap Contact Form With PHP Examp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
		
$(document).ready(function () {
    var $targets = $('.target');
    $('.btn').click(function () {
        var $target = $($(this).data('target')).slideToggle();
        $targets.not($target).hide()
    });
});
		
	</script>

</head>

<body>
    <div class="container-fluid">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <button type="button" class="btn btn-primary" data-target=".citizen">Citizen</button>
    <button type="button" class="btn btn-primary" data-target=".organisation">Organisation</button>
    <button type="button" class="btn btn-primary" data-target=".anonymous">Anonymous</button>
	</div><!--COLUMN ENDS-->
	</div><!--ROW ENDS-->
	<div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
       
        <form action="" method="post" id="citizen" class="citizen target" style="display: none;">
           
            <fieldset class="form-group row">
               
                <legend class="col-form-legend col-sm-2">Services</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios1" value="Housing" checked> Housing
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios2" value="Benefits"> Benefits
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios3" value="Council Tax" disabled> Council Tax
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios4" value="fly-tipping"> fly-tipping
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios5" value="Missed Bin"> Missed Bin
                        </label>
                    </div>
                </div>
            </fieldset>
            
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Select title:</label>
                <div class="col-sm-10">
                    <select class="form-control" id="title" name="title[]">
                        <option>Mr.</option>
                        <option>Mrs</option>
                        <option>Ms.</option>
                        <option>Miss</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="firstname" class="col-sm-2 col-form-label">First Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" name="firstname[]" placeholder="First Name">
                </div>
            </div>

            <div class="form-group row">
                <label for="lastname" class="col-sm-2 col-form-label">Last Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastname" name="lastname[]" placeholder="Last Name">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 col-md-2 col-md-offset-2 ">
                    <button type="submit" value="citizen" name="submit[]" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
        <!---------------------------------------------------------ORGANISATION------------------------------------------------------------->
        <form action="" method="post" id="organisation" class="organisation target" style="display: none">
           
            <fieldset class="form-group row">
               
                <legend class="col-form-legend col-sm-2">Services</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios1" value="Housing" checked> Housing
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios2" value="Benefits"> Benefits
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios3" value="Council Tax" disabled> Council Tax
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios4" value="fly-tipping"> fly-tipping
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios5" value="Missed Bin"> Missed Bin
                        </label>
                    </div>
                </div>
            </fieldset>

            <div class="form-group row">
                <label for="firstname" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" name="firstname[]" placeholder="Name">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 col-md-2 col-md-offset-2 ">
                    <button type="submit" value="organisation" name="submit[]" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
         <!---------------------------------------------------------ANONYMOUS------------------------------------------------------------->
         <form action="" method="post" id="anonymous" class="anonymous target" style="display: none">
           
            <fieldset class="form-group row">
               
                <legend class="col-form-legend col-sm-2">Services</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios1" value="Housing" checked> Housing
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios2" value="Benefits"> Benefits
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios3" value="Council Tax" disabled> Council Tax
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios4" value="fly-tipping"> fly-tipping
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios[]" id="gridRadios5" value="Missed Bin"> Missed Bin
                        </label>
                    </div>
                </div>
            </fieldset>

            <div class="form-group row">
                <div class="col-sm-10 col-md-2 col-md-offset-2 ">
                    <button type="submit" value="anonymous" name="submit[]" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
        </div><!--COLUMN ENDS-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<header><p class="lead">Queue</p></header>

        <p>List of the customers being queued:</p>
        
		<ol class="list-group">
		
		<li class="list-group-item"><em>Type:</em> 
		<?php
		if(!empty($_POST['submit'])) {
			
			foreach($_POST['submit'] as $key => $type) {
				
    			print_r($type);
	
			}
		}
		?></li>
		<li class="list-group-item"><em>Name:</em> 
		<?php 
		if (isset($_POST['title'])){
		foreach($_POST['title'] as $key => $title) {
					print_r($title);
			}
		}	
		?>&nbsp;<?php if (isset($_POST['firstname'])){
		foreach($_POST['firstname'] as $key => $firstname) {
					print_r($firstname);
			}
		}?>&nbsp;<?php if (isset($_POST['lastname'])){
		foreach($_POST['lastname'] as $key => $lastname) {
					print_r($lastname);
			}
		}?></li>  

		<li class="list-group-item"><em>Service:</em> <?php if (isset($_POST['gridRadios'])){
		foreach($_POST['gridRadios'] as $key => $gridRadios) {
					print_r($gridRadios);
			}
		}?></li>

		<li class="list-group-item"><em>Queued at:</em> <?php
		print "" . date("h:i a");
		?></li>

		</ol> 
		
		</div><!--COLUMN ENDS-->
        </div><!--ROW ENDS-->
    </div><!--CONTAINER ENDS-->
   
</body>

</html>