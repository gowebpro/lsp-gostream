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


class PluginGostream_HookStream extends Hook
{

    public function RegisterHook()
    {
        $this->AddHook('init_action', 'InitAction', __CLASS__, 1000);
    }


    public function InitAction()
    {
        $sReplaceBlock = 'stream';
        $aBlocksRule = (array)Config::Get('block');
        foreach ($aBlocksRule as $sName => $aRule) {
            if (!array_key_exists('blocks', $aRule)) continue;
            foreach ($aRule['blocks'] as $sGroup => $aBlocks) {
                foreach ((array)$aBlocks as $sBlockName => $aParams) {
                    if (strtolower($sBlockName) == $sReplaceBlock) {
                        $aParams['params']['plugin'] = 'gostream';
                        $aBlocksRule[$sName]['blocks'][$sGroup]['goStream'] = $aParams;
                        unset($aBlocksRule[$sName]['blocks'][$sGroup][$sReplaceBlock]);
                    }
                }
            }
        }
        Config::Set('block', $aBlocksRule);
    }

}
