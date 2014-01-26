<?php include '../../common/view/header.html.php';?>
<div class='panel'>
  <div class='panel-heading'>
    <strong><i class="icon-plus"></i> <?php echo $lang->product->action->adminConditions;?></strong>
  </div>
  <div class='panel-body'>
    <form method='post' id='ajaxForm'>
      <table class='table table-form'>
        <thead>
          <tr class='text-center'>
            <td><?php echo $lang->product->task->role;?></td>
            <td><?php echo $lang->product->task->date;?></td>
            <td><?php echo $lang->product->task->name;?></td>
            <td></td>
          </tr>
        </thead>
        <?php foreach($action->tasks as $task):?>
        <tr>
          <th><?php echo html::select('role[]', array_combine($roles, $roles), $task->role, "class='form-control'");?></th>
          <td class='w-150px'><?php echo html::input("date[]", $task->date, "class='form-control'")?></td>
          <td><?php echo html::input("name[]", $task->name, "class='form-control'")?></td>
          <td>
            <?php echo html::a('javascript:;', $lang->add, "class='plus'")?>
            <?php echo html::a('javascript:;', $lang->delete, "class='condition-deleter'")?>
          </td>
        </tr>
        <?php endforeach;?>
        <tr><td colspan='4'><?php echo html::submitButton();?></td></tr>
      </table>
    </form>
    <table class='hide'>
      <tr id='originTR'>
        <th><?php echo html::select('role[]', $roles, '', "class='form-control'");?></th>
        <td class='w-150px'><?php echo html::input('date[]', '', "class='form-control'")?></td>
        <td><?php echo html::input('name[]', '', "class='form-control'")?></td>
        <td>
          <?php echo html::a('javascript:;', $lang->add, "class='plus'")?>
          <?php echo html::a('javascript:;', $lang->delete, "class='condition-deleter'")?>
        </td>
      </tr>
    </table>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
