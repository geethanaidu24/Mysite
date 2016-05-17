<?php

class User extends Application

{

    public function __construct()

    {

        parent::__construct();

    }

    public function index()

    {

        if(logged_in())

        {

            $this->ag_auth->view('user/dashboard_view');

        }

        else

        {

            $this->ag_auth->view('login');

        }

    }

}