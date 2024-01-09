<?php

namespace App\Livewire\Frontend;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class FilterShop extends Component
{
    use WithPagination;

    public $search;
    public $categories;
    public $selectedCategories;
    public $minPrice;
    public $maxPrice;
    public $sortBy = 'latest';
    public $featuredProducts;

    public function render()
    {
        $this->categories = Category::where('is_visible', true)->get();
        $products = Product::query()->where('is_visible', true);

        // Apply search
        if ($this->search) {
            $products->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            });
        }

        // Apply filters
        if (!empty($this->selectedCategories)) {
            $products->whereHas('categories', function ($query) {
                $query->where('id', $this->selectedCategories);
            });
        }

        if ($this->minPrice) {
            $products->where('price', '>=', $this->minPrice);
        }

        if ($this->maxPrice) {
            $products->where('price', '<=', $this->maxPrice);
        }

        // Apply sorting
        if ($this->sortBy === 'latest') {
            $products->latest();
        } elseif ($this->sortBy === 'high-to-low') {
            $products->orderBy('price', 'desc');
        } elseif ($this->sortBy === 'low-to-high') {
            $products->orderBy('price', 'asc');
        } elseif ($this->sortBy === 'featured') {
            // Customize this logic based on your requirements
            $products->where('is_featured', true)->orderBy('created_at', 'desc');
        }

        $products = $products->paginate(9);

        // Fetch featured products (customize this logic based on your requirements)
        $this->featuredProducts = Product::where('is_featured', true)->limit(5)->get();
        return view('livewire.frontend.filter-shop', compact([
            'products',
        ]));
    }
}
