<h3>Add news</h3>
<?php echo form_open('news/add'); ?>
<p>Id<br>
  <?php echo form_input('id', $this->input->post('id')); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Date<br>
  <?php echo form_input('date', $this->input->post('date')); ?>
  <?php echo form_error('date'); ?>
</p>
<p>Content<br>
  <?php echo form_input('content', $this->input->post('content')); ?>
  <?php echo form_error('content'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('news', 'cancel'); ?>
</p>
<?php echo form_close(); ?>