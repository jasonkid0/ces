<?php



$db = mysqli_connect('localhost','u733437513_03132804Jaypog','C5;ev2HZ[8v','u733437513_enrollment') or die(mysqli_error());

function check_message(){
	
if(isset($_SESSION['message'])){
	if(isset($_SESSION['msgtype'])){
		if ($_SESSION['msgtype']=="info"){
	 		echo  '
	 				<div class="alert alert-info alert1">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i>
            </button>
            <span><b> '. $_SESSION['message'] . '</b></span>
          </div>';
	 				 
			}elseif($_SESSION['msgtype']=="error"){
				echo  '
					<div class="alert alert-danger alert1" >
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i>
            </button>
            <span><b> '. $_SESSION['message'] . '</b></span>
          </div>';
									
			}elseif($_SESSION['msgtype']=="success"){
				echo  '
					<div class="alert alert-success alert1 ">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i>
            </button>
            <span><b> '. $_SESSION['message'] . '</b></span>
          </div>';
          
			}elseif($_SESSION['msgtype']=="warning"){
				echo  '
					<div class="alert alert-warning alert1 ">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i>
            </button>
            <span><b> '. $_SESSION['message'] . '</b></span>
          </div>';
				}	
				unset($_SESSION['message']);
	 			unset($_SESSION['msgtype']);
	   		}
  
		}	

	}
?>