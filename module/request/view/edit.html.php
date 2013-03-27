<?php
/**
 * The browse view of request module of zentaoasm
 *
 * @copyright   Copyright 2009-2011 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     商业软件，未经授权，请立刻删除!
 * @author      Jinyong Zhu<zhujinyong@cnezsoft.com>
 * @package     request
 * @version     $Id: buildform.html.php 1914 2011-06-24 10:11:25Z yidong@cnezsoft.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<div class='row'>
  <div class='u-24-5'>
    <div class='cont-left'><?php include 'blockusermenu.html.php';?></div>
  </div>
  <div class='u-24-19'>
      <form method='post' target='hiddenwin' class='u-1' enctype='multipart/form-data'>
        <table align='center' class='table-1'>
          <caption><?php echo $lang->request->ask;?></caption>
          <tr>
            <th><?php echo $lang->request->product;?></th>
            <td><?php echo html::select('product', $products, $product, "class=select-3 onchange=switchProduct($request->id,this.value)")?></td>
          </tr>
          <tr>
            <th><?php echo $lang->request->category;?></th>
            <td><?php echo html::select('category', $categories, $category, 'class=select-3')?></td>
          </tr>
          <tr>
            <th class='w-100px'><?php echo $lang->request->title;?></th>
            <td><?php echo html::input('title', $title, 'class=text-1');?></td>
          </tr>
          <tr>
            <th><?php echo $lang->request->desc;?></th>
            <td><?php echo html::textarea('desc', $desc, 'style="width:90%" rows=10');?></td>
          </tr>
          <tr>
            <th><?php echo $lang->request->file;?></th>
            <td><?php echo $this->fetch('file', 'printFiles', array('files' => $request->files, 'fieldset' => 'false')). "<br>". $this->fetch('file', 'buildform', 'fileCount=2')?></td>
          </tr>
          <tr><td colspan='2' class='a-center'><?php echo html::submitButton(). html::hidden('requestID', $requestID);?></td></tr>
        </table>
      </form>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
