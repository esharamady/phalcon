<?php echo $this->tag->linkTo(['user/add', 'Add User', 'class' => 'btn btn-success']); ?>
<br />
<br />
<?php $no = 1; ?>
{% for datas in data %}
{% if loop.first %}
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Action</th>
    <tr>
  <thead>
{% endif %}
  <tbody>
    <tr>
      <td><?php echo $no; ?></td>
      <td>{{ datas.nama}}</td>
      <td>{{ datas.email}}</td>
      <td>
        <a href="user/edit/{{ datas.id }}" class="btn btn-primary">Edit</a> 
        <form action="user/delete/{{ datas.id }}" method="post" style="display: inline;"><button type="submit" class="btn btn-danger">Delete</button></form></td>
    </tr>
  </tbody>
<?php $no++ ?>
{% if loop.last %}
</table>
{% endif %}
{% else %}
  No Data
{% endfor %}