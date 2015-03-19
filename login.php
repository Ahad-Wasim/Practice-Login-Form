<?php
    session_start();                            //start a session
    
    require('mysql_connect.php');               //connect to our mysql database
        
    


    if(isset($_POST['username']) && isset($_POST['password'])){      //get username and password values from our login form, and put them in easier-to-use variables
        
            $username = $_POST['username'];
            //$username = stripcslashes($username);
            //$username = htmlentities($username);
            //$username = mysql_real_escape_string($username);

            $password = sha1($_POST['password']);        //convert our password into a hashed password, using the function "sha1": $password
    
    } else {
            echo "Please fill in the required fields";
    }

    $query = "SELECT * FROM login_table WHERE username ='$username' AND password = '$password' ";     //construct an SQL statement, $query, that selects the record with both our username and hashed password, $username and $password. The table is "users" 
    

    $result = mysqli_query($CONN, $query);       //execute $query, and receive the results in $results
    
    
    if(mysqli_num_rows($result) > 0 ){                   //if a row was returned, the user is validated.  
   
        $user_info = mysqli_fetch_assoc($result);            //if the user was validated, fetch the user's data into $user_info variable 
        
        $_SESSION['user_information'] = $user_info;         //put the user's data into a key/value pair in the session superglobal.  Use key 'userinfo' in the session superglobal
        
        header("location: welcome.php");                      // takes you into a another page if login is a success.
    
    } else {
   
        echo  'Sorry couldn\'t locate :' . $username . ' and ' . $password  . ' from our database.';   //else the user wasn't validated
   
    }                                              
    





    
    
                                            
?>