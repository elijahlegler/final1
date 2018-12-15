<?php

class LoginController extends Controller{

   protected $userObject;

   public function do_login() {
	   // handle login

       $this->userObject = new Users();

       if($this->userObject->checkUser($_POST['email'],$_POST['password'])) {

         $userInfo = $this->userObject->getUserFromEmail($_POST['email']);
         $_SESSION['uID'] = $userInfo['uID'];

         if($this->userObject->isActive($userInfo['uID'])) {

            if(strlen($_SESSION['redirect']) > 0 ) {
                $view = $_SESSION['redirect'];
                unset($_SESSION['redirect']);
                header('Location: '.BASE_URL.$view);
            }
            else {
               header('Location: '.BASE_URL);
             }
        }

        else {
          $this->set('error','Waiting Approval');
              }
           /*$userInfo = $this->userObject->getUserFromEmail($_POST['email']);

           $_SESSION['uID'] = $userInfo['uID'];

          if(strlen($_SESSION['redirect']) > 0 ) {
              $view = $_SESSION['redirect'];
              unset($_SESSION['redirect']);
              header('Location: '.BASE_URL.$view);
          }
           else {
               header('Location: '.BASE_URL);
           }*/
       }
       else {
           $this->set('error','Wrong password / email combination');
       }

   }

    public function logout() {

    //unset the session id
        unset($_SESSION['uID']);

    // close the session
        session_write_close();

    // send to the homepage
        header('Location: '.BASE_URL);

    }

    public function checkLogin($uID){
       $this->userObject = new Users();

       if($this->userObject->isActive($userInfo['uID'])) {
          $userInfo = $this->userObject->getUserID();
          $_SESSION['uID'] = $userInfo['uID'];

          if(strlen($_SESSION['redirect']) > 0 ) {
              $view = $_SESSION['redirect'];
              unset($_SESSION['redirect']);
              header('Location: '.BASE_URL.$view);
          }
          else {
             header('Location: '.BASE_URL);
           }
      }

      else {
        $this->set('error','Waiting Approval');
            }
    }

}
