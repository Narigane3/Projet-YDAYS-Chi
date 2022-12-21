<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Contracts\View\View;

class MediaController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function galery(): Application|Factory|View
    {
        $medias = Media::all()->toArray();
        return view("medias.galery", ["medias" => $medias]);
    }

    /**
     * @param int $mediaId
     * @return Application|Factory|View
     */
    public function modifyOneMedia(int $mediaId): Application|Factory|View
    {
        $media = Media::find($mediaId);
        return view("medias.modifyOneMedia", ["media" => $media]);
    }
}
