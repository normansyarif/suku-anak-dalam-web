<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Editorial;
use App\Kegiatan;
use App\Mitra;
use App\Galeri;

class GuestController extends Controller
{
    private function getData($key) {
        return Data::where('key', $key)->first()->value;
    }

    private function getFooter() {
        $arr = [];
        $arr['teksFooter'] = $this->getData('teks_footer');
        $arr['alamat'] = $this->getData('alamat');
        $arr['telp'] = $this->getData('telp');
        $arr['email'] = $this->getData('email');
        return $arr;
    }

    public function home() {
    	$narasi = $this->getData('beranda_narasi');
        $image = $this->getData('beranda_image');
    	$kegiatan = $this->getData('kegiatan');
    	$editorial = $this->getData('editorial');
    	$galeri = $this->getData('galeri');
    	$mitra = $this->getData('mitra');
        $footer = $this->getFooter();
    	return view('pages.home')
    		->with('narasi', $narasi)
    		->with('kegiatan', $kegiatan)
    		->with('editorial', $editorial)
    		->with('galeri', $galeri)
    		->with('mitra', $mitra)
            ->with('image', $image)
            ->with('footer', $footer);
    }

    public function kegiatan() {
        $footer = $this->getFooter();
    	$data = Kegiatan::where('published', 1)->orderBy('created_at', 'desc')->get();
    	return view('pages.kegiatan')
            ->with('data', $data)
            ->with('footer', $footer);
    }

    public function kegiatanSearch(Request $req) {
        $q = $req->input('q');
        $footer = $this->getFooter();
        $data = Kegiatan::where(function($query) use ($q) {
            $query->where('judul', 'like', '%' . $q . '%')
                ->orWhere('konten', 'like', '%' . $q . '%');
        })->where('published', 1)
          ->orderBy('created_at', 'desc')
          ->get();
        return view('pages.kegiatan')
            ->with('data', $data)
            ->with('footer', $footer);
    }

    public function editorial() {
    	$blogs = Editorial::where('published', 1)->orderBy('created_at', 'desc')->get();
        $footer = $this->getFooter();
    	return view('pages.editorial')
            ->with('blogs', $blogs)
            ->with('footer', $footer);
    }

    public function editorialSearch(Request $req) {
        $q = $req->input('q');
        $blogs = Editorial::where(function($query) use ($q) {
            $query->where('judul', 'like', '%' . $q . '%')
                ->orWhere('konten', 'like', '%' . $q . '%');
        })->where('published', 1)
          ->orderBy('created_at', 'desc')
          ->get();
        $footer = $this->getFooter();
        return view('pages.editorial')
            ->with('blogs', $blogs)
            ->with('footer', $footer);
    }

    public function editorialView($id) {
        $data = Editorial::find($id);
        $entries = Editorial::where('published', 1)->orderBy('created_at', 'desc')->get();
        $footer = $this->getFooter();
        return view('pages.editorial-view')
            ->with('data', $data)
            ->with('footer', $footer)
            ->with('entries', $entries);
    }

    public function kegiatanView($id) {
        $data = Kegiatan::find($id);
        $footer = $this->getFooter();
        $entries = Kegiatan::where('published', 1)->orderBy('created_at', 'desc')->get();
        return view('pages.kegiatan-view')
            ->with('data', $data)
            ->with('footer', $footer)
            ->with('entries', $entries);
    }

    public function mitraView($id) {
        $data = Mitra::find($id);
        $footer = $this->getFooter();
        $entries = Mitra::where('published', 1)->orderBy('created_at', 'desc')->get();
        return view('pages.mitra-view')
            ->with('data', $data)
            ->with('footer', $footer)
            ->with('entries', $entries);
    }

    public function galeri() {
        $fotos = Galeri::orderBy('created_at', 'desc')->get();
        $footer = $this->getFooter();
    	return view('pages.galeri')
            ->with('fotos', $fotos)
            ->with('footer', $footer);	
    }

    public function mitra() {
    	$data = Mitra::where('published', 1)->orderBy('created_at', 'desc')->get();
        $footer = $this->getFooter();
    	return view('pages.mitra')
            ->with('data', $data)
            ->with('footer', $footer);
    }

    public function mitraSearch(Request $req) {
        $q = $req->input('q');
        $data = Mitra::where(function($query) use ($q) {
            $query->where('judul', 'like', '%' . $q . '%')
                ->orWhere('konten', 'like', '%' . $q . '%');
        })->where('published', 1)
          ->orderBy('created_at', 'desc')
          ->get();
        $footer = $this->getFooter();
        return view('pages.mitra')
            ->with('data', $data)
            ->with('footer', $footer);
    }

    public function profil() {
    	$profil = $this->getData('profil_narasi');
        $footer = $this->getFooter();
    	return view('pages.profil')
            ->with('profil', $profil)
            ->with('footer', $footer);
    }

    public function sejarah() {
    	$sejarah = $this->getData('sejarah_narasi');
        $footer = $this->getFooter();
    	return view('pages.sejarah')
            ->with('sejarah', $sejarah)
            ->with('footer', $footer);
    }

    public function akses() {
        $footer = $this->getFooter();
    	return view('pages.akses')
        ->with('footer', $footer);
    }

    public function uploadCk(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();

            if(in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $fileName = $fileName.'_'.time().'.'.$extension;
        
                $request->file('upload')->move(public_path('uploads/ckeditor_images'), $fileName);
       
                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('uploads/ckeditor_images/'.$fileName); 
                $msg = 'Image uploaded successfully'; 
                $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                   
                @header('Content-type: text/html; charset=utf-8'); 
                echo $response;
            }
        }
    }
}
