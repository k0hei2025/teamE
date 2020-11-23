<div class="col-md-9">
                                <!-- Main Content -->
                                <div class="headline">
                                    <h2><b>Regarding Any Problem Contact Us!!!</b></h2>
                                </div>
                                <p>If you are having any problem related to our website,please fill the form given below !</p>
                                                                                                                                                                                                               
                                <br>
                                <!-- Contact Form -->
                                <form action="" method="post">
                                    <label>Name</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input name="t1" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <label>Email
                                        <span class="color-red">*</span>
                                    </label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input name="t2" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <label>Message</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-8 col-md-offset-0">
                                            <textarea name="t3" rows="8" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <p>
                                        <button type="submit" name="s" class="btn btn-primary">Send Message</button>
                                    </p>
                                </form>

	<?php
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	
if(isset($_POST['s']))
	{
		$link=mysqli_connect('localhost','root','','vaibhav');
		$qry="insert into contact values('','$a','$b','$c')";
		mysqli_query($link,$qry);
	}
	?>



                                <!-- End Contact Form -->
                                <!-- End Main Content -->
                            </div>