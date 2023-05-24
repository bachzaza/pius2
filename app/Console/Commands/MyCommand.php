<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;
use App\Models\Product;
use PharIo\Version\Exception;

class MyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:categories {product_Id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Try found product code by iD:';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $idCategory = null;
        $code = null;
        $category = new Category();
        $product = new Product();
        
        try {
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
        catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
        }
        $this->info('Character code = ');
    }
}
