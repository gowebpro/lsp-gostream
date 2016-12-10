{if count($aStreamEvents)}
	<ul class="stream-list">
		{include file = "`$sGostreamFrontendPath`events.tpl"}
	</ul>

	<footer>
		<a href="{router page='stream/all'}">{$aLang.plugin.gostream.block_events_all}</a>
	</footer>
{else}
	{$aLang.plugin.gostream.no_events}
{/if}
