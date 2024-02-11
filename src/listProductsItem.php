<?php

function listProductsItem($item)
{ ?>
    <tr>
        <th scope="row">
            <?= $item->id ?>
        </th>
        <td>
            <?= $item->name ?>
        </td>
    </tr>

<?php }