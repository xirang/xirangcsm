<?php
/**
 * The manage view of category module of zentaoasm
 *
 * @copyright   Copyright 2009-2011 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     商业软件，未经授权，请立刻删除!
 * @author      Congzhi Chen<congzhi@cnezsoft.com>
 * @package     category
 * @version     $Id: buildform.html.php 1914 2011-06-24 10:11:25Z yidong@cnezsoft.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<table class='table-1 bd-none' align='center'>
  <tr valign='top'>
    <td class='w-200px' class='a-left' style='padding:0'>
      <form method='post' target='hiddenwin' action='<?php echo $this->inLink('updateOrder');?>'>
      <table width='100%'>
        <caption><?php echo $lang->category->categoryManage;?></caption>  
        <tr><td><?php echo html::select('product', $productList, $productID, 'class=select-3 onchange=switchProduct(this.value)');?></td></tr>
        <tr>
          <td class='a-left'>
            <ul>
            <?php 
            if(!empty($categories))
            {
              foreach($categories as $category)
              {
                  echo '<li>';
                  echo $category->name . ' ';
                  echo html::a($this->inLink('delete', "categoryID=$category->id"), $lang->delete, 'hiddenwin');
                  echo html::input("orders[$category->id]", "$category->order", 'style="width:20px"');
                  echo '</li>';
              }
            }
            ?>
            </ul>
          </td>
        </tr>
        <tr><td class='a-center'><?php echo html::submitButton($lang->category->updateOrder) . html::hidden('productID', $productID);?></td></tr>
      </table>
      </form>
    </td>
    <td class='a-left' style='padding:0'>
      <form method='post' target='hiddenwin'>
      <table class='table-1'>
        <caption><?php echo $lang->category->changeOrAdd;?></caption>  
        <tr>
          <td class='a-center'>
          <?php 
          if(!empty($categories))
          {
            foreach($categories as $category) echo html::input("categories[$category->id]", $category->name, 'class=text-2 style="margin-bottom:5px"') . '<br />';
          }
          if($productID != 0)
          {
            for($i = 0; $i < CATEGORY::NEW_CATEGORY_COUNT; $i ++) echo html::input("categories[]", '', 'class=text-2 style="margin-bottom:5px"') . '<br />';
            echo html::submitButton() . html::hidden('productID', $productID);
          }
          ?>
          </td>
        </tr>
      </table>
      </form>
    </td>
  </tr>
</table>
<?php include '../../common/view/footer.admin.html.php';?>
