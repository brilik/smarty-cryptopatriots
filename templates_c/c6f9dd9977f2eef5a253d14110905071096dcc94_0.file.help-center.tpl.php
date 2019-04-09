<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:53:53
  from 'C:\OSPanel\domains\cryptopatriots.loc\templates\pages\help-center.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac4f91749194_32023651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6f9dd9977f2eef5a253d14110905071096dcc94' => 
    array (
      0 => 'C:\\OSPanel\\domains\\cryptopatriots.loc\\templates\\pages\\help-center.tpl',
      1 => 1554796432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac4f91749194_32023651 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
    <div class="main-content wide-content">
        <div class="text-center set-header">
            <h1>Help Center</h1>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['questions']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'item', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="text-center help-hd <?php if (($_smarty_tpl->tpl_vars['k']->value !== 0)) {?>help-hd-2<?php }?>">
                <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
            </div>

            <div class="help-content <?php if (($_smarty_tpl->tpl_vars['k']->value !== 0)) {?>help-content-2<?php }?>">
                <div class="container">
                    <div class="row">
                        <ul class="help-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['qa'], 'j');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['j']->value) {
?>
                            <li>
                                <div class="help-question"><?php echo $_smarty_tpl->tpl_vars['j']->value['question'];?>
</div>
                                <div class="help-answer">
                                    <p><?php echo $_smarty_tpl->tpl_vars['j']->value['answer'];?>
</p>
                                </div>
                            </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</main><?php }
}
