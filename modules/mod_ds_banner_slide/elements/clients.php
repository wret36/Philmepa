<?php
class JElementClients extends JElement {
    var $_name = 'Clients';

    function fetchElement($name, $value, &$node, $control_name)
    {
        $db = &JFactory::getDBO();

        $class    = $node->attributes('class');
        if (!$class) {
            $class = "inputbox";
        }

        $query = 'SELECT c.cid AS value, c.name AS text' .
                ' FROM #__bannerclient AS c' .
                ' ORDER BY c.name';
        $db->setQuery($query);
        $options = $db->loadObjectList();

        return JHTML::_('select.genericlist',  $options, ''.$control_name.'['.$name.'][]',
                      'class="inputbox" size="5" multiple="multiple"',
                      'value', 'text', $value, $control_name.$name);
    }
}
?>