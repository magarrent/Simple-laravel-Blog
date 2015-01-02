<?php

	class AdminController extends BaseController {

		// Check if user is in Session

		public function showLogin() {

			if (Auth::check()) {

				$user = Session::get('user_id');

				$posts = Post::orderBy('created_at', 'desc')->get();
				$categories = Category::all();

		        return View::make('supersecret.index')->with(array('user' => $user, 'posts' => $posts, 'categories' => $categories));
			}

			return View::make('supersecret.login');
		}

		// Check the login

		public function postLogin() {

			$userdata = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
			);

			if(Auth::attempt($userdata)) {
				$user = DB::table('users')->where('username',Input::get('username'))->first();
				Session::put('user_id', $user->name);

				$user_name = Session::get('user_id');
		        
		        $posts = Post::orderBy('created_at', 'desc')->get();
				$categories = Category::all();

		        return View::make('supersecret.index')->with(array('user' => $user_name, 'posts' => $posts, 'categories' => $categories));
		    } else {
				return View::make('supersecret.login')->with(array('alert' => 'Login incorrect'));
			}
		}

		// Logout the session

		public function logout() {	
			Session::flush();
			Auth::logout();
			return Redirect::to('/supersecret');
		}

		// View add post page

		public function addPost() {
			$user = Session::get('user_id');

			$posts = Post::orderBy('created_at', 'desc')->get();
			$categories = Category::all()->lists('category', 'id');
			return View::make('supersecret.add')->with(array('user' => $user, 'categories' => $categories));
		}

		// Create new post

		public function addPost_POST() {

			$post = new Post;

			$post->title = Input::get('title');
			$post->slug = Input::get('slug');
			$post->category = Input::get('category');
			$post->author = Input::get('author');
			$post->text = Input::get('text');

			$post->save();

			return Redirect::to('supersecret');
		}

		// Delete post

		public function deletePost($id) {
			$post = Post::find($id);

			$post->delete();

			return Redirect::to('/supersecret');
		}

		// Edit post view

		public function editPost($id) {
			$post = Post::find($id);
			$user = Session::get('user_id');

			$categories = Category::all()->lists('category', 'id');
			return View::make('supersecret.edit')->with(array('user' => $user, 'categories' => $categories, 'post' => $post));
		}

		// Edit post Form

		public function editPost_POST($id) {
			$post = Post::find($id);

			$post->title = Input::get('title');
			$post->slug = Input::get('slug');
			$post->category = Input::get('category');
			$post->author = Input::get('author');
			$post->text = Input::get('text');

			$post->save();

			return Redirect::to('/supersecret');
		}

		// Add category

		public function addCategory() {
			$category = Input::get('category');

			$insert = new Category;

			$insert->category = $category;

			$insert->save();

			return Redirect::to('/supersecret');
		}

		// Users view

		public function viewUsers() {
			$users = User::all();

			$name = Session::get('user_id');

			return View::make('supersecret.users')->with(array('users' => $users, 'name' => $name));
		}

		// Delete user

		public function deleteUser($id) {
			$user = User::find($id);

			$user->delete();

			Session::flush();
			Auth::logout();
			return Redirect::to('/supersecret');
		}

		// Add user view

		public function addUser() {
			$name = Session::get('user_id');

			return View::make('supersecret.add_user')->with(array('name' => $name));
		}

		// Add user

		public function addUser_POST() {
			$user = new User;

			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->name = Input::get('name');
			$user->email = Input::get('email');

			$user->save();

			return Redirect::to('/supersecret/users');
		}

	}

?>