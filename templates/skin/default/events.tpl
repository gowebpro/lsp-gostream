{if count($aStreamEvents)}

	{foreach $aStreamEvents as $oStreamEvent}
		{$oTarget = $oStreamEvent->getTarget()}
		{$oUser = $oStreamEvent->getUser()}

		<li class="stream-item stream-item-type-{$oStreamEvent->getEventType()}">
			{if $oConfig->Get('plugin.gostream.block_avatar')}
				<section>
					<a href="{$oUser->getUserWebPath()}"><img src="{$oUser->getProfileAvatarPath(24)}" alt="{$oUser->getLogin()}"></a>
				</section>
			{/if}
			<section>
				<p>
					<a class="author" href="{$oUser->getUserWebPath()}">{$oUser->getLogin()}</a>
					<span class="date" title="{date_format date=$oStreamEvent->getDateAdded()}">{date_format date=$oStreamEvent->getDateAdded() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}</span> 
				</p>

				{if $oStreamEvent->getEventType() == 'add_topic'}
					{if $oUser->getProfileSex() != 'woman'}
						{$aLang.stream_list_event_add_topic}
					{else}
						{$aLang.stream_list_event_add_topic_female}
					{/if}
					<a href="{$oTarget->getUrl()}">{$oTarget->getTitle()|escape:'html'}</a>

				{elseif $oStreamEvent->getEventType() == 'add_comment'}
					{if $oUser->getProfileSex() != 'woman'}
						{$aLang.stream_list_event_add_comment}
					{else}
						{$aLang.stream_list_event_add_comment_female}
					{/if}
					<a href="{$oTarget->getTarget()->getUrl()}#comment{$oTarget->getId()}">{$oTarget->getTarget()->getTitle()|escape:'html'}</a>

					{$sTextEvent = $oTarget->getText()|strip_tags|truncate:200}
					{if trim($sTextEvent)}
						<div class="stream-comment-preview">{$sTextEvent}</div>
					{/if}

				{elseif $oStreamEvent->getEventType() == 'add_blog'}
					{if $oUser->getProfileSex() != 'woman'}
						{$aLang.stream_list_event_add_blog}
					{else}
						{$aLang.stream_list_event_add_blog_female}
					{/if} 
					<a href="{$oTarget->getUrlFull()}">{$oTarget->getTitle()|escape:'html'}</a>

				{elseif $oStreamEvent->getEventType() == 'vote_blog'}
					{if $oUser->getProfileSex() != 'woman'}
						{$aLang.stream_list_event_vote_blog}
					{else}
						{$aLang.stream_list_event_vote_blog_female}
					{/if} 
					<a href="{$oTarget->getUrlFull()}">{$oTarget->getTitle()|escape:'html'}</a>

				{elseif $oStreamEvent->getEventType() == 'vote_topic'}
					{if $oUser->getProfileSex() != 'woman'}
						{$aLang.stream_list_event_vote_topic}
					{else}
						{$aLang.stream_list_event_vote_topic_female}
					{/if} 
					<a href="{$oTarget->getUrl()}">{$oTarget->getTitle()|escape:'html'}</a>

				{elseif $oStreamEvent->getEventType() == 'vote_comment'}
					{if $oUser->getProfileSex() != 'woman'}
						{$aLang.stream_list_event_vote_comment}
					{else}
						{$aLang.stream_list_event_vote_comment_female}
					{/if} 
					<a href="{$oTarget->getTarget()->getUrl()}#comment{$oTarget->getId()}">{$oTarget->getTarget()->getTitle()|escape:'html'}</a>

				{elseif $oStreamEvent->getEventType() == 'vote_user'}
					{if $oUser->getProfileSex() != 'woman'}
						{$aLang.stream_list_event_vote_user}
					{else}
						{$aLang.stream_list_event_vote_user_female}
					{/if} 
					<a href="{$oTarget->getUserWebPath()}">{$oTarget->getLogin()}</a>

				{elseif $oStreamEvent->getEventType() == 'join_blog'}
					{if $oUser->getProfileSex() != 'woman'}
						{$aLang.stream_list_event_join_blog}
					{else}
						{$aLang.stream_list_event_join_blog_female}
					{/if} 
					<a href="{$oTarget->getUrlFull()}">{$oTarget->getTitle()|escape:'html'}</a>

				{elseif $oStreamEvent->getEventType() == 'add_friend'}
					{if $oUser->getProfileSex() != 'woman'}
						{$aLang.stream_list_event_add_friend}
					{else}
						{$aLang.stream_list_event_add_friend_female}
					{/if}
					<a href="{$oTarget->getUserWebPath()}">{$oTarget->getLogin()}</a>

				{elseif $oStreamEvent->getEventType() == 'add_wall'}
					{if $oUser->getProfileSex() != 'woman'}
						{$aLang.stream_list_event_add_wall}
					{else}
						{$aLang.stream_list_event_add_wall_female}
					{/if}
					<a href="{$oTarget->getUrlWall()}">{$oTarget->getWallUser()->getLogin()}</a>

					{$sTextEvent = $oTarget->getText()|strip_tags|truncate:200}
					{if trim($sTextEvent)}
						<div class="stream-comment-preview">{$sTextEvent}</div>
					{/if}

				{else}
					{hook run="stream_list_event_`$oStreamEvent->getEventType()`" oStreamEvent=$oStreamEvent}
				{/if}
			</section>
		</li>
	{/foreach}

{/if}