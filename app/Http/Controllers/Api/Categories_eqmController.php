<?php

namespace App\Http\Controllers\Api;

use App\Category_equipment;
use App\Category_wastes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Categories_eqmController extends Controller
{
    public function categories_eqm()
    {

        return Category_equipment::orderBy('name', 'ASC')->get(['id', 'name']);

    }

    public function kinds(Category_equipment $category_equipment)
    {

        return $category_equipment->stock_kinds()->orderBy('name', 'ASC')->get(['id', 'name']);

    }

    public function categories_waste()
    {

        return Category_wastes::orderBy('name', 'ASC')->get(['id', 'name']);
    }

    public function wastes(Category_wastes $category_wastes)
    {

        return $category_wastes->stock_waste_kids()->orderBy('name', 'ASC')->get(['id', 'name']);
    }

}
