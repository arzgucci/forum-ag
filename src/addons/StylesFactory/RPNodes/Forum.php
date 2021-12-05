<?php

namespace StylesFactory\RPNodes;

class Forum extends XFCP_Forum
{
	protected function nodeSaveProcess(\XF\Entity\Node $node)
    {
        $form = parent::nodeSaveProcess($node);

        \StylesFactory\RPNodes\Handler::nodeSaveProcess($this, $node, $form);

        return $form;
    }
	
    public function nodeAddEdit(\XF\Entity\Node $node)
    {
        $reply = parent::nodeAddEdit($node);

        \StylesFactory\RPNodes\Handler::nodeAddEdit($node, $reply, true);

        return $reply;
    }
}