<?php
/**
 * The profile view file of user module of ZenTaoMS.
 *
 * @copyright   Copyright 2013-2014 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     商业软件，非开源软件
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     user 
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.lite.html.php';?>
<div class='page-user-control'>
  <div class='panel'>
    <div class='panel-body'>
      <dl class='dl-horizontal'>
        <dt><?php echo $lang->user->realname;?></dt>
        <dd><?php echo $user->realname;?></dd>
        <dt><?php echo $lang->user->email;?></dt>
        <dd><?php echo $user->email;?></dd>
        <dt><?php echo $lang->user->address;?></dt>
        <dd><?php echo $user->address;?></dd>
        <dt><?php echo $lang->user->zipcode;?></dt>
        <dd><?php echo $user->zipcode;?></dd>
        <dt><?php echo $lang->user->mobile;?></dt>
        <dd><?php echo $user->mobile;?></dd>
        <dt><?php echo $lang->user->phone;?></dt>
        <dd><?php echo $user->phone;?></dd>
        <dt><?php echo $lang->user->qq;?></dt>
        <dd><?php echo $user->qq;?></dd>
        <dt><?php echo $lang->user->gtalk;?></dt>
        <dd><?php echo $user->gtalk;?></dd>
        <dt></dt>
        <dd><?php echo html::a(inlink('edit'), "<i class='icon-pencil'></i> " . $lang->user->editProfile, "class='btn btn-primary'");?></dd>
      </dl>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.lite.html.php';?>
</body>
</html>
