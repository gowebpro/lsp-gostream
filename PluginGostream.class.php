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


if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginGostream extends Plugin
{

    public function Activate()
    {
        return true;
    }

    public function Init()
    {
        $this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__) . 'js/main.js');
        $this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__) . 'css/main.css');
    }

}
