<?php


class DataController
{
    public function fetchCategories()
    {
        $supabase = include(__DIR__ . '/../config/supabase.php');
        $db = $supabase['service']->initializeDatabase('categories', 'id');

        try {
            $categories = $db->fetchAll()->getResult();
            foreach ($categories as $category) {
                echo $category->id . ' - ' . $category->categoryname . '<br />';
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function fetchProducts()
    {
        $supabase = include(__DIR__ . '/../config/supabase.php');
        $db = $supabase['service']->initializeDatabase('products', 'id');

        try {
            $products = $db->fetchAll()->getResult();
            foreach ($products as $product) {
                echo $product->id . ' - ' . $product->productname . '($' . $product->price . ')<br />';
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
