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

class PluginGostream_ModuleViewer extends ModuleViewer
{

    public function VarAssign()
    {
        parent::VarAssign();

        $this->Assign('sGostreamFrontendPath', PluginGostream::GetFrontendPath());
    }

}