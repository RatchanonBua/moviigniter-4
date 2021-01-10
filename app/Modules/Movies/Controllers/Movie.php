<?php
  namespace Modules\Movies\Controllers;
  use CodeIgniter\Controller;

  class Movie extends Controller {
    public function index() {
      return view('\Modules\Movies\Views\index');
    }

    public function review() {
      $movie_id = $this->request->getGet('movie_id');
      if (!empty($movie_id) && is_numeric($movie_id)) {
        $data['movie_id'] = $movie_id;
        return view('\Modules\Movies\Views\review', $data);
      } else {
        return redirect()->route('movie');;
      }
    }
  }
?>