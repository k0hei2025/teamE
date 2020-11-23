<h1> <b>What's your feedback regarding our website?</b></h1>

<div class="col-md-9">
                                <!-- Main Content -->
                                <div class="headline">
                                    
                                </div>
                                
                                
                                
                                <form action="" method="post">
                                    <label>Name</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input name = "q1" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <label>Email
                                        <span class="color-red">*</span>
                                    </label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input name ="q2" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <label>Message</label>
                                    <div class="row margin-bottom-20">
                                       <div class="col-md-8 col-md-offset-0">
                                            <textarea name="q3" rows="8" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <p>
                                        <button  type="submit" name="s" class="btn btn-primary">Send Message</button>
                                    </p>
                                </form>

                      <?php
                        $x = $_POST['q1'];
                        $y = $_POST['q2'];
                        $z = $_POST['q3'];


if(isset($_POST['s']))
	{
		$link=mysqli_connect('localhost','root','','vaibhav');
		$qry="insert into feedback values('','$x','$y','$z')";
		mysqli_query($link,$qry);
	}
	?>


                                <!-- End Contact Form -->
                                <!-- End Main Content -->
                            </div>