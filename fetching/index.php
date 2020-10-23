<?php
include('lib.php');
$html = file_get_html('https://www.bhinneka.com/aspx/products/prt_server_hp_proliant.aspx');
$nama = $html->find('.prod-itm-fullname');
$harga = $html->find('.prod-itm-price');
?>
<table>
<tr>
<th>Nama Produk</th>
<th>Harga</th>
</tr>
<td>
<?php
foreach ($nama as $key => $value) { 
echo $value->plaintext;
echo "</br>";}
?>
</td>
<td>
<?php
foreach ($harga as $key => $value) { 
echo $value->plaintext;
echo "</br>";}
?>
</td>
