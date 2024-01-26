<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollectionRequest;
use App\Http\Requests\UpdateCollectionRequest;
use App\Models\Collection;
use App\Models\CollectionImage;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\File;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collections = Collection::with('thumbnail:collection_id,image')
        ->select('id','name','createdBy','discovery_year','origin')
        ->orderBy('created_at', 'desc')
        ->paginate(20);

        $collections->each(function($collection) {
            $thumbnail = $collection->thumbnail->image;
            unset($collection->thumbnail);
            $collection['thumbnail'] = $thumbnail;
        });

        return response()->json([
            'result' => $collections
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCollectionRequest $request)
    {
        $validatedData = $request->validated();
        unset($validatedData['images']);
        $collection = Collection::create($validatedData);

        foreach ($request->file("images") as $image) {
            $imageOriginalName = $image->getClientOriginalName();
            $imageUniqueName = Helpers::generateUniqueFileName($imageOriginalName);
            $image->storeAs("/images/collection",$imageUniqueName);
            $imagePath = env("APP_URL","http://localhost:8000") . "/storage/images/collection/" . $imageUniqueName;

            CollectionImage::create([
                "collection_id" => $collection->id,
                "image" => $imagePath
            ]);
        }

        return response()->json([
            "message" => "success",
            "collection" => $collection->getPreview()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        $_collection = $collection->getPreview();
        unset($_collection["thumbnail"]);
        return response()->json([
            'collection' => $_collection,
            'oldImages' => $collection->images()->select('id', 'image')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCollectionRequest $request, Collection $collection)
    {
        $validatedData = $request->validated();
        if($request->has("deletedImages")) {
            foreach ($request->input("deletedImages") as $id) {
                $image = CollectionImage::find($id);
                File::delete(public_path("/storage/images/collection/" . pathinfo($image->image)["basename"]));
                $image->delete();
            }
        }
        if($request->has("images")) {
            foreach ($request->file("images") as $image) {
                $imageOriginalName = $image->getClientOriginalName();
                $imageUniqueName = Helpers::generateUniqueFileName($imageOriginalName);
                $image->storeAs("/images/collection",$imageUniqueName);
                $imagePath = env("APP_URL","http://localhost:8000") . "/storage/images/collection/" . $imageUniqueName;

                CollectionImage::create([
                    "collection_id" => $collection->id,
                    "image" => $imagePath
                ]);
            }
        }

        unset($validatedData['images']);
        unset($validatedData['deletedImages']);

        $collection->update($validatedData);
        return response()->json([
            'message' => 'Success.',
            'collection' => $collection->getPreview()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();
        return response()->json([
            "message" => "Success"
        ]);
    }
}
