<?php
  namespace Modules\Admin\Controllers;
  use CodeIgniter\Controller;

  class Admin extends Controller {
    public function index() {
      echo "Admin";
    }

    public function user_management() {
      return view('\Modules\Admin\Views\user_management');
    }

    public function movie_management() {
      $mode = $this->request->getGet('mode');
      if (strcmp($mode, 'create') == 0) {
        return view('\Modules\Admin\Views\movie_management');
      } elseif (strcmp($mode, 'update') == 0) {
        $movie_id = $this->request->getGet('movie_id');
        if (!empty($movie_id) && is_numeric($movie_id)) {
          $data['movie_id'] = $movie_id;
          return view('\Modules\Admin\Views\movie_management', $data);
        } else { return redirect()->route('admin'); }
      } else { return redirect()->route('admin'); }
    }
  }
?>