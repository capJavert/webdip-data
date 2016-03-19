<?php

/* @var $this yii\web\View */

$this->title = 'Tablica';
?>

<h2>View page source i kopiraj kod tablice :)</h2><br />

<table border="1" id="users">
  <thead>
    <tr>
      <th>Br.</th>
      <th>Ime</th>
      <th>Prezime</th>
      <th>Korisničko ime</th>
      <th>Rođendan</th>
      <th>Spol</th>
      <th>Država</th>
      <th>Mobilni telefon</th>
      <th>E-mail</th>
      <th>Lokacija</th>
      <th>Slika</th>
      <th>Obavijesti</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach($models as $model): ?>
    <tr>
      <td><?= $i ?></td>
      <td><?= $model->ime; ?></td>
      <td><?= $model->prezime; ?></td>
      <td><?= $model->korisnicko_ime; ?></td>
      <td><?= $model->dan.'.'.$model->mjesec.'.'.$model->godina; ?></td>
      <td><?= $model->spol; ?></td>
      <td><?= $model->drzava; ?></td>
      <td><?= $model->mobitel; ?></td>
      <td><?= $model->email; ?></td>
      <td><?= $model->lokacija; ?></td>
      <td><?= $model->slika; ?></td>
      <td><?= ($model->obavijesti ? 'Da':'Ne'); ?></td>
    </tr>
  <?php $i++; endforeach; ?>
  </tbody>
</table>
