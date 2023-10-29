<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\categories;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $category = categories::where('status',1)->limit(6)->inRandomOrder()->get();

        return view('welcome', compact('category'));
    }
    public function list(Request $request)
    {
        $category = categories::where('status',1)->get();
        $listings = Contact::where('status', 1)->with('category');

        if ($request->has('query')) {
            $filter = $request->input('query');
            // Add your filtering logic here
            $listings->where('company_name', 'like', '%' . $filter . '%');
        }

        if ($request->has('check')) {
//            dd(implode(",",$request->check));
            $listings->whereIn('category_id',[implode(",",$request->check)]);
        }

        $listings = $listings->paginate(10); // Capture the paginated result
        $total =  $listings->toArray();
        $total =  $total['total'] ?? "N/A";
        return view('list', compact('category','listings','total'));
    }

    public function getMap(Request $request)
    {
        $data = Contact::where('status',1)->with('category')->get();

        return $data;
    }

    // Livewire Function starts
    public function view(Request $request, $id)
    {

        try {
            $category = categories::where('status',1)->get();
            $listings = Contact::where('status', 1)->with('category')->findOrFail($id);
//            dd($listings);
            return view('view', compact('category', 'listings'));
        } catch (ModelNotFoundException $e) {
            // The record was not found, redirect to the 404 page.
            return view('errors.404');
        }
    }

    public function productsData(Request $request)
    {
        $category = categories::where('status',1)->get();
        $listings = Contact::where('status', 1)->with('category');

        if ($request->has('query')) {
            $filter = $request->input('query');
            // Add your filtering logic here
            $listings->where('company_name', 'like', '%' . $filter . '%');
        }

        if ($request->has('check')) {
            $listings->whereIn('category_id',[implode(",",$request->check)]);
        }

        $listings = $listings->paginate(10); // Capture the paginated result
        $total =  $listings->toArray();
        $total =  $total['total'] ?? "N/A";

        return view('products', compact('category','listings','total'));
    }

}
