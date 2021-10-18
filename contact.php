<?php
   $con = mysqli_connect("localhost", "root", "", "portfolio");
    $error = "";
    $color = "red";
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $phone = mysqli_real_escape_string($con,$_POST['phone']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $subject = mysqli_real_escape_string($con,$_POST['subject']);
        $message = mysqli_real_escape_string($con,$_POST['message']);

        $q = "SELECT * FROM contact ORDER BY contact.id DESC LIMIT 1";
        $r = mysqli_query($con, $q);
        if(mysqli_num_rows($r) > 0){
            $row = mysqli_fetch_array($r);
            $id = $row['id'];
            $id = $id + 1;
        }
        else{
            $id = 1;
        }


        if(empty($name) or empty($email) or empty($phone) or empty($subject) or empty($message)){
            $error = "All Feilds Required, Try Again";

        }
        else{
            $insert_query = "INSERT INTO `contact`(`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES ('$id','$name','$email','$phone', '$subject' ,'$message')";
            if(mysqli_query($con, $insert_query)){
                $error = "Awesome! I'll inbox you further conversations";
                $color = "green";
            }
            else{
                $error = "Error occured";
            }
        }
    }

?>
<!-- ========================
      contact-section Start
======================== -->







<section class="contact-section" id="contact">
  <div class="container">
    <div class="title wow fadeInUp">
      <h2>
        Contact me
        <span>SEND ME A MESSAGE</span>
      </h2>
    </div>


<div class="contact" style="margin-top: -50px;">
       <div class="row">
        <div class="col-sm-12">
    <div class="col-sm-6 col-sm-offset-3">
      <div class="spacer">      
          <h4>Write to us</h4>
          <label style="color: <?php echo $color; ?>">
                <?php
                    echo $error;
                ?>
            </label>
      <form role="form" method="post">
                <div class="form-group">  
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone">
                </div>
                <div class="form-group">
               <input type="text" class="form-control" name="subject" id="subject" placeholder="subject">
                </div>
                <div class="form-group">
                <textarea type="email" class="form-control" name="message" placeholder="Message" rows="4"></textarea>
                </div>  

                <input type="submit" class="btn btn-primary" value="Send" name="submit">
      </form>
      </div>
        </div>
       </div>
</div>
</div>


  </div>
</section>
<!-- End Contact section -->
