<?php
/*-------------------------------------------------------
*
*   Project name: LSP-Stream
*   Official site: goweb.pro
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
        if ($aEvents = $this->Stream_ReadAll()) {
            $oViewer = $this->Viewer_GetLocalViewer();
            $oViewer->Assign('bDisableGetMoreButton', $this->Stream_GetCountAll() < Config::Get('module.stream.count_default'));
            $oViewer->Assign('aStreamEvents', $aEvents);

            $oEvenLast = end($aEvents);
            $oViewer->Assign('iStreamLastId', $oEvenLast->getId());

            $sHtml = $oViewer->Fetch(Plugin::GetTemplatePath(__CLASS__) . 'blocks/block.goStream_all.tpl');
            $this->Viewer_Assign('aStreamAll', $sHtml);
        }
    }
}
