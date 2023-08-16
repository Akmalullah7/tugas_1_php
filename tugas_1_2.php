<!DOCTYPE html>
<html>
<head>
   
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<?php
    $makanan = "Cireng";
    $m2 = "Es Duren";
    $m3 = "Es Milo";
    $m4 = "Es Teh";
    $m5 = "Piscok";
    $h1 = 1000;
    $h2 = 15000;
    $h3 = 20000;
    $h4 = 5000;
    $h5 = 4000;
 echo("<h1>Daftar Menu</h1>

<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Menu</th>
      <th>Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>$makanan</td>
      <td>Rp $h1</td>
    </tr>
    <tr>
      <td>2</td>
      <td>$m2</td>
      <td>Rp $h2</td>
    </tr>
    <tr>
      <td>3</td>
      <td>$m3</td>
      <td>Rp $h3</td>
    </tr>
    <tr>
      <td>4</td>
      <td>$m4</td>
      <td>Rp $h4</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td>5</td>
      <td>$m5</td>
      <td>Rp $h5</td>
    </tr>
  </tfoot>
</table>

</body>
</html>");
?>