<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

if (!defined("IN_ESOTALK")) exit;

/**
 * Displays the channel list page.
 *
 * @package esoTalk
 */
?>

<div id='conversationsFilter' class='bodyHeader'>


<form class='search big' id='search' action="https://www.google.com/search" target="_blank" method='get'>
<fieldset>
      <input name="sitesearch" value="esotalk.net" type="hidden">
	<input name="ie" value="UTF-8"  type="hidden">
	<input onfocus="if( this.value=='搜索是种美德') {this.value='' };" size="25" name="q" id="query" class="text" value="搜索是种美德" type="text">
	<input name="hl" value="zh-CN" type="hidden">
</fieldset>
</form>

<ul id='channels' class='channels tabs'>
<li class='selected'><a href='<?php echo URL("channels"); ?>' class='channel-list' data-channel='list' title='<?php echo T("Channel List"); ?>'><?php echo T("Channel List"); ?></a></li>
<?php $this->renderView("channels/tabs", $data); ?>
</ul>

</div>

<div id='channelList'>
<?php $this->renderView("channels/list", $data); ?>
</div>