<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tva;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private Product $modelProduct;
    private Tva $modelTva;
    private Category $modelCategory;

    public function __construct()
    {
        $this->modelProduct = new Product();
        $this->modelCategory = new Category();
        $this->modelTva = new Tva();
    }

    public function products()
    {
        $products = $this->modelProduct->getAllProducts();

        return view("product.products", ["products" => $products]);
    }

    public function productDelete(int $productId)
    {
        $this->modelProduct->removeProduct($productId);
        return redirect("/admin/products");
    }

    public function productModifyView(int $productId)
    {
        $product = $this->modelProduct::find($productId);
        $tvas = $this->modelTva->getAllTvaExpectCurrentId($productId);
        $categories = $this->modelCategory->getAllCategoryExpectCurrentId($productId);
        return view("product.productsModify", ["product" => $product, "tvas" => $tvas, "categories" => $categories]);
    }

    public function productModify(Request $request, int $productId)
    {
        $request->validate([
            "productModifyName" => "required|max:255",
            "productModifyReference" => "required|max:10",
            "productModifyQuantity" => "required",
            "productModifyPriceHT" => "required",
            "productModifyDescription" => "required",
            "productModifyCategory" => "required",
            "productModifyTva" => "required"
        ]);

        $product = Product::find($productId);
        $product->update(
            [
                "name" => $request->input("productModifyName"),
                "reference" => $request->input("productModifyReference"),
                "description" => $request->input("productModifyDescription"),
                "quantity" => $request->input("productModifyQuantity"),
                "priceHT" => $request->input("productModifyPriceHT"),
                "tva_id" => $request->input("productModifyTva"),
                "category_id" => $request->input("productModifyCategory")
            ]
        );

        return redirect("/admin/products");
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
