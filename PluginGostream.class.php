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
        ),
        'module' => array(
            'ModuleViewer'
        )
    );

    public function Init()
    {
        $this->Viewer_AppendScript(self::GetAssetsPath() . 'js/main.js');
        $this->Viewer_AppendStyle(self::GetAssetsPath() . 'css/main.css');

        $this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__) . 'css/main.css');
    }

    /**
     * Возвращает правильный серверный путь к директории ассетов плагина
     *
     * @return string
     */
    public static function GetAssetsPath()
    {
        return Plugin::GetPath(__CLASS__) . 'frontend/assets/';
    }

    /**
     * Возвращает правильный серверный путь к директории базовых шаблонов плагина
     *
     * @return string
     */
    public static function GetFrontendPath()
    {
        return Plugin::GetPath(__CLASS__) . 'frontend/templates/';
    }
}
