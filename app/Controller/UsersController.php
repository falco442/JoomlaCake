<?php
	class UsersController extends AppController
	{
		public function index()
		{
			$users = $this->User->find('all');
			$this->set(compact('users'));
		}
		
		public function login()
		{
			$this->autoRender = false;
			if($this->request->is('post'))
			{
				$jApplication = new JApplication();
				$credentials = array(
					'username'=>$this->request->data['User']['username'],
					'password'=>$this->request->data['User']['password']
				);
				$options=array(
					'remember'=>false,
					'action'=>''
				);
				if(isset($this->request->data['User']['remember']))
					$options = array(
						'remember'=>$this->request->data['User']['remember']
					);
				if($jApplication->login($credentials,$options))
				{
					$this->Auth->login($this->request->data['username']);
					return $this->redirect($this->Auth->redirect());
				}
				return $this->Session->setFlash(__('Username or password wrong'));
			}
		}
		
		public function logout()
		{
			$userId = $this->Session->read('Auth.User.id');
			$jApplication = new JApplication();
			$jApplication->logout($userId);
			$this->Session->delete('Auth.User');
			return $this->redirect($this->Auth->logoutRedirect);
		}
	
		public function beforeFilter()
		{
			parent::beforeFilter();
			$this->Auth->allow('login','logout');
		}
	}
?>