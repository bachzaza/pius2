<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\Product;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

/*
|    Консольная команда должна возвращать символьный код категории у
|    товара с идентификатором равным {id}. Если товара с данным {id} не
|    суещствует, то необходимо выбросить соответствующее исключение.
*/

Artisan::command('MyTestCommand', function () {
    
    

})->purpose('Try found product By ID');
