<html>
    <head>
        <title> USER LOGIN</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
        <link rel="stylesheet" type="text/css" href="style.css">
         <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        
        <!-- jQuery -->
        
    </head>
    <body> 
        <header>
            EVENTS
        </header>
        <div class="container"> 
            <div class="login-box">
            <div class="row">                
               <div class="col-md-4">
                  <h2><span class="glyphicon glyphicon-log-in"></span>  LOGIN HERE </h2>
                   <form action="validate.php" method="POST">
                        <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input name="id" type="text" class="form-control" required  placeholder="Enter Username">
   
  </div>
                        <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="pass" type="password" class="form-control" required  placeholder="Password">
  </div>
                  
  <button type="submit" class="btn btn-danger">LOGIN</button>     
                     
                   </form>                
                   
               </div> 
               
                   <div class="row-md-15">
                Don't Have a Account?<h2><span class="glyphicon glyphicon glyphicon-user"></span>REGISTER HERE </h2>
                <form action="registration.php" method="POST">
                         
                      
   
  <button type="submit" class="btn btn-danger">REGISTER</button>     
                       
                   </form>                
                                 
               </div> 
            </div>
        </div>
        
            </div>       
              
        <footer>
            
            
        </footer>
   
        
    </body>
</html>

