{**
 * Персональная активность
 *
 *}

{component_define_params params=[ 'events' ]}

{capture 'items'}
    {foreach $events as $event}
        {$target = $event->getTarget()}

        {component 'gostream:gostream' template='event' event=$event}
    {foreachelse}
        {component 'blankslate' text={lang 'plugin.gostream.block.no_events'} mods='no-background'}
    {/foreach}
{/capture}

{component 'item' template='group' items=$smarty.capture.items}