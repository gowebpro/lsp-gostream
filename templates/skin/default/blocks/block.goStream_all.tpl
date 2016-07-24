{if count($aStreamEvents)}
	<ul class="stream-list">
		{include file = "`$aTemplatePathPlugin['gostream']`events.tpl"}
	</ul>

	<footer>
		<a href="{router page='stream/all'}">{$aLang.plugin.gostream.block_events_all}</a>
	</footer>
{else}
	{$aLang.stream_no_events}
{/if}
