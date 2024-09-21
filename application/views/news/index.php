<h3>Newss</h3>
<p><?php echo anchor('news/add', 'Add News'); ?></p>
<table>
  <tr>
    <th>Id</th>
    <th>Date</th>
    <th>Content</th>
    <th></th>
  </tr>
  <?php foreach ($news as $news): ?>
  <tr>
    <td><?php echo $news->id; ?></td>
    <td><?php echo $news->date; ?></td>
    <td><?php echo $news->content; ?></td>
    <td>
      <?php echo anchor('news/edit/' . $news->id, 'Edit'); ?>
      <a href='javascript:void(0);' onclick="deleteNews('<?php echo $news->id; ?>', <?php echo $news->id; ?>);" title="Delete">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<script>
  var url = '<?php echo base_url(); ?>';
  function deleteNews(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'news/delete/' + id;
    } else {
      return false;
    }
  }
</script>