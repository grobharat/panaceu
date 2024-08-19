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
      public function documents() {
        // Define the path to the JSON file
        $jsonPath = 'data/docs.json';

        // Check if the file exists
        if (!Storage::exists($jsonPath)) {
            abort(404, 'Documents data not found.');
        }

        // Retrieve the file's contents
        $jsonContent = Storage::get($jsonPath);

        // Decode the JSON data into a PHP array
        $data = json_decode($jsonContent, true);

        // Pass the data to the 'team' view

  return view('website.docs',['datas' => $data]);

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
        $jsonPath = 'data/news.json';
       if (!Storage::exists($jsonPath)) {
            abort(404, 'Documents data not found.');
        }
        $jsonContent = Storage::get($jsonPath);
        $data = json_decode($jsonContent, true);

          return view('website.news',['datas'=>$data]);
      
      }
      public function projects() {
        //  $users = $this->websiteService->getAll();
        //  return view('website.index', compact('users'));
          return view('website.projects');
      
      }
      public function services() {
          return view('website.services');
      
      }
      public function careers() {
          return view('website.careers');
      
      }
      public function contact() {
          return view('website.contact');
      
      }

      public function solutions_cbg() {
        return view('website.sol-cbg');
    }

      public function solutions_cbg_epc() {
          return view('website.sol-cbg-epc');
      }
      public function solutions_cbg_consultancy() {
          return view('website.sol-cbg-consultancy');
      }
      public function solutions_cbg_usage() {
          return view('website.sol-cbg-usage');
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
