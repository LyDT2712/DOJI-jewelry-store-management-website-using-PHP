<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\api\apisanphamcontroller;
use App\Http\Controllers\api\apiloaispcontroller;
use App\Http\Controllers\api\apinhacungcapcontroller;
use App\Http\Controllers\api\apinhanviencontroller;
use App\Http\Controllers\api\apikhachhangcontroller;
use App\Http\Controllers\api\apibillsbancontroller;
use App\Http\Controllers\api\apinewscontroller;
use App\Http\Controllers\api\apibillsnhapcontroller;
use App\Http\Controllers\api\apislidecontroller;
use App\Http\Controllers\api\apiuserscontroller;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('products',apisanphamcontroller::class);
Route::resource('categories',apiloaispcontroller::class);
Route::resource('supplier', apinhacungcapcontroller::class);
Route::resource('staff', apinhanviencontroller::class);
Route::resource('customer', apikhachhangcontroller::class);
Route::resource('bills', apibillsbancontroller::class);
Route::resource('news', apinewscontroller::class);
Route::resource('bills_nhaps', apibillsnhapcontroller::class);
Route::resource('slides', apislidecontroller::class);
Route::resource('userss', apiuserscontroller::class);

Route::get('/productbycate/{id}',[ apisanphamcontroller::class,'productbycate']);
Route::get('/detailsp/{id}',[ apisanphamcontroller::class,'detailsp']);

route::resource("kh",apiuserscontroller::class);
route::get("kh1/get/{tk}&{mk}",[apiuserscontroller::class,"show2"]);
route::get("kh1/get/{tk}",[apiuserscontroller::class,"show3"]);
route::get("/get/{tk}",[apiuserscontroller::class,"show3"]);

route::resource("kh",apikhachhangcontroller::class);
route::get("kh1/get/{email}",[apikhachhangcontroller::class,"show2"]);
route::get("kh1/get/{email}",[apikhachhangcontroller::class,"show3"]);
route::get("/login/{email}&{pass}",[apikhachhangcontroller::class,"Login"]);