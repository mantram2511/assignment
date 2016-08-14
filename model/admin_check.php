<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function isAdmin()
{
    if(!isset($_SESSION['role']) AND $_SESSION['role'] != "0")
    {
        echo 'Cheat?';
        die;
    }
}
?>
