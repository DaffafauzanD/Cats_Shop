<?php

defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('cats014/head');
$this->load->view('cats014/navbar');
?>

<div class="container-xxl mt-5">

    <body>
        <h1>CATSHOP 014</h1>
        <h3>CATEGORIES LIST</h3>
        <a class="btn btn-primary" href="<?= base_url() ?>">Home</a>
        <a class="btn btn-primary" href="<?= site_url(
            'categories014/add'
        ) ?>">Add new categories</a>
        <?= $this->session->flashdata('msg') ?>
        <hr>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
                <?php
                $i = 1;
                foreach ($categories as $cate) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $cate->cate_name_014 ?></td>
                    <td><?= $cate->description_014 ?></td>
                    <td class="text-start"><a href="<?= site_url(
                        'categories014/edit/' . $cate->id_categories_014
                    ) ?>" class="btn btn-primary">Edit</a> </td>
                    <td class="text-end"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Delete
                        </button></td>
                </tr><?php }
                ?>
            </table>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <a href="<?= site_url(
                            'categories014/delete/' . $cate->id_categories_014
                        ) ?>" class="btn btn-danger">Yes!</a>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</div>