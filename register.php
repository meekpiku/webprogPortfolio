<!DOCTYPE html>
<?php
require_once('config.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="register.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="login-container">
            <div class="title-container">
                <i class="fa-solid fa-star"></i>
                        <h1>Sign-up</h1>
            </div>
            <div class="login-body-container">
            <?php
        if(isset($_POST['submit'])){
          $email = $_POST["email"];
          $password = $_POST['password'];
          $repeatPassword = $_POST['repeat-password'];
          // $address = $_POST['address'];
          $gender = $_POST['gender'];
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          
          $errors=array();

          if(empty($lname) OR empty($fname) OR empty($email) OR empty($password) OR empty($repeatPassword)){
            array_push($errors,"All fields are required");
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            array_push($errors,"Email is not valid");
    }
    if(strlen($password)<8){
            array_push($errors, "Password must at least be 8 characters");
    }
    if($password!=$repeatPassword){
            array_push($errors, "Password does not match");
    }
    if(count($errors)>0){
            foreach($errors as $error){
                    echo"<div class='alert alert-danger'>$error</div>";
            }
   
    } else{
          $passwordHash= password_hash($password, PASSWORD_DEFAULT);
          $query = "INSERT INTO registration_tbl (user_email, user_password, user_fname, user_lname) VALUES(?,?,?,?)";
          $stmtinsert = $conn->prepare($query);
          $result = $stmtinsert->execute([$email, $passwordHash, $fname,  $lname]);
          if($result){
            echo 'Successfully registered.';
            header('Location: '.'index.php');
          }else{
            die("Something went wrong");
          }
        }}
    
        ?>
                <form action="register.php" method="post">
                            <div class="form-row ">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Contact no.</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Contact no.">
                              </div>
                            </div>
                        <div class="form-row">
                            
                            
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword2">Repeat-Password</label>
                                <input type="password" class="form-control" id="inputPassword2" name="repeat-password" placeholder="Repeat-Password" required>
                              </div>
                          </div>
                          
                          <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationDefault01">Lot / Blk</label>
                            <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="Lot / Blk"  required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault01">Street</label>
                            <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="Street" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault01">Phase / Subdivision</label>
                            <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="Phase" required>
                        </div>
                          </div>

                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationDefault01">First name</label>
                            <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="First name" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationDefault02">Last name</label>
                            <input type="text" name="lname" class="form-control" id="validationDefault02" placeholder="Last name"  required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="exampleFormControlSelect1">Birth date</label>
                           <input type="date" id="validationDefault02" class="form-control">
                          </div>
                         
                        </div>
                        
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Province</label>
                            <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="Province" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                            <label for="exampleFormControlSelect1">City</label>
                            <select class="form-control" name="gender" id="exampleFormControlSelect1" placeholder="City">
                            <option value="Manila">Manila</option>
                            <option value="Quezon City">Quezon City</option>
                            <option value="Caloocan">Caloocan</option>
                            <option value="Taguig">Taguig</option>
                            <option value="Pasig">Pasig</option>
                            </select>
                          </div>
                          
                            
                        </div>

                        <div class="form-row">
                        <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Country</label>
                            <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="Country" required>
                            </div>

                            <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Barangay</label>
                            <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="Barangay" required>
                            </div>
                            </div>
                        
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                              Agree to terms and conditions
                            </label>
                          </div>
                        </div>
                        <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                      </form>      
            </div>
            
        </div>
        <a href="index.php">Already have an account? Sign in here</a>
        <!-- <script src="" async defer></script> -->
    </body>
    
</html>