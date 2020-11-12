<?php
namespace App\Controller;

use App\Model\User;
use App\Model\UserDB;

class UserController
{
    protected $connectUser;

    public function __construct()
    {
        $this->connectUser = new UserDB();
    }

    function viewAll()
    {
        $all = $this->connectUser->getAll();
        include_once 'src/View/list.php';

    }
    function addProduct() {
        if ($_SERVER['REQUEST_METHOD']=='GET') {
            include_once 'src/View/add.php';
        } else{
            $id = $_REQUEST['user-id'];
            $first = $_REQUEST['user-first'];
            $last = $_REQUEST['user-last'];
            $email = $_REQUEST['user-email'];
            $birth = $_REQUEST['user-birth'];
            $user = new User($id,$first,$last,$email,$birth);
            $this->connectUser->add($user);
            header('location:index.php');
        }
    }

    function updateProduct() {
        if ($_SERVER['REQUEST_METHOD']=='GET') {
            $id = $_REQUEST['id'];
            $user = $this->connectUser->getUser($id);
            include_once 'src/View/update.php';
        } else{
            $id = $_REQUEST['user-id'];
            $first = $_REQUEST['user-first'];
            $last = $_REQUEST['user-last'];
            $email = $_REQUEST['user-email'];
            $birth = $_REQUEST['user-birth'];
            $user = new User($id,$first,$last,$email,$birth);
            $this->connectUser->update($user);
            header('location:index.php');
        }
    }
    function deleteProduct($id) {
        $this->connectUser->delete($id);
        header('location:index.php');
    }

}