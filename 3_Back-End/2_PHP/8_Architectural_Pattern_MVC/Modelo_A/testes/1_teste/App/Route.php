<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'IndexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => '/contato',
			'controller' => 'IndexController',
			'action' => 'contato'
		);

		$this->setRoutes($routes);
	}

}

?>