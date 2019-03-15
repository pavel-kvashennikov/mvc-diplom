<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {
	public function indexAction() {
		$result = $this->model->getNews();
		$vars = [
			'news' => $result,
		];
		$this->view->render('Glavnaya Starinca', $vars);
	}

	public function contactAction() {
		$this->view->render('Об авторе');
	}

	public function profileAction() {
		$this->view->render('Профиль');
	}

}