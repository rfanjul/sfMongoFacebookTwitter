<?php

namespace Quorra\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UsersController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('QuorraCoreBundle:Default:index.html.twig');
    }

		/**
		 * undocumented function
		 *
		 * @return void
		 * @author Rubén Fanjul Estrada
		 **/
		public function getAction()
		{			
		}
		
		/**
		 * undocumented function
		 *
		 * @return void
		 * @author Rubén Fanjul Estrada
		 **/
		public function createAction()
		{
		}
		
		/**
		 * undocumented function
		 *
		 * @return void
		 * @author Rubén Fanjul Estrada
		 **/
		public function deleteAction()
		{
		}
		
		/**
		 * undocumented function
		 *
		 * @return void
		 * @author Rubén Fanjul Estrada
		 **/
		public function updateAction()
		{
		}
}
