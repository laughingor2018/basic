<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<table class="table table-bordered">
    <tr><th>Id</th><th>Account</th><th>Operations</th></tr>

    <?php foreach($accounts as $account) {
        echo "<tr><td>$account->id</td><td>$account->account</td><td><a href='".Url::toRoute(["account/delete","id" => $account->id])."'>Delete</a>/<a href='".Url::toRoute(["account/update","id" => $account->id])."'>Update</a></td></tr>";
    }?>
</table>
