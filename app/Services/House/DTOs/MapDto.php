<?php

declare(strict_types=1);

namespace App\Services\House\DTOs;


use App\Models\Category;
use Illuminate\Support\Collection;

/**
 * Class MapDto
 * @package App\Services\House\DTOs
 */
final class MapDto
{
    /**
     * @var string
     */
    private string $address;

    /**
     * @var string
     */
    private string $slug;

    /**
     * @var string
     */
    private string $main_photo;

    /**
     * @var string
     */
    private string $price;

    /**
     * @var Category
     */
    private Category $category;

    /**
     * @var Collection
     */
    private Collection $coordinate;

    /**
     * MapDto constructor.
     *
     * @param  string  $address
     * @param  string  $main_photo
     * @param  string  $price
     * @param  Category  $category
     * @param  array  $coordinate
     * @param  string  $slug
     */
    public function __construct(
        string $address,
        string $main_photo,
        string $price,
        Category $category,
        array $coordinate,
        string $slug
    ) {
        $this->address    = $address;
        $this->main_photo = $main_photo;
        $this->price      = $price;
        $this->category   = $category;
        $this->coordinate = collect($coordinate);
        $this->slug       = $slug;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return Collection
     */
    public function getCoordinate(): Collection
    {
        return $this->coordinate;
    }


    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getMainPhoto(): string
    {
        return $this->main_photo;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }
}
