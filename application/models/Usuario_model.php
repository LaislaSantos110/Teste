<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario_model extends MY_Model {
  
    function __construct() {
        parent:: __construct();
        $this->table = 'RESPONSAVEL_ANIMAL';
    }
}