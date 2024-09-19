<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Instagram;
use App\Models\ProductCategories;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        //get product with galleries and category where deleted_at null
        $products = Product::with(['galleries', 'category'])->where('status', '1')->get();
        //productspopular get 3 items where popular = 1 and with highest star
        $productsPopular = Product::with(['galleries', 'category'])->where('status', '1')->where('popular', '1')->orderBy('star', 'desc')->take(3)->get();
        //instagram
        $instagrams = Instagram::orderBy('id', 'desc')->take(10)->get();
        //$testimoni
        $testimonials = Testimoni::orderBy('id', 'desc')->take(10)->get();
        //$blogs
        $blogs = Blog::orderBy('created_at','desc')->take(6)->get();
        //contact
        $contact = Contact::orderBy('id', 'desc')->first();
        //ProductCategory only

        $productCategories = ProductCategories::where('is_active', '1')->get();

        // dd($productCategories);

        // dd($productsPopular);
        return view('index', compact('products','productsPopular','instagrams','testimonials','blogs','contact','productCategories'));
    }

    //quickview
    public function quickview($id) {
        $product = Product::with(['galleries', 'category'])->where('id', $id)->firstOrFail();
        return view('quickview', compact('product'));
    }

    public function product() {
        // $blogs = Blog::orderBy('created_at','desc')->paginate(12);
        //get product with galleries and category where deleted_at null
        $products = Product::with(['galleries', 'category'])->where('status', '1')->get();
        $contact = Contact::orderBy('id', 'desc')->first();

        // dd($products);


        $productCategories = ProductCategories::where('is_active', '1')->get();
        return view('frontend.page.product', compact('products','contact','productCategories'));
    }

    public function productCategories(Request $request) {
          // Ambil seluruh query string setelah tanda "?"
            $fullQueryString = $request->getRequestUri();
            // Pisahkan bagian setelah tanda "?"
            $queryString = parse_url($fullQueryString, PHP_URL_QUERY);
        // $products = Product::with(['galleries', 'category'])->where('status', '1')->get();
        //get product with galleries and category where deleted_at null and with category from $queryString
        $products = Product::with(['galleries', 'category'])->where('status', '1')->whereHas('category', function($query) use ($queryString) {
            $query->where('slug', $queryString);
        })->get();
        $contact = Contact::orderBy('id', 'desc')->first();

        // dd($products);

        //
        $productCategories = ProductCategories::where('is_active', '1')->get(); where is_active = 1
        $productCategories = ProductCategories::where('is_active', '1')->get();
        return view('frontend.page.productCategories', compact('products','contact','productCategories','queryString'));
    }

    //productdetail
    public function productdetail($slug) {
        $product = Product::with(['galleries', 'category'])->where('slug', $slug)->firstOrFail();
        // //get random products
        // $randomProducts = Product::with(['galleries', 'category'])->where('status', '1')->inRandomOrder()->take(6)->get();
        // // dd($product);


        $productCategories = ProductCategories::where('is_active', '1')->get();
        // $contact = Contact::orderBy('id', 'desc')->first();
        // return view('frontend.page.productdetail', compact('product', 'randomProducts','contact'));
        return view('frontend.page.productdetail', compact('product','productCategories'));
    }

    //aboutus
    public function aboutus() {
        // return view('frontend.page.aboutus');

        $contact = Contact::orderBy('id', 'desc')->first();

        $productCategories = ProductCategories::where('is_active', '1')->get();
        return view('frontend.page.aboutus', compact('contact','productCategories'));
    }

    //contactus
    public function contactus() {
        //get data contact
        $contact = Contact::orderBy('id', 'desc')->first();

        $productCategories = ProductCategories::where('is_active', '1')->get();
        // dd($contact);
        return view('frontend.page.contactus', compact('contact','productCategories'));
    }

    //blogdetail
    public function blogdetail($slug) {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        //get random blogs
        $randomBlogs = Blog::inRandomOrder()->take(3)->get();

        $productCategories = ProductCategories::where('is_active', '1')->get();
        // dd($blog);
        $contact = Contact::orderBy('id', 'desc')->first();
        return view('frontend.page.blogdetail', compact('blog', 'randomBlogs','contact','productCategories'));
    }

    //blog
    public function blog() {
        $blogs = Blog::orderBy('created_at','desc')->paginate(12);

        $productCategories = ProductCategories::where('is_active', '1')->get();
        // dd($blogs);
        $contact = Contact::orderBy('id', 'desc')->first();
        return view('frontend.page.blog', compact('blogs','contact','productCategories'));
    }
}
