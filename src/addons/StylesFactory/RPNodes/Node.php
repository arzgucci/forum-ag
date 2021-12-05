<?php

namespace StylesFactory\RPNodes;

class Node extends XFCP_Node
{
    public function normalicon()
    {
        $this->iconca = array('mybackground', 'widthcontroller');
    }
    public function changer()
    {
        if ($this->iconca && isset($this->iconca['modifier']))
        {
            return true;
        }
        return false;
    }
    public function changetonew()
    {
        $this->iconca = array('mybackground', 'widthcontroller');
    }
    protected function _postSave()
    {
        parent::_postSave();

        \XF::repository('XF:Style')->updateAllStylesLastModifiedDate();
    }
}