<?php /* Smarty version 2.6.25-dev, created on 2016-07-14 07:47:39
         compiled from table.html */ ?>
<div class="w3-container">
    <div class="w3-card-4">
        <div class="w3-container   w3-blue">
            <h3>Table Order</h3>
        </div>
        <form action="<?php echo $this->_tpl_vars['sendTo']; ?>
" method="post">
            <div class="w3-row w3-padding">
                <div class="w3-col m6 s12">
                    <h2 class="w3-container">選擇桌號</h2>
                    <?php $_from = $this->_tpl_vars['table']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
?>
                        <input class="w3-radio" type="radio" name="table" value="<?php echo $this->_tpl_vars['item1']; ?>
">
                        <label class="w3-validate"><?php echo $this->_tpl_vars['item1']; ?>
</label>
                    <?php endforeach; endif; unset($_from); ?>
                </div>
                <div class="w3-col m6 s12">
                    <h2 class="w3-container">點餐目錄</h2>
                    <?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
?>
                    <input class="w3-checkbox" type="checkbox" name="menu[]" value="<?php echo $this->_tpl_vars['item1']; ?>
">
                    <label class="w3-validate"><?php echo $this->_tpl_vars['item1']; ?>
</label>
                    <?php endforeach; endif; unset($_from); ?>
                </div>
            </div>
            <div class="w3-section w3-padding">
                <button class="w3-btn w3-green">點餐</button>
            </div>
        </form>
    </div>

    <h2>Step: <?php echo $this->_tpl_vars['step']; ?>
</h2>
    <div class="w3-card-4">
        <div class="w3-container   w3-blue">
            <h3>Table Order</h3>
        </div>
        <h2 class="w3-container">解除桌號</h2>
        <form class="w3-container" action="<?php echo $this->_tpl_vars['sendTo']; ?>
" method="post">
            <ul class="w3-ul">
            <?php $_from = $this->_tpl_vars['select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                <li>
                    <input class="w3-radio" type="radio" name="order" value="<?php echo $this->_tpl_vars['item']; ?>
">
                    <label class="w3-validate"><?php echo $this->_tpl_vars['key']; ?>
</label>
                        <ul class="w3-ul">
                            <?php $_from = $this->_tpl_vars['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                                <li>
                                    <input class="w3-checkbox" type="checkbox" name="cancel" value="<?php echo $this->_tpl_vars['value']; ?>
">
                                    <label class="w3-validate"><?php echo $this->_tpl_vars['value']; ?>
</label>
                                </li>
                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                </li>
            <?php endforeach; endif; unset($_from); ?>
            </ul>
            <div class="w3-section">
                <button class="w3-btn w3-red">取消</button>
            </div>
        </form>
    </div>
</div>