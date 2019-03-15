<?php

namespace application\controllers;

use application\core\Controller;

class PracticeController extends Controller {	
	public function acpAction() {
		$this->view->render('Плавное затухание');
	}
	
	public function arraysAction() {
		$this->view->render('Массивы');
	}

	public function buttonAction() {
		$this->view->render('Кнопка - датчик касания');
	}

	public function driverAction() {
		$this->view->render('Драйвер двигателя');
	}

	public function firstprogAction() {
		$this->view->render('Первая программа на С++');
	}

	public function functionsAction() {
		$this->view->render('Функции');
	}

	public function lcdAction() {
		$this->view->render('Работа с LCD');
	}

	public function ledAction() {
		$this->view->render('Бегущий огонь');
	}

	public function loopsAction() {
		$this->view->render('Циклы');
	}

	public function microcodingAction() {
		$this->view->render('Програмирование микроконтроллера');
	}

	public function sensorsAction() {
		$this->view->render('Сенсоры. Датчики Arduino');
	}

	public function servoAction() {
		$this->view->render('Управление сервоприводом');
	}

	public function varsAction() {
		$this->view->render('Переменные и типы данных');
	}

	public function vetvlenieAction() {
		$this->view->render('Ветвление');
	}

}