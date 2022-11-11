<?php

    class Pages extends Controller {
        // contains the new Model() for the specific model
        private $postModel;

        public function __construct() {
            // Load correct Model, call Controller->model(), whill resullts in new Post()

        }

        // Index Page
        public function index() {
            // Data to send to index
            $data = [
                'title' => 'Home'
            ];
            
            // Load index to client
            $this->view('pages/index', $data);
        }
        
        // About page
        public function about($id = null) {
            // Data to send to about
            $data = [
                'title' => 'About Us'
            ];
            
            // Load about page
            $this->view('pages/about', $data);
        }

    }