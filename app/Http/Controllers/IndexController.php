<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;

use App\Article;

class IndexController extends Controller
{
    //
    
    
    protected $message;
    protected $header;
    
    
    public function _construct(){
    	
    	
    	$this->header = 'Hello World!!!';
		$this->message = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';
		
		
    }
    
    
    public function index() {
    	
		
		$articles = Article::select(['id','Title','Description'])->get();
		
		//dump($articles);
		
		return view('page')->with(['message' => $this->message,
									'header' => $this->header,
									'articles' => $articles
									]);
		
	}
    
    
    public function show($id) {
    	
    	//$article = Article::find($id);
    	
    	//SELECT 'id','title','text'	WHERE id = $id
    	$article = Article::find($id);
    	
    	//dump($article);
    	
    	return view('article-content')->with(['message' => $this->message,
									'header' => $this->header,
									'article' => $article
									]);
	}	
	
	public function add() {
		return view('add-content')->with(['message' => $this->message,
									'header' => $this->header,
									]);	
	}
	
	public function store(Request $request) {
		
		$this->validate($request, [
		
			'Title' => 'required|max:255',
			'text' => 'required'
		
		]);
		
		$data = $request->all();
		
		$article = new Article;
		$article->fill($data);
		
		$article->save();
		
		return redirect('/');
		
		///
		///
	}
	
}
