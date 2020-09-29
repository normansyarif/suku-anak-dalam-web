<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Mitra;
use App\Galeri;
use App\Kegiatan;
use App\Editorial;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function homeSettings() {
    	$berandaImage = $this->getData('beranda_image');
    	$berandaNarasi = $this->getData('beranda_narasi');
    	$kegiatan = $this->getData('kegiatan');
    	$mitra = $this->getData('mitra');
    	$galeri = $this->getData('galeri');
    	$editorial = $this->getData('editorial');
    	$footer = $this->getFooter();
    	return view('pages.admin.home')
    		->with('berandaImage', $berandaImage)
    		->with('berandaNarasi', $berandaNarasi)
    		->with('kegiatan', $kegiatan)
    		->with('mitra', $mitra)
    		->with('galeri', $galeri)
    		->with('editorial', $editorial)
    		->with('footer', $footer);
    }

    public function profilSettings() {
        $narasi = $this->getData('profil_narasi');
        return view('pages.admin.profil')
            ->with('narasi', $narasi);
    }

    public function sejarahSettings() {
        $narasi = $this->getData('sejarah_narasi');
        return view('pages.admin.sejarah')
            ->with('narasi', $narasi);
    }

    public function kegiatanIndex() {
        $data = Kegiatan::orderBy('created_at', 'desc')->get();
        return view('pages.admin.kegiatan-index')->with('data', $data);
    }

    public function kegiatanAdd() {
        return view('pages.admin.kegiatan-add');
    }

    public function kegiatanEdit($id) {
        $data = Kegiatan::find($id);
        return view('pages.admin.kegiatan-edit')->with('data', $data);
    }

    public function editorialIndex() {
        $data = Editorial::orderBy('created_at', 'desc')->get();
        return view('pages.admin.editorial-index')->with('data', $data);
    }

    public function editorialAdd() {
        return view('pages.admin.editorial-add');
    }

    public function editorialEdit($id) {
        $data = Editorial::find($id);
        return view('pages.admin.editorial-edit')->with('data', $data);
    }

    public function mitraIndex() {
        $data = Mitra::orderBy('created_at', 'desc')->get();
        return view('pages.admin.mitra-index')->with('data', $data);
    }

    public function mitraAdd() {
        return view('pages.admin.mitra-add');
    }

    public function mitraEdit($id) {
        $data = Mitra::find($id);
        return view('pages.admin.mitra-edit')->with('data', $data);
    }

    public function galeriIndex() {
        $data = Galeri::orderBy('created_at', 'desc')->get();
        return view('pages.admin.galeri-index')->with('data', $data);
    }


    // POST
    public function berandaUpdate(Request $req) {
        if($req->hasFile('beranda_image')) {
            $originName = $req->file('beranda_image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('beranda_image')->getClientOriginalExtension();

            if(in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $fileName = $fileName.'_'.time().'.'.$extension;
                $req->file('beranda_image')->move(public_path('uploads/beranda'), $fileName);

                $data = Data::where('key', 'beranda_image')->first();
                $data->value = 'uploads/beranda/' . $fileName;
                if(!$data->save()) {
                    return redirect(route('admin.home'))->with('error', 'Gagal menyimpan gambar');
                }
            }else{
                return redirect(route('admin.home'))->with('error', 'Tipe file tidak didukung');
            }
        }

        $data = Data::where('key', 'beranda_narasi')->first();
        $data->value = $req->input('narasi');
        if($data->save()) {
            return redirect(route('admin.home'))->with('success', 'Berhasil mengubah narasi beranda');
        }else{
            return redirect(route('admin.home'))->with('error', 'Gagal merubah narasi beranda');
        }
        
    }

    public function berandaMenuUpdate(Request $req) {
        $data = Data::where('key', 'kegiatan')->first();
        $data->value = $req->input('kegiatan');

        if(!$data->save()) {
            return redirect(route('admin.home'))->with('error', 'Gagal merubah data beranda');
        }

        $data = Data::where('key', 'editorial')->first();
        $data->value = $req->input('editorial');

        if(!$data->save()) {
            return redirect(route('admin.home'))->with('error', 'Gagal merubah data beranda');
        }

        $data = Data::where('key', 'galeri')->first();
        $data->value = $req->input('galeri');

        if(!$data->save()) {
            return redirect(route('admin.home'))->with('error', 'Gagal merubah data beranda');
        }

        $data = Data::where('key', 'mitra')->first();
        $data->value = $req->input('mitra');

        if(!$data->save()) {
            return redirect(route('admin.home'))->with('error', 'Gagal merubah data beranda');
        }

        return redirect(route('admin.home'))->with('success', 'Berhasil mengubah data');
    }

    public function footerUpdate(Request $req) {
        $data = Data::where('key', 'teks_footer')->first();
        $data->value = $req->input('teks-footer');

        if(!$data->save()) {
            return redirect(route('admin.home'))->with('error', 'Gagal merubah data footer');
        }

        $data = Data::where('key', 'alamat')->first();
        $data->value = $req->input('alamat');

        if(!$data->save()) {
            return redirect(route('admin.home'))->with('error', 'Gagal merubah data footer');
        }

        $data = Data::where('key', 'telp')->first();
        $data->value = $req->input('telp');

        if(!$data->save()) {
            return redirect(route('admin.home'))->with('error', 'Gagal merubah data footer');
        }

        $data = Data::where('key', 'email')->first();
        $data->value = $req->input('email');

        if(!$data->save()) {
            return redirect(route('admin.home'))->with('error', 'Gagal merubah data footer');
        }

        return redirect(route('admin.home'))->with('success', 'Berhasil mengubah footer');
    }

    public function profilUpdate(Request $req) {
        $data = Data::where('key', 'profil_narasi')->first();
        $data->value = $req->input('narasi');

        if($data->save()) {
            return redirect(route('admin.profil'))->with('success', 'Berhasil mengubah data');
        }else{
            return redirect(route('admin.profil'))->with('error', 'Gagal mengubah data');
        }
    }

    public function sejarahUpdate(Request $req) {
        $data = Data::where('key', 'sejarah_narasi')->first();
        $data->value = $req->input('narasi');

        if($data->save()) {
            return redirect(route('admin.sejarah'))->with('success', 'Berhasil mengubah data');
        }else{
            return redirect(route('admin.sejarah'))->with('error', 'Gagal mengubah data');
        }
    }



    public function kegiatanInsert(Request $req) {
        if($req->hasFile('featured-image')) {
            $originName = $req->file('featured-image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('featured-image')->getClientOriginalExtension();

            if(in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $fileName = $fileName.'_'.time().'.'.$extension;
                $req->file('featured-image')->move(public_path('uploads/kegiatan'), $fileName);

                $data = new Kegiatan;
                $data->foto = 'uploads/kegiatan/' . $fileName;
                $data->judul = $req->input('judul');
                $data->konten = $req->input('narasi');
                $data->published = 1;
                if($data->save()) {
                    return redirect(route('admin.kegiatan'))->with('success', 'Berhasil menambah data');
                }else{
                    return redirect(route('admin.kegiatan'))->with('error', 'Gagal menambah data');
                }
            }else{
                return redirect(route('admin.kegiatan'))->with('error', 'Tipe file tidak didukung');
            }
        }
    }

    public function kegiatanPublish(Request $req, $id) {
        $data = Kegiatan::find($id);
        $data->published = $req->input('type');
        if($data->save()) {
            return redirect(route('admin.kegiatan'))->with('success', 'Berhasil mengubah data');
        }else{
            return redirect(route('admin.kegiatan'))->with('success', 'Gagal mengubah data');
        }
    }

    public function kegiatanDelete($id) {
        $data = Kegiatan::find($id);
        if($data->delete()) {
            return redirect(route('admin.kegiatan'))->with('success', 'Berhasil menghapus data');
        }else{
            return redirect(route('admin.kegiatan'))->with('error', 'Gagal menghapus data');
        }
    }

    public function kegiatanUpdate(Request $req, $id) {
        $filenametostore = null;

        if($req->hasFile('featured-image')) {
            $originName = $req->file('featured-image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('featured-image')->getClientOriginalExtension();

            if(in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $fileName = $fileName.'_'.time().'.'.$extension;
                $req->file('featured-image')->move(public_path('uploads/kegiatan'), $fileName);

                $filenametostore = 'uploads/kegiatan/' . $fileName;
            }else{
                return redirect(route('admin.kegiatan'))->with('error', 'Tipe file tidak didukung');
            }
        }

        $data = Kegiatan::find($id);
        $data->judul = $req->input('judul');
        $data->konten = $req->input('narasi');

        if($req->hasFile('featured-image') && $filenametostore != null) {
            $data->foto = $filenametostore;
        }

        if($data->save()) {
            return redirect(route('admin.kegiatan'))->with('success', 'Berhasil mengubah data');
        }else{
            return redirect(route('admin.kegiatan'))->with('error', 'Gagal mengubah data');
        }
    }




    public function editorialInsert(Request $req) {
        if($req->hasFile('featured-image')) {
            $originName = $req->file('featured-image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('featured-image')->getClientOriginalExtension();

            if(in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $fileName = $fileName.'_'.time().'.'.$extension;
                $req->file('featured-image')->move(public_path('uploads/editorial'), $fileName);

                $data = new Editorial;
                $data->foto = 'uploads/editorial/' . $fileName;
                $data->judul = $req->input('judul');
                $data->konten = $req->input('narasi');
                $data->published = 1;
                if($data->save()) {
                    return redirect(route('admin.editorial'))->with('success', 'Berhasil menambah data');
                }else{
                    return redirect(route('admin.editorial'))->with('error', 'Gagal menambah data');
                }
            }else{
                return redirect(route('admin.editorial'))->with('error', 'Tipe file tidak didukung');
            }
        }
    }

    public function editorialPublish(Request $req, $id) {
        $data = Editorial::find($id);
        $data->published = $req->input('type');
        if($data->save()) {
            return redirect(route('admin.editorial'))->with('success', 'Berhasil mengubah data');
        }else{
            return redirect(route('admin.editorial'))->with('success', 'Gagal mengubah data');
        }
    }

    public function editorialDelete($id) {
        $data = Editorial::find($id);
        if($data->delete()) {
            return redirect(route('admin.editorial'))->with('success', 'Berhasil menghapus data');
        }else{
            return redirect(route('admin.editorial'))->with('error', 'Gagal menghapus data');
        }
    }

    public function editorialUpdate(Request $req, $id) {
        $filenametostore = null;

        if($req->hasFile('featured-image')) {
            $originName = $req->file('featured-image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('featured-image')->getClientOriginalExtension();

            if(in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $fileName = $fileName.'_'.time().'.'.$extension;
                $req->file('featured-image')->move(public_path('uploads/editorial'), $fileName);

                $filenametostore = 'uploads/editorial/' . $fileName;
            }else{
                return redirect(route('admin.editorial'))->with('error', 'Tipe file tidak didukung');
            }
        }

        $data = Editorial::find($id);
        $data->judul = $req->input('judul');
        $data->konten = $req->input('narasi');

        if($req->hasFile('featured-image') && $filenametostore != null) {
            $data->foto = $filenametostore;
        }

        if($data->save()) {
            return redirect(route('admin.editorial'))->with('success', 'Berhasil mengubah data');
        }else{
            return redirect(route('admin.editorial'))->with('error', 'Gagal mengubah data');
        }
    }




    public function mitraInsert(Request $req) {
        if($req->hasFile('featured-image')) {
            $originName = $req->file('featured-image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('featured-image')->getClientOriginalExtension();

            if(in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $fileName = $fileName.'_'.time().'.'.$extension;
                $req->file('featured-image')->move(public_path('uploads/mitra'), $fileName);

                $data = new Mitra;
                $data->foto = 'uploads/mitra/' . $fileName;
                $data->judul = $req->input('judul');
                $data->konten = $req->input('narasi');
                $data->published = 1;
                if($data->save()) {
                    return redirect(route('admin.mitra'))->with('success', 'Berhasil menambah data');
                }else{
                    return redirect(route('admin.mitra'))->with('error', 'Gagal menambah data');
                }
            }else{
                return redirect(route('admin.mitra'))->with('error', 'Tipe file tidak didukung');
            }
        }
    }

    public function mitraPublish(Request $req, $id) {
        $data = Mitra::find($id);
        $data->published = $req->input('type');
        if($data->save()) {
            return redirect(route('admin.mitra'))->with('success', 'Berhasil mengubah data');
        }else{
            return redirect(route('admin.mitra'))->with('success', 'Gagal mengubah data');
        }
    }

    public function mitraDelete($id) {
        $data = Mitra::find($id);
        if($data->delete()) {
            return redirect(route('admin.mitra'))->with('success', 'Berhasil menghapus data');
        }else{
            return redirect(route('admin.mitra'))->with('error', 'Gagal menghapus data');
        }
    }

    public function mitraUpdate(Request $req, $id) {
        $filenametostore = null;

        if($req->hasFile('featured-image')) {
            $originName = $req->file('featured-image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('featured-image')->getClientOriginalExtension();

            if(in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $fileName = $fileName.'_'.time().'.'.$extension;
                $req->file('featured-image')->move(public_path('uploads/mitra'), $fileName);

                $filenametostore = 'uploads/mitra/' . $fileName;
            }else{
                return redirect(route('admin.mitra'))->with('error', 'Tipe file tidak didukung');
            }
        }

        $data = Mitra::find($id);
        $data->judul = $req->input('judul');
        $data->konten = $req->input('narasi');

        if($req->hasFile('featured-image') && $filenametostore != null) {
            $data->foto = $filenametostore;
        }

        if($data->save()) {
            return redirect(route('admin.mitra'))->with('success', 'Berhasil mengubah data');
        }else{
            return redirect(route('admin.mitra'))->with('error', 'Gagal mengubah data');
        }
    }

    public function galeriUpdate(Request $req) {
        $id = $req->input('foto-id');
        $data = Galeri::find($id);
        $data->judul = $req->input('caption');
        if($data->save()) {
            return redirect(route('admin.galeri'))->with('success', 'Berhasil mengubah data');
        }else{
            return redirect(route('admin.galeri'))->with('error', 'Gagal mengubah data');
        }
    }

    public function galeriDelete($id) {
        $data = Galeri::find($id);
        if($data->delete()) {
            return redirect(route('admin.galeri'))->with('success', 'Berhasil menghapus data');
        }else{
            return redirect(route('admin.galeri'))->with('error', 'Gagal menghapus data');
        }
    }

    public function galeriInsert(Request $req) {
        if($req->hasFile('foto')) {
            $originName = $req->file('foto')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('foto')->getClientOriginalExtension();

            if(in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $fileName = $fileName.'_'.time().'.'.$extension;
                $req->file('foto')->move(public_path('uploads/galeri'), $fileName);

                $data = new Galeri;
                $data->judul = $req->input('caption');
                $data->foto = 'uploads/galeri/' . $fileName;
                if($data->save()) {
                    return redirect(route('admin.galeri'))->with('success', 'Berhasil menambah data');
                }else{
                    return redirect(route('admin.galari'))->with('error', 'Gagal menambah data');
                }
            }else{
                return redirect(route('admin.galeri'))->with('error', 'Tipe file tidak didukung');
            }
        }
    }
}
