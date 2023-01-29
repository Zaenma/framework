<?php

namespace src\Controllers;

use Db\Db;
use src\Models\Order;
use src\Models\User;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controller {

    private $loader;
    protected $twig;
    protected $db;

    public function __construct(Db $db) {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->loader = new FilesystemLoader(ROOT . "/templates");
        $this->twig = new Environment($this->loader);
        $this->db = $db;
    }
    
}