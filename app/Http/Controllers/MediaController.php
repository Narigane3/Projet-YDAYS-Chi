<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use \Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function galery(): Application|Factory|View
    {
        $medias = Media::where("status", "=", 1)->get()->toArray();
        return view("medias.galery", ["medias" => $medias]);
    }

    /**
     * @param int $mediaId
     * @return Application|Factory|View
     */
    public function findOneMedia(int $mediaId): Application|Factory|View
    {
        $media = Media::find($mediaId);
        return view("medias.modifyOneMedia", ["media" => $media]);
    }

    /**
     * @param Request $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function modifyOneMedia(Request $request)
    {
        $request->validate([
            "modifyMediaTitle" => "required|max:140",
            "modifyMediaAlt" => "required|max:255"
        ]);

        $media = Media::find($request->input("mediaId"));
        $media->update([
            "title" => $request->input("modifyMediaTitle"),
            "alt" => $request->input("modifyMediaAlt")
        ]);

        return redirect("/galery");
    }

    /**
     * @param Request $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createMedia(Request $request)
    {
        $files = $_FILES["medias"];
        $newPath = "/medias/" . $files["name"];
        File::move($files["tmp_name"], public_path() . $newPath);

        Media::create([
            "path" => $newPath,
            "title" => $files["name"],
            "alt" => $request->input("createAlt"),
            "size" => $files["size"],
            "mime_type" => $files["type"],
            "status" => 1
        ]);

        return redirect("/galery");
    }

    public function deleteMedia(int $mediaId)
    {
        $media = Media::find($mediaId);
        $media->update([
            "status" => 0
        ]);

        return redirect("/galery");
    }
}
