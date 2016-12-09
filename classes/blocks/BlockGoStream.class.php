<?php

/*-------------------------------------------------------
*
*   Project name: LSP-GoStream
*   Official site: http://goweb.pro
*   Contact e-mail: gowebpro@ya.ru
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/


class PluginGostream_BlockGoStream extends Block
{

    public function Exec()
    {
        $iLimit = Config::Get('plugin.gostream.block_count');
        if ($aEvents = $this->Stream_ReadAll($iLimit)) {
            $oViewerLocal = $this->Viewer_GetLocalViewer();
            $oViewerLocal->Assign('aStreamEvents', $aEvents);
            $sHtml = $oViewerLocal->Fetch(Plugin::GetTemplatePath(__CLASS__) . 'blocks/block.goStream_all.tpl');
            $this->Viewer_Assign('aStreamAll', $sHtml);
        }
    }
}
