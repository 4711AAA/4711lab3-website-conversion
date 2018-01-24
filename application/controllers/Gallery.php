<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Application
{

    /**
     * Gallery page for this controller
     *
     * So any other public methods not prefixed with an underscore will
     * map to /gallery/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->data['pagebody'] = 'gallery';
        $this->render();
    }

}
