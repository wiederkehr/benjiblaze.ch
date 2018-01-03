<?php

function my_em_has_attribute_event_output_condition($replacement, $condition, $match, $EM_Event){
  if( is_object($EM_Event) && preg_match('/^has_link$/',$condition, $matches) ){
    if( !in_array($args['Link'],$EM_Event->event_attributes) && !empty($EM_Event->event_attributes['Link']) ){
      $replacement = preg_replace("/\{\/?$condition\}/", '', $match);
    }else{
      $replacement = '';
    }
  }
  return $replacement;
}
add_action('em_event_output_condition', 'my_em_has_attribute_event_output_condition', 1, 4);

?>