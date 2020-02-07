<?php
use Elgg\DefaultPluginBootstrap;

class hypeLists extends DefaultPluginBootstrap {

  public function init() {
  	$defaults = array(
  		'page/components/list',
  		'page/components/gallery',
  		'page/components/ajax_list',
  	);

  	$views = elgg_trigger_plugin_hook('get_views', 'framework:lists', null, $defaults);
  	foreach ($views as $view) {
  		elgg_register_plugin_hook_handler('view', $view, 'hypelists_wrap_list_view_hook');
  		elgg_register_plugin_hook_handler('view_vars', $view, 'hypelists_filter_vars');
  	}

  	elgg_extend_view('elgg.css', 'forms/lists/sort.css');
  }
}