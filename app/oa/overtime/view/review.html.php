<?php
/**
 * The review view file of overtime module of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     overtime 
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
?>
<?php include '../../../sys/common/view/header.modal.html.php';?>
<?php include '../../../sys/common/view/kindeditor.html.php';?>
<form method='post' id='ajaxForm' action='<?php echo inlink('review', "id={$overtime->id}")?>'>
  <table class='table table-fixed table-bordered'>

    <thead>
    <tr class='text-center'>
      <th class='w-80px'><?php echo $lang->overtime->createdBy;?></th>
      <th class='w-80px'><?php echo $lang->overtime->type;?></th>
      <th class='w-150px'><?php echo $lang->overtime->begin;?></th>
      <th class='w-150px'><?php echo $lang->overtime->end;?></th>
      <th class='w-90px text-nowrap'><?php echo $lang->overtime->desc;?></th>
      <th class='w-160px'></th>
    </tr>
    </thead>

    <tr class='text-center'>
      <td><?php echo zget($users, $overtime->createdBy);?></td>
      <td class='text-right'><?php echo $lang->overtime->typeList[$overtime->type];?></td>
      <td><?php echo $overtime->begin . ' ' . $overtime->start;?></td>
      <td><?php echo $overtime->end . ' ' . $overtime->finish;?></td>
      <td class='text-ellipsis' title="<?php echo $overtime->desc;?>"><?php echo $overtime->desc;?></td>
      <td><?php echo html::radio("status", $lang->overtime->reviewStatusList, $overtime->status == 'reject' ? 'reject' : 'pass');?></td>
    </tr>

  </table>
  <table class='table table-borderless'>
    <tr class='comment'>
      <th class='w-50px text-center text-middle'><?php echo $lang->comment;?></th>
      <td><?php echo html::textarea("comment", '', "class='form-control'");?></td>
      <td class='text-middle'><?php echo html::submitButton();?></td>
    </tr>
  </table>
</form>
<?php include '../../../sys/common/view/footer.modal.html.php';?>
