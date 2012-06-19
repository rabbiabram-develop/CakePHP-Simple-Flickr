<?php
	class PhotosController extends AppController {

		public $helpers = array('Html', 'Form');
		var $components = array('Flickr');
		
		public function index() {
			$page = 1;
			if (isset($this->params['named']['page'])) {
				$page = $this->params['named']['page'];
				$tag = $this->params['named']['tag'];
			} else if (isset($this->data['Photo']['search'])) {
				$tag = $this->data['Photo']['search'];
			} else {
				$tag = "pollenizer sydney";
			}
			$thumbs = $this->flickr->photos_search(array(
							"text"=>$tag,
							"sort"=>"interestingness-desc",
							"per_page"=>"12",
							"page"=>$page
							));
			$this->set(compact('page','tag','thumbs'));
			$this->set('title_for_layout', ucwords($tag));
		}
		
	}
?>