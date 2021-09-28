<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        //$properties = DB::select("SELECT * FROM properties");
        $properties  = Property::all();
        return view('property.index')->with('properties',$properties);
    }

    public function show($slug)
    {
        //$property = DB::select("SELECT * FROM properties WHERE slug = ?", [$slug]);
        $property = Property::where('slug', $slug)->get();

        if (!empty($property)){
            return view('property/show')->with('property',$property);
        }else{
            return redirect()->action('PropertyController@index');
        }
      // echo '<pre>'; var_dump($id); echo '</pre>';
    }


    public function create()
    {
        return view('property.create');
    }

    public function store(Request $request)
    {
        $propertySlug = $this->setName($request->title);
//        $property = [
//             $request->title,
//             $propertySlug,
//             $request->description,
//             $request->rental_price,
//             $request->sale_price
//                ];
//
//        DB::insert("INSERT INTO properties (title, slug, description, rental_price, sale_price) VALUES
//        (?,?,?,?,?)", $property );
        $property = [
            'title'        => $request->title,
            'slug'         => $propertySlug,
            'description'  => $request->description,
            'rental_price' => $request->rental_price,
            'sale_price'   => $request->sale_price
        ];
        Property::create($property);

        return redirect()->action('PropertyController@index');
    }

    public function edit($slug)
    {
        //$property = DB::select("SELECT * FROM properties WHERE slug = ?", [$slug]);
        $property = Property::where('slug', $slug)->get();
        if (!empty($property)){
            return view('property/edit')->with('property',$property);
        }else{
            return redirect()->action('PropertyController@index');
        }
    }

    public function update(Request $request, $id)
    {
        $propertySlug = $this->setName($request->title);
//        $property = [
//            $request->title,
//            $propertySlug,
//            $request->description,
//            $request->rental_price,
//            $request->sale_price,
//            $id
//        ];
//
//        DB::update("UPDATE properties SET title = ?, slug = ?, description = ?,
//                      rental_price = ?, sale_price = ? WHERE id = ?", $property );

        $property = Property::find($id);
            $property->title        = $request->title;
            $property->slug         = $propertySlug;
            $property->description  = $request->description;
            $property->rental_price = $request->rental_price;
            $property->sale_price   = $request->sale_price;

            $property->save();

        return redirect()->action('PropertyController@index');

    }

    public function destroy($slug)
    {
       //$property = DB::select("SELECT * FROM properties WHERE slug = ?", [$slug]);
        $property = Property::where('slug', $slug)->get();
        if(!empty($property)){
            DB::delete("DELETE FROM properties WHERE slug=?", [$slug]);
        }
        return redirect()->action('PropertyController@index');
    }


    private function setName($title){

        $propertySlug = str_slug($title);

        //$properties = DB::select("SELECT * FROM properties ");
        $properties  = Property::all();
        $i = 0;
        foreach ($properties as $property){
            if(str_slug($property->title) === $propertySlug){
                $i++;
            }
        }
        if ($i > 0 ){
            $propertySlug = $propertySlug . '-' . $i;
        }
        return $propertySlug;
    }


}
