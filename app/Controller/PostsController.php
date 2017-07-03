<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 */
class PostsController extends AppController {

	public $scaffold;
	public $components = array('RequestHandler');

	public function index() {
        $posts = $this->Post->find('all');
        $this->set(array(
            'posts' => $posts,
            '_serialize' => 'posts'
        ));
    }

    public function view($title){
    	$posts = $this->Post->find('all', 
                   array('conditions'=>array('Post.title'=>$title)));
    	//$posts = $this->Post->findByTitle($title);
        $this->set(array(
            'posts' => $posts,
            '_serialize' => 'posts'
        ));
    }
   
    }
    
    


