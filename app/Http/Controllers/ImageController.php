<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Hashids\Hashids;
use Illuminate\Http\Response;

class ImageController extends Controller {

	protected $hash;

	public function __construct()
    {
        $this->hash = new Hashids('image', 6);
    }

	public function getImage($hash)
	{
		$id = $this->hash->decode($hash);
		
		if($model = Image::where('id', $id)->first()) {
			$mime = $model->mime;
			$image = $model->image;
            $name = $model->name;

            $data = array(
                'image' => $image,
                'mime'  => $mime,
                'hash'  => $hash,
                'name'  => $name
            );

			return view('image')->with($data);
		}

	}

	public function postImage()
	{
		$image = \Request::file('image');

        if (!$image) {
            return response(['message'  => 'No image provided'], 400);
        }
        if (!$image->isValid()) {
            return response(['message'  => 'The image was corrupt'], 400);
        }
        if (strtolower(substr($image->getMimeType(), 0, 5)) !== 'image') {
            return response(['message'  => 'Only images are allowed'], 415);
        }

        $name = substr($image->getClientOriginalName(), 0, 225);
        $mime = $image->getMimeType();
        $image = file_get_contents($image->getPathname());
		$hash = sha1($image . time());
		$model = Image::where('hash', $hash)->first();


		if (!$model) {
            $model = Image::create(['hash' => $hash, 'image' => $image, 'mime' => $mime, 'name' => $name]);
        }

        if ($model) {
            $this->url = env('SITE_URL') . "/" . $this->hash->encode($model->id);
        }

        if (\Request::input('sharex')) {
            return response($this->url, 200)->header('Content-Type', 'text/plain');
        }
        return response(['message'  => 'Image uploaded successfully', 'url' => $this->url]);
	}

}