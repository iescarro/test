<h3>Edit news</h3>
<?php echo form_open('news/edit/' . $news->id); ?>
<p>Id<br>
  <?php echo form_input('id', $news->id); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Date<br>
  <?php echo form_input('date', $news->date); ?>
  <?php echo form_error('date'); ?>
</p>
<p>Content<br>
  <?php echo form_input('content', $news->content); ?>
  <?php echo form_error('content'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('news', 'cancel'); ?>
</p>
<?php echo form_close(); ?>