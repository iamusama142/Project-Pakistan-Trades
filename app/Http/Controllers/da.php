<?php
$pid = $list->purchasername;

$posts = DB::table('addaccounts')
    ->where('id', $pid)
    ->get();

?>
{{ $posts[0]->accountname }}
</td>
<td>
<?php
$sellerid = $list->sellername;

$post = DB::table('addaccounts')
    ->where('id', $sellerid)
    ->get();

?>
{{ $post[0]->accountname }}
