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
            $oViewer = $this->Viewer_GetLocalViewer();
            $oViewer->Assign('events', $aEvents, true);
            /**
             * Формируем результат в виде шаблона и возвращаем
             */
            $sTextResult = $oViewer->Fetch("component@gostream:gostream.gostream-all");
            $this->Viewer_Assign('content', $sTextResult, true);
        }

        $this->SetTemplate('component@gostream:gostream.block.gostream');
    }
}
