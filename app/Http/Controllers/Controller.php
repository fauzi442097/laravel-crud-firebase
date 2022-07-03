<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;

use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      title="API CRUD User Firebase",
 *      version="1.0",
 *      description="This is a sample crud user with realtime database (Firebase)",
 *      @OA\Contact(
 *          name="Ahmad Fauzi",
 *          email="fauzi442097@gmail.com"
 *      )
 * ),
 *  @OA\Server(
 *      url="http://127.0.0.1:8000",
 *      description="Demo API Server"
 * )
 */
class Controller extends BaseController
{
}
