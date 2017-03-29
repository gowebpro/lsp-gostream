<?php

/*-------------------------------------------------------
*
*   Project name: LSP-GoStream
*   Official site: goweb.pro
*   Contact e-mail: gowebpro@ya.ru
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/


class PluginGostream_ActionAjax extends PluginGostream_Inherit_ActionAjax
{

    protected function RegisterEvent()
    {
        parent::RegisterEvent();
        $this->AddEventPreg('/^gostream$/i', '/^all$/', 'EventGostreamAll');
        $this->AddEventPreg('/^gostream$/i', '/^my$/', 'EventGostreamMy');
    }


    protected function EventGostreamAll()
    {
        $iLimit = Config::Get('plugin.gostream.block_count');
        if ($aEvents = $this->Stream_ReadAll($iLimit)) {
            $oViewer = $this->Viewer_GetLocalViewer();
            $oViewer->Assign('events', $aEvents, true);
            $sTextResult = $oViewer->Fetch("component@gostream:gostream.gostream-all");
            $this->Viewer_AssignAjax('sText', $sTextResult);
        } else {
            $this->Message_AddErrorSingle($this->Lang_Get('plugin.gostream.block.no_events'),
                $this->Lang_Get('common.attention'));
            return;
        }
    }

    protected function EventGostreamMy()
    {
        $iLimit = Config::Get('plugin.gostream.block_count');
        if ($aEvents = $this->Stream_Read($iLimit)) {
            $oViewer = $this->Viewer_GetLocalViewer();
            $oViewer->Assign('events', $aEvents, true);
            $sTextResult = $oViewer->Fetch("component@gostream:gostream.gostream-my");
            $this->Viewer_AssignAjax('sText', $sTextResult);
        } else {
            $this->Message_AddErrorSingle($this->Lang_Get('plugin.gostream.block.no_events'),
                $this->Lang_Get('common.attention'));
            return;
        }
    }

}
