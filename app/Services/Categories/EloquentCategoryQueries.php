<?php


namespace App\Services\Categories;


use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class EloquentCategoryQueries
 * @package App\Services\Categories
 */
final class EloquentCategoryQueries implements Contracts\CategoryQueries
{

    /**
     * @return Category[]|Collection
     */
    public function getFilter()
    {
        return Category::get(['name', 'slug', 'id']);
    }

    /**
     * @param  int  $id
     *
     * @return Category
     */
    public function getById(int $id): Category
    {
        return Category::whereId($id)->first();
    }
}
