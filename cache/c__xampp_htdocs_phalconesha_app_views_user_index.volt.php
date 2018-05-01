<?php echo $this->tag->linkTo(['user/add', 'Add User', 'class' => 'btn btn-success']); ?>
<br />
<br />
<?php $no = 1; ?>
<?php $v6627132121iterated = false; ?><?php $v6627132121iterator = $data; $v6627132121incr = 0; $v6627132121loop = new stdClass(); $v6627132121loop->self = &$v6627132121loop; $v6627132121loop->length = count($v6627132121iterator); $v6627132121loop->index = 1; $v6627132121loop->index0 = 1; $v6627132121loop->revindex = $v6627132121loop->length; $v6627132121loop->revindex0 = $v6627132121loop->length - 1; ?><?php foreach ($v6627132121iterator as $datas) { ?><?php $v6627132121loop->first = ($v6627132121incr == 0); $v6627132121loop->index = $v6627132121incr + 1; $v6627132121loop->index0 = $v6627132121incr; $v6627132121loop->revindex = $v6627132121loop->length - $v6627132121incr; $v6627132121loop->revindex0 = $v6627132121loop->length - ($v6627132121incr + 1); $v6627132121loop->last = ($v6627132121incr == ($v6627132121loop->length - 1)); ?><?php $v6627132121iterated = true; ?>
<?php if ($v6627132121loop->first) { ?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Action</th>
    <tr>
  <thead>
<?php } ?>
  <tbody>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?= $datas->nama ?></td>
      <td><?= $datas->email ?></td>
      <td>
        <a href="user/edit/<?= $datas->id ?>" class="btn btn-primary">Edit</a> 
        <form action="user/delete/<?= $datas->id ?>" method="post" style="display: inline;"><button type="submit" class="btn btn-danger">Delete</button></form></td>
    </tr>
  </tbody>
<?php $no++ ?>
<?php if ($v6627132121loop->last) { ?>
</table>
<?php } ?>
<?php $v6627132121incr++; } if (!$v6627132121iterated) { ?>
  No Data
<?php } ?>