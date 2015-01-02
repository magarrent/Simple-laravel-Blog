<?php

	class BlogController extends BaseController {

		// Display all posts

		public function allPosts() {
			$posts = Post::orderBy('created_at','desc')->get();
			$categories = Category::orderBy('category', 'asc')->get();

			return View::make('blog.index', array('posts' => $posts, 'categories' => $categories));
		}

		// Display single post

		public function singlePost($slug) {
			$post = DB::table('posts')->where('slug', $slug)->first();

			$category = DB::table('categories')->where('id', $post->category)->first();

			return View::make('blog.post', array('post' => $post, 'category' => $category));
		}

		// Send contact to email

		public function sendContact() {
			$input = Input::all();

			Mail::send('emails.contact',$input, function($text) use ($input) {
		    	$text->to('marc@magarrent.com')->subject('Message from laravel.magarrent.com!');
			}

		    return View::make('blog.contact', array('alert' => 'Your message have been send.'));
		}

		// View all categories

		public function viewCategories($category) {
			$cat = DB::table('categories')->where('category', $category)->first();

			$posts = DB::table('posts')->where('category', $cat->id)->get();

			return View::make('blog.categories', array('posts' => $posts, 'category' => $category));
		}

	}

?>