<!-- contact.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <!-- <h1>Contact Form</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br>
        <input type="submit" name="submit" value="Submit">
    </form> -->
   



    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card">
                    <h5 class="text-center mb-4">Contact Forms</h5>
                    <form class="form-card" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">
                                    Name<span class="text-danger"> *</span>
                                </label> 
                                <input type="text" id="name" name="name" placeholder="Enter your  name"> 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">
                                    Business email<span class="text-danger"> *</span>
                                </label> 
                                <input type="email" id="email" name="email" placeholder="Enter Your Email"> 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> 
                                <label class="form-control-label px-3">
                                    Massage<span class="text-danger"> *</span>
                                </label>
                                 <textarea type="text" id="message" name="message" placeholder="" onblur="validate(6)"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group col-sm-6">
                                 <button type="submit" name="submit" value="submit" class="btn-block btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                    <?php

                    
    // Include the config.php file
    require_once 'config.php';

    // Handle contact form submission
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Perform a MySQL query to insert the contact details into the database
        $sql = "INSERT INTO contact_details (name, email, messsage) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
            echo "Contact details submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }



 
    // Close the database connection
    $conn->close();
    ?>
            </div>
            
        </div>
        <div class="d-flex justify-content-center pt-5 "> <button><a  button style="color:black;" href="login.html"> <b>Admin Login </b>
</a></button> 
 </div> 
    </div>
 
 
 
</body>

</html>