<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<?php echo "<div><a href=".Url::toRoute(["account/create"]).">添加</a></div>";?>

<table class="table table-bordered">
    <tr><th>Id</th><th>Account</th><th>Operations</th></tr>

    <?php foreach($accounts as $account) {
        echo "<tr><td>$account->id</td><td>$account->account</td><td><a href='".Url::toRoute(["account/delete","id" => $account->id])."'>Delete</a>/<a href='".Url::toRoute(["account/read","id" => $account->id])."'>Update</a></td></tr>";
    }?>
</table>

<?php echo LinkPager::widget(['pagination' => $pagination]);?>
