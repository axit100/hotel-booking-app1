<?php

namespace App\Livewire;

use App\Models\categories;
use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;


    public $search = '';
    public $selectedItem = ''; // Store the selected item

    public function render()
    {
        $category = categories::where('status',1)->get();

        $query = Contact::where('status', 1)->with('category');

        if (!empty($this->selectedItem)) {
            $query->whereIn('category_id', [$this->selectedItem]);
        }
        if (!empty($this->search)) {
            $query->where('company_name', 'like', '%' . $this->search . '%');
        }
        $products = $query->paginate(10);
        return view('livewire.product-list', ['products' => $products, 'category' => $category]);

    }
}
