<?php
/**
 * Created by PhpStorm.
 * User: valeron
 * Date: 10.12.18
 * Time: 15:54
 */

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use App\Controller\FormulaController;



$routes = new RouteCollection();
$routes->add('update_formula', new Route('/formula/update', array(
	'_controller' => [FormulaController::class, 'updateFormuls']
)));

return $routes;

