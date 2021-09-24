<?php

namespace App\Http\Controllers;
use App\Models\author;
use App\Models\book;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    // 1)Two types of user , with different logiin and access 
    // 2) Github
    // 3) Custom login logout
    // 3) factory,  seeder 
    // 4) storage 

    public function index(){
        return view('pages/index');
    }

    public function logout () {
        
    auth()->logout();
       
        return redirect('/');
    }

    public function addproject(){

        return view('pages/add_project');
    }

    public function myplan(){
        return view('pages/my_plan');
    }
    public function report(){
        return view('pages/report');
    }
    public function testerreport(){
        return view('pages/tester_report');
    }

    public function authors_list(){
        $authors= Author::all();

        return $authors;
    }
    public function author_show(Author $author ){
       
        return $author;
    }
    public function booksapi(){
        $books= book::all();
        return $books;
    }
    public function bookapi($id){
        $book= book::find($id);
        return view('api/bookapi',['book'=>$book]);
    }
    // public function createauthor(Request $request){
    //     return author::create($request->all());
    // }
    // public function createproduct(Request $request){
    //     return author::create($request->all());
    // }


    // public function getPost(){
    //      $student= http::get('https://jsonplaceholder.typicode.com/posts');
    //     return view('welcome',['data'=>$student->collect()]);
    // }

    
}
