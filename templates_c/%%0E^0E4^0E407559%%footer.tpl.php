<?php /* Smarty version 2.6.25-dev, created on 2016-07-12 08:11:34
         compiled from footer.tpl */ ?>
    <?php $_from = $this->_tpl_vars['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item1']):
?>
    <script src="js/<?php echo $this->_tpl_vars['item1']; ?>
"></script>
    <?php endforeach; endif; unset($_from); ?>
</body>
</html>