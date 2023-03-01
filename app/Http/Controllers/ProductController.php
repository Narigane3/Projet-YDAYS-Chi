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

    public function productsView()
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
        $tvas = $this->modelTva->getAllTvaExpectCurrentId($product->tva->id);
        $categories = $this->modelCategory->getAllCategoryExpectCurrentId($product->category->id);
        return view("product.productModify", ["product" => $product, "tvas" => $tvas, "categories" => $categories]);
    }

    public function modifyProduct(Request $request, int $productId)
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

    public function createProductView()
    {
        $tvas = $this->modelTva->getAllTvaExpectCurrentId(-1);
        $categories = $this->modelCategory->getAllCategoryExpectCurrentId(-1);

        return view("product.productCreate", ["tvas" => $tvas, "categories" => $categories]);
    }

    public function createProduct(Request $request)
    {
        $request->validate([
            "productCreateName" => "required|max:255",
            "productCreateReference" => "required|max:10",
            "productCreateQuantity" => "required",
            "productCreatePriceHT" => "required",
            "productCreateDescription" => "required",
            "productCreateCategory" => "required",
            "productCreateTva" => "required"
        ]);

        Product::create(
            [
                "name" => $request->input("productCreateName"),
                "reference" => $request->input("productCreateReference"),
                "description" => $request->input("productCreateDescription"),
                "quantity" => $request->input("productCreateQuantity"),
                "priceHT" => $request->input("productCreatePriceHT"),
                "tva_id" => $request->input("productCreateTva"),
                "category_id" => $request->input("productCreateCategory")
            ]
        );

        return redirect("/admin/products");
    }
}
