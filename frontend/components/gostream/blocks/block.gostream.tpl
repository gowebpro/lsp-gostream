{**
 * Прямой эфир
 *}

{component_define_params params=[ 'content' ]}


{$tabs = [
    [
        'text' => {lang 'plugin.gostream.block.title_all'},
        'url'  => {router page='ajax/gostream/all'},
        'list' => $content
    ]
]}

{if $oUserCurrent}
    {$tabs[] = [
        'text' => {lang 'plugin.gostream.block.title_my'},
        'url'  => {router page='ajax/gostream/my'}
    ]}
{/if}


{component 'block'
    mods     = 'primary gostream'
    classes  = 'js-block-default'
    title    = {lang 'plugin.gostream.block.title'}
    titleUrl = {router 'stream'}
    tabs     = [
        'classes' => 'js-tabs-block js-gostream-block-tabs',
        'tabs' => $tabs
    ]}