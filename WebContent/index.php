<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nutmeg</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/nutmeg.css">

</head>
<body>

<div class="container-fluid">
  
  <!-- SPLASHSCREEN -->
  <div id="top" class="row"></div>
  <div id="bottom" class="row"></div>

<!-- LOGIN SCREEN -->
    <form>
    <div class="text-center">
    	<img src="src/nutmeg_logo.png"/>
        <div class="btn-group-vertical" id="menuBtns">
            <!-- Trigger for LOGIN MODALS -->
           <a href="#" class="btn btn-success" data-toggle="modal" data-target="#studentModal" id="student">Student</a>
           <a href="#" class="btn btn-success" data-toggle="modal" data-target="#teacherModal" id="teacher">Teacher</a>
           <a href="#" class="btn btn-success" data-toggle="modal" data-target="#adminModal" id="admin">Administrator</a>
           <a href="#" id="guest" class="btn btn-success">Guest</a>
     
        </div>
    </div>
   </form>
   
   <!-- STUDENT LOGIN MODAL-->
   <div id="studentModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
   
   <!-- STUDENT MODAL CONTENT -->
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal=-title"><span class="glyphicon glyphicon-lock"></span>Student login</h4>
           <div class="imgcontainer">
           <img src="src/users/student_girl_1.PNG" alt="Avatar" class="avatar">
           </div>
           </div>
           
           <div class="modal-body">
               <div class="container">
               <form id='login' action='login.php' method='POST' accept-charset='UTF-8'>
              <label><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="user" required>
        		<br>
              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pswd" required>
                <br>
              <button id="enter" type="submit" name="Submit">Login</button>
              <br>
              <input type="checkbox" checked="checked"> Remember me
              </form>
            </div>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal" id="close">close</button>
           </div>
       </div>
    </div>
 </div>
   <!-- TEACHER LOGIN MODAL-->
   <div id="teacherModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
   
   <!-- TEACHER MODAL CONTENT -->
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal=-title">Teacher login</h4>
           </div>
           <div class="modal-body">
               <div class="container">
              <label><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
        
              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
                
              <button type="submit">Login</button>
              <input type="checkbox" checked="checked"> Remember me
            </div>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal" id="close">close</button>
           </div>
       </div>
   </div>
</div>

<!-- ADMINISTRATOR LOGIN MODAL-->
   <div id="adminModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
   
   <!-- ADMINISTRATOR MODAL CONTENT -->
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal=-title">Administrative login</h4>
           </div>
           <div class="modal-body">
               <div class="container">
              <label><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
        
              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
                
              <button type="submit">Login</button>
              <input type="checkbox" checked="checked"> Remember me
            </div>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal" id="close">close</button>
           </div>
       </div>
   </div>
</div>
</div>


</body>
</html>

