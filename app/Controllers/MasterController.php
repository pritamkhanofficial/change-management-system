<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\GroceryCrud;
class MasterController extends BaseController
{
    public function index()
    {
        //
    }
    public function category()
    {
        $crud = new GroceryCrud();
        $crud->setSubject('Category');
	    $crud->setTable('category');
        $crud->columns(['category_name', 'is_active']);
        $crud->displayAs('category_name', 'Category');
        $crud->displayAs('is_active', 'Status');
        $crud->editFields(['category_name', 'is_active']);        
        $crud->addFields(['category_name', 'is_active']);
	    $output = $crud->render();
        //$output->title = 'Category';
        return view('common/index', (array)$output);
    }

    public function sub_category()
    {
        $crud = new GroceryCrud();
        $crud->setSubject('Sub ategory');
	    $crud->setTable('sub_category');

        // $crud->where('sub_category.row_status = 1');
        $crud->setRelation('category_id', 'category', 'category_name', ['is_active' => 1]);

        $crud->columns(['category_id', 'subcategory_name', 'is_active']);

        $crud->displayAs('category_id', 'Category');
        $crud->displayAs('subcategory_name', 'Sub Category name');
        $crud->displayAs('is_active', 'Status');

        $crud->fields(['category_id', 'subcategory_name', 'is_active']);

	    $output = $crud->render();
        //$output->title = 'Category';
        return view('common/index', (array)$output);
    }


    public function country()
    {
        $crud = new GroceryCrud();
        $crud->setSubject('Country');
	    $crud->setTable('country');
        $crud->columns(['country_name', 'is_active']);
        $crud->displayAs('country_name', 'Country');
        $crud->displayAs('is_active', 'Status');
        $crud->editFields(['country_name', 'is_active']);        
        $crud->addFields(['country_name', 'is_active']);
	    $output = $crud->render();
        //$output->title = 'Category';
        return view('common/index', (array)$output);
    }


    public function state()
    {
        $crud = new GroceryCrud();
        $crud->setSubject('State');
	    $crud->setTable('state');

         // $crud->where('state.row_status = 1');
        // $crud->setRelation('country_id', 'category', 'id', ['row_status' => 1]);
        $crud->setRelation('country_id','country','id',array('is_active' => 'active'));

        $crud->columns(['country_id', 'state_name', 'is_active']);

        $crud->displayAs('country_id', 'Country id');
        $crud->displayAs('state_name', 'State');
        $crud->displayAs('is_active', 'Status');
        $crud->editFields(['country_id', 'state_name', 'is_active']);        
        $crud->addFields(['country_id', 'state_name', 'is_active']);
	    $output = $crud->render();
        //$output->title = 'Category';
        return view('common/index', (array)$output);
    }


    public function product()
    {
        $crud = new GroceryCrud();
        $crud->setSubject('Product');
	    $crud->setTable('product');
        $crud->columns(['product_name', 'product_price']);
        $crud->displayAs('product_name', 'Product Name');
        $crud->displayAs('product_price', 'Product price');
        //$crud->displayAs('is_active', 'Status');
        $crud->editFields(['product_name', 'product_price']);        
        $crud->addFields(['product_name', 'product_price']);
	    $output = $crud->render();
        //$output->title = 'Category';
        return view('common/index', (array)$output);
    }


    public function product_image()
    {
        $crud = new GroceryCrud();
        $crud->setSubject('Product Image');
	    $crud->setTable('product_image');
        $crud->columns(['product_image']);
        $crud->displayAs('product_image', 'Product Image');
        $crud->editFields(['product_image']);        
        $crud->addFields(['product_image']);
	    $output = $crud->render();
        //$output->title = 'Category';
        return view('common/index', (array)$output);
    }


    public function unit()
    {
        $crud = new GroceryCrud();
        $crud->setSubject('Unit');
	    $crud->setTable('unit');
        $crud->columns(['unit_name', 'is_active']);
        $crud->displayAs('unit_name', 'Unit');
        $crud->displayAs('is_active', 'Status');
        $crud->editFields(['unit_name', 'is_active']);        
        $crud->addFields(['unit_name', 'is_active']);
	    $output = $crud->render();
        //$output->title = 'Category';
        return view('common/index', (array)$output);
    }

}
