<?php /* Smarty version 2.6.25-dev, created on 2016-07-12 08:15:19
         compiled from header.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->_tpl_vars['title']; ?>
</title>
    <?php $_from = $this->_tpl_vars['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item1']):
?>
        <link rel="stylesheet" type="text/css" href="css/<?php echo $this->_tpl_vars['item1']; ?>
">
    <?php endforeach; endif; unset($_from); ?>
    <?php $_from = $this->_tpl_vars['linkcss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item1']):
?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['item1']; ?>
">
    <?php endforeach; endif; unset($_from); ?>
</head>
<body>
