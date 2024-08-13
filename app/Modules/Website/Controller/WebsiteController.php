<?php

namespace App\Modules\Website\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Website\Service\WebsiteService;
use Illuminate\Support\Facades\Storage;

class WebsiteController extends Controller {
    protected $websiteService;

    public function __construct(WebsiteService $websiteService) {
        $this->websiteService = $websiteService;
    }

    public function index() {
      //  $users = $this->websiteService->getAll();
      //  return view('website.index', compact('users'));
        return view('website.index');
    
    }

    public function vision() {
        //  $users = $this->websiteService->getAll();
        //  return view('website.index', compact('users'));
          return view('website.vision');
      
      }
      public function team() {
                // Define the path to the JSON file
                $jsonPath = 'data/team.json';

                // Check if the file exists
                if (!Storage::exists($jsonPath)) {
                    abort(404, 'Team data not found.');
                }
        
                // Retrieve the file's contents
                $jsonContent = Storage::get($jsonPath);
        
                // Decode the JSON data into a PHP array
                $teamMembers = json_decode($jsonContent, true);
        
                // Pass the data to the 'team' view

          return view('website.team',['datas' => $teamMembers]);
      
      }

      
      public function story() {
        //  $users = $this->websiteService->getAll();
        //  return view('website.index', compact('users'));
          return view('website.story');
      
      }
      public function about() {
        //  $users = $this->websiteService->getAll();
        //  return view('website.index', compact('users'));
          return view('website.about');
      
      }
      public function news() {
        //  $users = $this->websiteService->getAll();
        //  return view('website.index', compact('users'));
          return view('website.news');
      
      }
      public function projects() {
        //  $users = $this->websiteService->getAll();
        //  return view('website.index', compact('users'));
          return view('website.projects');
      
      }
      public function services() {
        //  $users = $this->websiteService->getAll();
        //  return view('website.index', compact('users'));
          return view('website.services');
      
      }
      public function careers() {
        //  $users = $this->websiteService->getAll();
        //  return view('website.index', compact('users'));
          return view('website.careers');
      
      }


    public function create() {
        return view('website.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $this->websiteService->create($data);
        return redirect()->route('Website.index');
    }

    public function show($id) {
        $user = $this->websiteService->getById($id);
        return view('website.show', compact('user'));
    }

    public function edit($id) {
        $user = $this->websiteService->getById($id);
        return view('website.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if (empty($data['password'])) {
            unset($data['password']);
        }

        $this->websiteService->update($id, $data);
        return redirect()->route('Website.index');
    }

    public function destroy($id) {
        $this->websiteService->delete($id);
        return redirect()->route('Website.index');
    }
}
