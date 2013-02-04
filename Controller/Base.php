<?php

namespace Controller;

class Base
{
	// The Slim app
	protected $app;

	// Dispatch to the right controller and function
	public static function dispatch($app, $action='index')
	{
		// Instantiate the called controller
		$controller = new static();

		// Set the Slim instance
		$controller->app = $app;

		// Retrieve the extra function arguments
		$arguments = array_splice(func_get_args(), 2);

		// Call controller function if exists
		if (method_exists($controller, $action)) {
			return call_user_func_array(array($controller, $action), $arguments);
		} else {
			throw new \Exception('Function does not exist in controller');
		}
	}
}
