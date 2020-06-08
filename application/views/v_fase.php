<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <body>
    <div class="container">
    <h2> Fase </h2>
    <div class="card-body">
        <?php echo form_open('fase') ?>
        <h4> Fase 1 </h4>
        <label for="title"><?php echo $data->$tugas ?></label>
        <input type="input" name="fase1" /> 
        <label for="title"><?php echo $data->tugas?></label>
        
}