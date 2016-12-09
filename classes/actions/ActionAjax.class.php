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
            $oViewerLocal = $this->Viewer_GetLocalViewer();
            $oViewerLocal->Assign('aStreamEvents', $aEvents);
            $sHtml = $oViewerLocal->Fetch(Plugin::GetTemplatePath(__CLASS__) . 'blocks/block.goStream_all.tpl');
            $this->Viewer_AssignAjax('sText', $sHtml);
        } else {
            $this->Message_AddErrorSingle($this->Lang_Get('plugin.gostream.no_events'), $this->Lang_Get('attention'));
            return false;
        }
    }

    protected function EventGostreamMy()
    {
        $iLimit = Config::Get('plugin.gostream.block_count');
        if ($aEvents = $this->Stream_Read($iLimit)) {
            $oViewerLocal = $this->Viewer_GetLocalViewer();
            $oViewerLocal->Assign('aStreamEvents', $aEvents);
            $sHtml = $oViewerLocal->Fetch(Plugin::GetTemplatePath(__CLASS__) . 'blocks/block.goStream_my.tpl');
            $this->Viewer_AssignAjax('sText', $sHtml);
        } else {
            $this->Message_AddErrorSingle($this->Lang_Get('plugin.gostream.no_events'), $this->Lang_Get('attention'));
            return false;
        }
    }

}
