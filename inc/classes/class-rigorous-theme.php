<?php
/**
 * Bootstraps the theme
 * 
 * @package Rigorous
 */

 namespace RIGOROUS_THEME\Inc;

 use RIGOROUS_THEME\Inc\Traits\Singleton;

 class RIGOROUS_THEME {
     use Singleton;

     protected function __construct() {
        $this->set_hooks();
     }

     protected function set_hooks() {

     }
 }