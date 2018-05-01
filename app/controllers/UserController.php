<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Http\Request;

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$user = User::find();
		$this->view->data = $user;
    }

    public function deleteAction($id)
    {
    	$request 	= new Request();
    	
    	if ($request->isPost()) {
    		$user = User::findFirst($id);
      		$user->delete();
 
      		return $this->response->redirect('user');
    	}
    }

    public function editAction($id)
    {
    	$request 	= new Request();
    	if ($request->isPost()) {
    		$id = $this->request->getPost("id");
			$user = User::findFirstById($id);

			$user->id = $id;
			$user->username = $this->request->getPost("username");
			$user->nama = $this->request->getPost("nama");
			$user->email = $this->request->getPost("email");

			if ($user->save()) {
				$this->response->redirect('user');
	        	$this->view->disable();
			}else{
				echo "Sorry, the following problems were generated: <br/> ";

	            $messages = $user->getMessages();

	            foreach ($messages as $message) {
	                echo $message->getMessage(), "<br/>";
	            }
			}
    	}else{
    		$user 		= User::findFirst($id);
 
			$this->view->id 		= $user->id;
			$this->view->username 	= $user->username;
			$this->view->nama 		= $user->nama;
			$this->view->email 		= $user->email;
    	}
    }

    public function addAction()
    {
    	$request 	= new Request();

    	if ($request->isPost()) {
    		$user 		= new User();
	    	$success = $user->save(
	            $this->request->getPost(),
	            [
	                "username",
	                "nama",
	                "email",
	                "pass",
	            ]
	        );

	        if ($success) {
	            $this->response->redirect('user');
	        	$this->view->disable();
	        } else {
	            echo "Sorry, the following problems were generated: <br/> ";

	            $messages = $user->getMessages();

	            foreach ($messages as $message) {
	                echo $message->getMessage(), "<br/>";
	            }
	        }
    	}
    }

}

