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


if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginGostream extends Plugin
{

    protected $aInherits = array(
        'action' => array(
            'ActionAjax'
        )
    );

    public function Init()
    {
//        $this->Viewer_AppendScript(self::GetAssetsPath() . 'js/main.js');
//        $this->Viewer_AppendStyle(self::GetAssetsPath() . 'css/main.css');

        $this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__) . 'assets/js/init.js');
    }

}
