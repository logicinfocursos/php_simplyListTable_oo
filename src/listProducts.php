<?php
include_once "src/listProductsItem.php";
function listProducts($products)
{ ?>

    <div style="height: 300px; overflow-y: scroll;">
        <table class="table table-hover m-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nome</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($products as $item) {

                    listProductsItem($item);

                } ?>
            </tbody>
        </table>
    </div>
<?php }
