<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-27 15:10:21
         compiled from ".\templates\services.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2424257e8ef09cc3557-56532979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d30c8d73cd1d474560a373a44fc9cce0faf73d5' => 
    array (
      0 => '.\\templates\\services.tpl',
      1 => 1474978220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2424257e8ef09cc3557-56532979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e8ef09d01d64_47692563',
  'variables' => 
  array (
    'error' => 0,
    'notice' => 0,
    'getServices' => 0,
    'Services' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8ef09d01d64_47692563')) {function content_57e8ef09d01d64_47692563($_smarty_tpl) {?><div id="error"></div>
<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['notice']->value))) {?>
    <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</div>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php if (isset($_smarty_tpl->tpl_vars['getServices']->value)&&!isset($_smarty_tpl->tpl_vars['getServices']->value['error'])) {?>
        <form class="relations">
            <table class="table">
                <tr>
                    <th class="">Услуга</th>
                    <th class="">Описание</th>
                    <th class="" colspan="2">Доступна</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['Services'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Services']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getServices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Services']->key => $_smarty_tpl->tpl_vars['Services']->value) {
$_smarty_tpl->tpl_vars['Services']->_loop = true;
?>
                    <tr>
                        <td class="">
                            <?php echo $_smarty_tpl->tpl_vars['Services']->value['name'];?>

                        </td>
                        <td class="">
                            <?php echo $_smarty_tpl->tpl_vars['Services']->value['access'];?>

                        </td>
                        <td class="">
                            <?php if (isset($_smarty_tpl->tpl_vars['Services']->value['active'])&&$_smarty_tpl->tpl_vars['Services']->value['active']==0) {?>
                                <h4>Не доступна из меню</h4>
                            <?php } elseif ($_smarty_tpl->tpl_vars['Services']->value['active']==1) {?>
                                <h4>Доступна для выбора</h4>
                            <?php }?>
                        </td>
                        <td class="">
                            <input id=<?php echo $_smarty_tpl->tpl_vars['Services']->value['id'];?>
 type="button" data-toggle="modal" class="deleteServices btn btn-danger "
                                   value="Удалить связку">
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    <?php } else { ?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['getServices']->value['error_message'];?>
</div>
    <?php }?>
    <h1>Добавить новую услугу</h1>
    <form class="data form-horizontal  " role="form">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">Название: </label>
            <div class="col-sm-10">
                <input type="text" placeholder="VIP\Админ\etc" class="form-control" name="name" id="name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="access">Описание: </label>
            <div class="col-sm-10">
                <input type="text" placeholder="Флаги\Гуппы\Опыт" class="form-control" name="access" id="access">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="active">Активна: </label>
            <div class="col-sm-10">
                <input type="radio" class="form-control" name="active" id="active">
            </div>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
            <input type="button" data-toggle="modal" class="submit_service btn btn-success"
                   value="Добавить услугу">
        </div>
    </form>
<?php }?>
<?php }} ?>
