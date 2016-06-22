{if count($aStreamEvents)}
	<ul class="stream-list" id="stream-list">
		{include file='actions/ActionStream/events.tpl'}
	</ul>

	<footer>
		<a href="{router page='stream'}">{$aLang.block_stream_comments_all}</a>
	</footer>
{else}
	{$aLang.stream_no_events}
{/if}
