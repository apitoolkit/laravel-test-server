<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use APIToolkit\APIToolkitLaravel;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/user', function (Request $request) {
    // $options = [
    //     "pathPattern" => "/repos/{owner}/{repo}",
    //     "redactHeaders" => ["Server"],
    //     "redactRequestBody" => ["$.password"],
    //     "redactResponseBody" => ["$.password"]
    // ];

    // $guzzleClient = APIToolkitLaravel::observeGuzzle($request, $options);
    // $responseFromGuzzle = $guzzleClient->request('GET', 'https://api.github.com/repos/guzzle/guzzle?foobar=123');

    // $response = $responseFromGuzzle->getBody()->getContents();
    // return $response;


    throw new Exception("Custom user error");
    return response()->json(["hello" => "world"]);
    // } catch (Exception $e) {
    //     // Report the error to APIToolkit
    //     APIToolkitLaravel::reportError($e, $request);
    //     return response()->json(["error" => $e->getMessage()]);
    // }
});
