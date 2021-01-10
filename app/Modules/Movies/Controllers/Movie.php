<?php
  namespace Modules\Movies\Controllers;
  use CodeIgniter\Controller;

  class Movie extends Controller {
    public function index() {
      return view('\Modules\Movies\Views\index');
    }
  }
?>