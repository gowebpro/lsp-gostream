{if count($aStreamEvents)}
	<ul class="stream-list">
		{include file = "`$aTemplatePathPlugin['gostream']`events.tpl"}
	</ul>

	<footer>
		<a href="{router page='stream'}">{$aLang.plugin.gostream.block_events_all}</a>
	</footer>
{else}
	{$aLang.plugin.gostream.no_events}
{/if}
