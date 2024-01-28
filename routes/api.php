<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentsProfileController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LikesCommentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\PicturesAlbumController;
use App\Http\Controllers\PicturesTagController;
use App\Http\Controllers\PicturesTopicController;
use App\Http\Controllers\PositionsTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsPictureController;
use App\Http\Controllers\ProductsTagController;
use App\Http\Controllers\ProductsTopicController;
use App\Http\Controllers\RecentViewController;
use App\Http\Controllers\ReportsCommentController;
use App\Http\Controllers\ReportsPictureController;
use App\Http\Controllers\ReportsProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchHistoryController;
use App\Http\Controllers\TagsPictureController;
use App\Http\Controllers\TagsProductController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Database\Seeders\HistoryPositionSeeder;
use Illuminate\Support\Facades\Route;

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



Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('users', UserController::class);
});

Route::post('signup', [AuthController::class, 'sign_up']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);

Route::apiResource('products', ProductController::class);
Route::apiResource('pictures', PictureController::class);
Route::apiResource('comments', CommentController::class);
Route::apiResource('payments', PaymentController::class);
Route::apiResource('transactions', TransactionController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('reviews', ReviewController::class);
Route::apiResource('order-details', OrderDetailController::class);
Route::apiResource('albums', AlbumController::class);
Route::apiResource('pictures-albums', PicturesAlbumController::class);
Route::apiResource('topics', TopicController::class);
Route::apiResource('pictures-topics', PicturesTopicController::class);
Route::apiResource('tags-pictures', TagsPictureController::class);
Route::apiResource('pictures-tags', PicturesTagController::class);
Route::apiResource('reports-pictures', ReportsPictureController::class);
Route::apiResource('likes', LikeController::class);
Route::apiResource('likes-comments', LikesCommentController::class);
Route::apiResource('reports-comments', ReportsCommentController::class);
Route::apiResource('follows', FollowController::class);
Route::apiResource('comments-profiles', CommentsProfileController::class);
Route::apiResource('likes-comments', LikesCommentController::class);
Route::apiResource('reports-comments', ReportsCommentController::class);
Route::apiResource('products-pictures', ProductsPictureController::class);
Route::apiResource('products-topics', ProductsTopicController::class);
Route::apiResource('positions-types', PositionsTypeController::class);
Route::apiResource('tags-products', TagsProductController::class);
Route::apiResource('products-tags', ProductsTagController::class);
Route::apiResource('reports-products', ReportsProductController::class);
Route::apiResource('histories-positions', HistoryPositionSeeder::class);
Route::apiResource('recent-views', RecentViewController::class);
Route::apiResource('search-histories', SearchHistoryController::class);
