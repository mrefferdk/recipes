<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     title="Platform Gateway",
 *     description="OpenAPI Documentation for the Platform Gateway",
 *     version="1.0"
 * )
 *
 * @OA\Server(
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="Platform Gateway Server"
 * )
 *
 * @OAS\SecurityScheme(
 *      securityScheme="bearer_token",
 *      type="https",
 *      scheme="bearer"
 * )
 *
 * @OA\Tag(
 *     name="Answer",
 *     description="API Endpoint for Answers"
 * )
 *
 * @OA\Tag(
 *     name="Bootstrap",
 *     description="API Endpoint for Bootstrap"
 * )
 *
 * @OA\Tag(
 *     name="Bookmark",
 *     description="Bookmark Resource"
 * )
 *
 * @OA\Tag(
 *     name="Document",
 *     description="API Endpoints for Documents"
 * )
 *
 * @OA\Tag(
 *     name="Filter",
 *     description="API Endpoint for Search Filters"
 * )
 *
 * @OA\Tag(
 *     name="Search",
 *     description="API Endpoints for Search"
 * )
 *
 * @OA\Tag(
 *     name="Quiz",
 *     description="API Endpoints for Quiz"
 * )
 *
 * @OA\Parameter(
 *     parameter="ID",
 *     name="id",
 *     in="path",
 *     description="Object ID",
 *     required=true,
 *     @OA\Schema(
 *         type="integer",
 *         example=7123
 *     )
 * )
 *
 * @OA\Parameter(
 *     parameter="UUID",
 *     name="uuid",
 *     in="path",
 *     description="Object UUID",
 *     required=true,
 *     @OA\Schema(
 *         type="string",
 *         example="278669fc-b70c-45d1-a5ca-d90511b2f594"
 *     )
 * )
 *
 * @OA\Parameter(
 *     parameter="PaginationPage",
 *     name="page",
 *     in="query",
 *     description="Paginate list",
 *     required=false,
 *     @OA\Schema(
 *         type="integer",
 *         example=5
 *     )
 * )
 *
 * @OA\Parameter(
 *     parameter="PaginationLimit",
 *     name="limit",
 *     in="query",
 *     description="Paginate list",
 *     required=false,
 *     @OA\Schema(
 *         type="integer",
 *         example=20
 *     )
 * )
 *
 * @OA\Parameter(
 *     parameter="Fields",
 *     name="fields",
 *     in="query",
 *     description="Filter the outputted fields",
 *     required=false,
 *     @OA\Schema(
 *         type="string",
 *         example="id,title,namespace"
 *     )
 * )
 *
 * @OA\Parameter(
 *     parameter="Sorting",
 *     name="sort",
 *     in="query",
 *     description="Sort output by property",
 *     required=false,
 *     @OA\Schema(
 *         type="string",
 *         example="title"
 *     )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;
}
