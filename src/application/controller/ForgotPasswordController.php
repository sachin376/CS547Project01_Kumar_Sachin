<?php
namespace AztecGameStudios\application\controller;

use AztecGameStudios\application\controller\BaseController;

// require_once __DIR__ . "/../../application/controller/BaseController.php";

class ForgotPasswordController extends BaseController
{
    public function __construct()
    {
    }

    public function load()
    {
        $viewData = "";
        parent::createView("forgotpass", $viewData);
    }
}
