<?php

namespace App\Modules\Blog\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Blog\Service\BlogService;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller {
    protected $blogService;

    public function __construct(BlogService $blogService) {
        $this->blogService = $blogService;
    }
    public function blog() {
        $jsonPath = 'data/news.json';

        // Check if the file exists
        if (!Storage::exists($jsonPath)) {
            abort(404, 'Team data not found.');
        }

        // Retrieve the file's contents
        $jsonContent = Storage::get($jsonPath);

        // Decode the JSON data into a PHP array
        $news = json_decode($jsonContent, true);

        // Pass the data to the 'team' view

        $datas = $this->blogService->getAll();
       // $datas['created_at'] = \Carbon\Carbon::parse($datas['created_at']);
       // dd($datas);
        return view('blog.blog',["datas"=>$datas,"news"=>$news]);
    }
    public function blog_direct($pagename){
       // dd($pagename);
        return view('blog.'.$pagename);
    }
      

    public function create() {
        return view('crm.createcountry');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'iso_code' => 'required|string',

        ]);

        $this->blogService->createCountry($data);
        return redirect()->route('crm.country');
    }

    public function show($id) {
        $data = $this->blogService->getById($id);
        return view('crm.showcountry', compact('data'));
    }

    public function edit($id) {
        $data = $this->blogService->getById($id);
        return view('crm.editcountry', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'iso_code' => 'required|string',
        ]);

        $this->blogService->update($id, $data);
        return redirect()->route('crm.country');
    }

    public function destroy($id) {
        $this->blogService->delete($id);
        return redirect()->route('crm.country');
    }
}
