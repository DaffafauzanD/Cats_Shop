<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('cats014/head');
$this->load->view('cats014/navbar');
?>

<body>
    <div class="container mt-5">
        <h1>CATSHOP 014</h1>
        <h3>CATS LIST</h3>
    </div>
    <div class="container">
        <form action="" method="post" class="row mt-5">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Cat id</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="<?= $cat->id_014 ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Cat Name</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="<?= $cat->name_014 ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Cat Type</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="<?= $cat->type_014 ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Cat Price</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="<?= $cat->price_014 ?>">
                </div>
            </div>
            <div>
                <label class="col-sm-2 col-form-label">customer name</label>
                <input type="text" class="form-control" name="customer_name_014">
            </div>
            <div>
                <label class="col-12">customer address</label>
                <textarea type="text" class="form-control" name="customer_address_014"></textarea>
            </div>
            <div>
                <label class="col-sm-2 col-form-label">customer phone</label>
                <input type="number" class="form-control" name="customer_phone_014">
            </div>
            <div>
                <div class="mt-4">
                    <input type="submit" class="btn btn-primary" value="SALE" name="submit">
                    <a class="btn btn-primary" href="<?= site_url(
						'Cats014/index'
					) ?>">CANCEL</a>
                </div>

            </div>


        </form>
    </div>


</body>