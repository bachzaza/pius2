<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;
use App\Models\Product;

class MyCommand extends Command
{
  protected $signature = 'MyCommand:foundProdByID {product_Id}';

/*
|    Консольная команда должна возвращать символьный код категории у
|    товара с идентификатором равным {id}. Если товара с данным {id} не
|    суещствует, то необходимо выбросить соответствующее исключение.
*/
  protected $description = 'Try found product code by Id';

  /**
   * Выполнение консольной команды.
   *
   * @return 
   */
  public function handle()
  {
    $idCategory = null;
    $code = null;
    $category = new Category();
    $product = new Product();

    $product_Id = (int)$this->argument('productId');
    $temp = $product->getProductById($product_Id);

    foreach ($temp as $product)
    {
        $categoryId = $product->category_id;
    }

    $temp2 = $category->getCategoryById($idCategory);

    foreach ($temp2 as $category)
    {
        $code = $category->code;
    }
    $this->info('Character code = '.$code);
  }
}