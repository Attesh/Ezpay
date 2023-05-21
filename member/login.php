<?php header('Access-Control-Allow-Origin: *'); ?>

<?php include 'assets/common/config.php';
  if($_SESSION['userid']!=''){
  header('Location: index.php'); 

  }
         
if($_POST)
{
extract($_POST);
  


$checkLogin = $db->selectSRow(array("*"),PREFIX."users","email='$email'");
if ($checkLogin ) {

if (password_verify($password, $checkLogin['password'])) {
  
                        $userid = $checkLogin['id'];  

                        if($checkLogin['type']==1){
                        $checkToken = $db->selectSRow(array("*"),PREFIX."personal_access_tokens","tokenable_id  ='$userid'");
                        
                            if($checkLogin['status'] == 'approved'){

                              setcookie("tokenCookie",$checkToken['token'], time() + 3600);
                              $_SESSION['userid']=$userid;
                                        $data['success'] = 1;
                                  echo json_encode($data['success']);
                    exit;
                                                
                              
                            }
                            else
                            {
                            ?>
                        
                              <?php
                             
                                $data ="Wait for approved your request! ";
                                  echo json_encode($data);
                                  
                    exit;
                            }
                        
                         }
                         else{
                          ?>
                      
                              <?php
                          $data="You have no access to Login";
                            echo json_encode($data);
                    exit;
                         }
                      

                    } else {
                      $data = 'Invalid password.';
                             
                    echo json_encode($data);
                    exit;
                      
                    }

                  } else {
                    $data = 'Email not found !.';
                           
                  echo json_encode($data);
                  exit;
                    
                  }
                  }
                  ?>