<?php

/*
 * Plugin Name:       ACF Copyright Notice Widget
 * Plugin URI:        https://github.com/wolozo/ACF-Copyright-Notice-Widget
 * GitHub Plugin URI: https://github.com/wolozo/ACF-Copyright-Notice-Widget
 * Description:       ACF Pro Widget to add various segments of a Copyright Notice.
 * Version:           1.0.0
 * Author:            Wolozo
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       copyright-notice-widget
 * Requires WP:       4.3
 * Requires PHP:      5.3
 */

function cnw_acf_fields() {
  acf_add_local_field_group( array(
                               'key'                   => 'group_5867953e23e33',
                               'title'                 => 'Copyright Notice Widget',
                               'fields'                => array(
                                 array(
                                   'layouts'           => array(
                                     array(
                                       'key'        => '58679c8367c4f',
                                       'name'       => 'copyright_symbol',
                                       'label'      => 'Copyright Symbol',
                                       'display'    => 'block',
                                       'sub_fields' => array(),
                                       'min'        => '',
                                       'max'        => '',
                                     ),
                                     array(
                                       'key'        => '58679a00df686',
                                       'name'       => 'copyright_years',
                                       'label'      => 'Copyright Years',
                                       'display'    => 'block',
                                       'sub_fields' => array(
                                         array(
                                           'default_value'     => '',
                                           'maxlength'         => '',
                                           'placeholder'       => 'Blank to Omit',
                                           'prepend'           => '',
                                           'append'            => '',
                                           'key'               => 'field_58679a7ddf688',
                                           'label'             => 'Start Year',
                                           'name'              => 'start_year',
                                           'type'              => 'text',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '50',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                         array(
                                           'default_value'     => '',
                                           'maxlength'         => '',
                                           'placeholder'       => 'Blank for Current Year',
                                           'prepend'           => '',
                                           'append'            => '',
                                           'key'               => 'field_58679b20df689',
                                           'label'             => 'End Year',
                                           'name'              => 'end_year',
                                           'type'              => 'text',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '50',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                         array(
                                           'default_value'     => '–',
                                           'maxlength'         => '',
                                           'placeholder'       => '',
                                           'prepend'           => 'Start Year',
                                           'append'            => 'End Year',
                                           'key'               => 'field_58679b4edf68a',
                                           'label'             => 'Year Separator',
                                           'name'              => 'year_separator',
                                           'type'              => 'text',
                                           'instructions'      => 'Not used if Start Year is ommited.',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                       ),
                                       'min'        => '',
                                       'max'        => '',
                                     ),
                                     array(
                                       'key'        => '58679d7cdf5bf',
                                       'name'       => 'line_break',
                                       'label'      => 'Line Break',
                                       'display'    => 'block',
                                       'sub_fields' => array(),
                                       'min'        => '',
                                       'max'        => '',
                                     ),
                                     array(
                                       'key'        => '58679df5df5c3',
                                       'name'       => 'link',
                                       'label'      => 'Link',
                                       'display'    => 'block',
                                       'sub_fields' => array(
                                         array(
                                           'default_value'     => '',
                                           'maxlength'         => '',
                                           'placeholder'       => '',
                                           'prepend'           => '',
                                           'append'            => '',
                                           'key'               => 'field_58679e0ddf5c4',
                                           'label'             => 'Link Text',
                                           'name'              => 'link_text',
                                           'type'              => 'text',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '50',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                         array(
                                           'default_value'     => '',
                                           'maxlength'         => '',
                                           'placeholder'       => '',
                                           'prepend'           => '',
                                           'append'            => '',
                                           'key'               => 'field_58679e3ddf5c5',
                                           'label'             => 'Link URL',
                                           'name'              => 'link_url',
                                           'type'              => 'text',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '50',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                         array(
                                           'default_value'     => 0,
                                           'message'           => 'Open in New Tab',
                                           'ui'                => 0,
                                           'ui_on_text'        => '',
                                           'ui_off_text'       => '',
                                           'key'               => 'field_58679e87df5c6',
                                           'label'             => 'Open in New Tab',
                                           'name'              => 'open_in_new_tab',
                                           'type'              => 'true_false',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '50',
                                             'class' => 'w_acf-label--hide',
                                             'id'    => '',
                                           ),
                                         ),
                                         array(
                                           'default_value'     => 0,
                                           'message'           => 'No Follow',
                                           'ui'                => 0,
                                           'ui_on_text'        => '',
                                           'ui_off_text'       => '',
                                           'key'               => 'field_5867ace7b7ff9',
                                           'label'             => 'No Follow',
                                           'name'              => 'no_follow',
                                           'type'              => 'true_false',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '50',
                                             'class' => 'w_acf-label--hide',
                                             'id'    => '',
                                           ),
                                         ),
                                       ),
                                       'min'        => '',
                                       'max'        => '',
                                     ),
                                     array(
                                       'key'        => '58679d8ddf5c0',
                                       'name'       => 'link_page',
                                       'label'      => 'Link to Page',
                                       'display'    => 'block',
                                       'sub_fields' => array(
                                         array(
                                           'post_type'         => array(),
                                           'taxonomy'          => array(),
                                           'allow_null'        => 0,
                                           'multiple'          => 0,
                                           'return_format'     => 'id',
                                           'ui'                => 1,
                                           'key'               => 'field_58679d95df5c1',
                                           'label'             => 'Page Link',
                                           'name'              => 'page_link',
                                           'type'              => 'post_object',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '60',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                         array(
                                           'default_value'     => '',
                                           'maxlength'         => '',
                                           'placeholder'       => 'Blank for Page Link\'s Title',
                                           'prepend'           => '',
                                           'append'            => '',
                                           'key'               => 'field_58679dcadf5c2',
                                           'label'             => 'Link Text',
                                           'name'              => 'link_text',
                                           'type'              => 'text',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '40',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                         array(
                                           'default_value'     => 0,
                                           'message'           => 'Open in New Tab',
                                           'ui'                => 0,
                                           'ui_on_text'        => '',
                                           'ui_off_text'       => '',
                                           'key'               => 'field_58679eb0df5c7',
                                           'label'             => 'Open in New Tab',
                                           'name'              => 'open_in_new_tab',
                                           'type'              => 'true_false',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '50',
                                             'class' => 'w_acf-label--hide',
                                             'id'    => '',
                                           ),
                                         ),
                                         array(
                                           'default_value'     => 0,
                                           'message'           => 'No Follow',
                                           'ui'                => 0,
                                           'ui_on_text'        => '',
                                           'ui_off_text'       => '',
                                           'key'               => 'field_5867acc7b7ff8',
                                           'label'             => 'No Follow',
                                           'name'              => 'no_follow',
                                           'type'              => 'true_false',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '50',
                                             'class' => 'w_acf-label--hide',
                                             'id'    => '',
                                           ),
                                         ),
                                       ),
                                       'min'        => '',
                                       'max'        => '',
                                     ),
                                     array(
                                       'key'        => '58679d4fdf5bd',
                                       'name'       => 'separator',
                                       'label'      => 'Separator',
                                       'display'    => 'block',
                                       'sub_fields' => array(
                                         array(
                                           'default_value'     => '|',
                                           'maxlength'         => '',
                                           'placeholder'       => '',
                                           'prepend'           => '',
                                           'append'            => '',
                                           'key'               => 'field_58679d67df5be',
                                           'label'             => 'separator',
                                           'name'              => 'separator',
                                           'type'              => 'text',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                       ),
                                       'min'        => '',
                                       'max'        => '',
                                     ),
                                     array(
                                       'key'        => '58679580e8dd8',
                                       'name'       => 'site_title',
                                       'label'      => 'Site Title',
                                       'display'    => 'block',
                                       'sub_fields' => array(
                                         array(
                                           'default_value'     => 0,
                                           'message'           => 'Link to Site Address',
                                           'ui'                => 0,
                                           'ui_on_text'        => '',
                                           'ui_off_text'       => '',
                                           'key'               => 'field_586795db52100',
                                           'label'             => 'Link to Site Address (URL)',
                                           'name'              => 'link_to_site',
                                           'type'              => 'true_false',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '30',
                                             'class' => 'w_acf-label--hide',
                                             'id'    => '',
                                           ),
                                         ),
                                         array(
                                           'default_value'     => '',
                                           'maxlength'         => '',
                                           'placeholder'       => 'Leave Blank for Site Title',
                                           'prepend'           => '',
                                           'append'            => '',
                                           'key'               => 'field_586799575f0d0',
                                           'label'             => 'Alternative Link Text',
                                           'name'              => 'alternative_link_text',
                                           'type'              => 'text',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '70',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                       ),
                                       'min'        => '',
                                       'max'        => '',
                                     ),
                                     array(
                                       'key'        => '58679caf67c51',
                                       'name'       => 'text',
                                       'label'      => 'Text',
                                       'display'    => 'block',
                                       'sub_fields' => array(
                                         array(
                                           'default_value'     => '',
                                           'maxlength'         => '',
                                           'placeholder'       => '',
                                           'prepend'           => '',
                                           'append'            => '',
                                           'key'               => 'field_58679bfe67c4d',
                                           'label'             => 'Text',
                                           'name'              => 'text',
                                           'type'              => 'text',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                       ),
                                       'min'        => '',
                                       'max'        => '',
                                     ),
                                     array(
                                       'key'        => '58679f8c29de2',
                                       'name'       => 'wysiwyg_editor',
                                       'label'      => 'Wysiwyg Editor',
                                       'display'    => 'block',
                                       'sub_fields' => array(
                                         array(
                                           'tabs'              => 'all',
                                           'toolbar'           => 'full',
                                           'media_upload'      => 1,
                                           'default_value'     => '',
                                           'delay'             => 1,
                                           'key'               => 'field_58679f9829de3',
                                           'label'             => 'Editor',
                                           'name'              => 'editor',
                                           'type'              => 'wysiwyg',
                                           'instructions'      => '',
                                           'required'          => 0,
                                           'conditional_logic' => 0,
                                           'wrapper'           => array(
                                             'width' => '',
                                             'class' => '',
                                             'id'    => '',
                                           ),
                                         ),
                                       ),
                                       'min'        => '',
                                       'max'        => '',
                                     ),
                                   ),
                                   'min'               => '',
                                   'max'               => '',
                                   'button_label'      => 'Add Segment',
                                   'key'               => 'field_58679560520ff',
                                   'label'             => '',
                                   'name'              => 'acf-copyright-notice-widget',
                                   'type'              => 'flexible_content',
                                   'instructions'      => '',
                                   'required'          => 0,
                                   'conditional_logic' => 0,
                                   'wrapper'           => array(
                                     'width' => '',
                                     'class' => '',
                                     'id'    => '',
                                   ),
                                 ),
                               ),
                               'location'              => array(
                                 array(
                                   array(
                                     'param'    => 'widget',
                                     'operator' => '==',
                                     'value'    => 'copyright_notice_widget',
                                   ),
                                 ),
                               ),
                               'menu_order'            => 0,
                               'position'              => 'normal',
                               'style'                 => 'default',
                               'label_placement'       => 'top',
                               'instruction_placement' => 'label',
                               'hide_on_screen'        => '',
                               'active'                => 1,
                               'description'           => '',
                             ) );
}

add_action( 'acf/init', 'cnw_acf_fields' );

class copyright_notice_widget extends WP_Widget {

  function copyright_notice_widget() {
    parent::__construct( false,
                         $name = __( 'Copyright Notice Widget', 'copyright-notice-widget' ),
                         array(
                           'description' => __( 'Add Copyright, Links, Text, …', 'copyright-notice-widget' )
                         ) );
  }

  function form( $instance ) { // Save Button
  }

  function widget( $args, $instance ) {

    $widget      = 'widget_' . $args[ 'widget_id' ];
    $iCopySymbol = 0;
    $iCopyYear   = 0;
    $iLineBreak  = 0;
    $iLink       = 0;
    $iSeparator  = 0;
    $iSiteTitle  = 0;
    $iText       = 0;
    $iWysiwyg    = 0;

    $allowedHTML = wp_kses_allowed_html( 'post' );

    $output = null;
    if ( have_rows( 'acf-copyright-notice-widget', $widget ) ) {
      while ( have_rows( 'acf-copyright-notice-widget', $widget ) ) {
        the_row();

        // Copyright Symbol
        if ( get_row_layout() == 'copyright_symbol' ) {
          $class = 'class="cnw-copySymbol cnw-copySymbol-' . $iCopySymbol . '"';
          $output .= "<span $class> &copy; </span>";
          $iCopySymbol ++;
        } //
        // Copyright Years
        elseif ( get_row_layout() == 'copyright_years' ) {
          $class = 'class="cnw-copyYears cnw-copyYears-' . $iCopyYear . '"';
          $output .= "<span $class>";

          if ( get_sub_field( 'start_year' ) ) {
            $text = wp_kses( get_sub_field( 'start_year' ), $allowedHTML );
            $output .= "<span class=\"cnw-copyStart\">$text</span>";
            $text = wp_kses( get_sub_field( 'year_separator' ), $allowedHTML );
            $output .= "<span class=\"cnw-copySep\">$text</span>";
          }

          if ( get_sub_field( 'end_year' ) ) {
            $text = wp_kses( get_sub_field( 'end_year' ), $allowedHTML );
            $output .= "<span class=\"cnw-copyEnd\">$text</span>";
          } else {
            $output .= '<span class="cnw-copyEnd">' . date( 'Y' ) . '</span>';
          }

          $output .= "</span>";
          $output = ' ' . $output . ' ';

          $iCopyYear ++;
        } //
        // Line Break
        elseif ( get_row_layout() == 'line_break' ) {
          $class = 'class="cnw-lineBreak cnw-lineBreak-' . $iLineBreak . '"';
          $output .= "<span $class style=\"display: block\"></span>";

          $iLineBreak ++;
        } //
        // Link
        // Link Page
        elseif ( get_row_layout() == 'link' || get_row_layout() == 'link_page' ) {
          $class    = 'class="cnw-link cnw-link-' . $iLink . '"';
          $text     = wp_kses( get_sub_field( 'link_url' ), $allowedHTML );
          $url      = ( get_sub_field( 'page_link' ) )
            ? get_permalink( get_sub_field( 'page_link' ) )
            : wp_kses( get_sub_field( 'link_url' ),
                       $allowedHTML );
          $newTab   = ( get_sub_field( 'open_in_new_tab' ) ) ? 'target="_blank"' : null;
          $noFollow = ( get_sub_field( 'no_follow' ) ) ? 'rel="nofollow"' : null;
          $linkText =
            ( get_sub_field( 'link_text' ) ) ? wp_kses( get_sub_field( 'link_text' ), $allowedHTML )
              : get_the_title( get_sub_field( 'page_link' ) );

          $output .= "<a $noFollow href='$url' $class $newTab>";
          $output .= "<span $class> $linkText </span>";
          $output .= "</a>";

          $iLink ++;
        } //
        // Separator
        elseif ( get_row_layout() == 'separator' ) {
          $class = 'class="cnw-separator cnw-separator-' . $iSeparator . '"';
          $text  = wp_kses( get_sub_field( 'separator' ), $allowedHTML );
          $output .= "<span $class> $text </span>";

          $iSeparator ++;
        } //
        // Site Title
        elseif ( get_row_layout() == 'site_title' ) {

          $class = 'class="cnw-siteTitle cnw-siteTitle-' . $iSiteTitle . '"';
          $output .= "<span $class>";

          $text = ( wp_kses( get_sub_field( 'alternative_link_text' ), $allowedHTML ) ) ?: get_bloginfo( 'name' );
          $text = "<span class=\"cnw-siteLinkText\"> $text </span>";

          if ( get_sub_field( 'link_to_site' ) ) {
            $url = get_bloginfo( 'url' );
            $output .= "<a class=\"cnw-siteLink\" href='$url'> $text </a>";
          } else {
            $output .= $text;
          }

          $output .= "</span>";

          $iSiteTitle ++;
        } //
        // Text
        elseif ( get_row_layout() == 'text' ) {
          $class = 'class="cnw-text cnw-text-' . $iText . '"';
          $text  = wp_kses( get_sub_field( 'text' ), wp_kses_allowed_html( 'post' ) );
          $output .= "<span $class> $text </span>";

          $iText ++;
        } //
        // Wysiwyg Editor
        elseif ( get_row_layout() == 'wysiwyg_editor' ) {
          $class = 'class="cnw-wysiwyg cnw-wysiwyg-' . $iWysiwyg . '"';
          $output .= "<span $class> " . get_sub_field( 'editor' ) . " </span>";

          $iWysiwyg ++;
        } //
      }
    }

    echo '<div class="cnw-outer">' . $output . '</div>';
  }
}

add_action( 'widgets_init', create_function( '', 'return register_widget("copyright_notice_widget");' ) );

// Admin CSS
function cnw_enqueue_scripts( $hook ) {
  if ( 'widgets.php' != $hook ) : return; endif;

  wp_enqueue_style( 'cnw', plugin_dir_url( __FILE__ ) . 'cnw.css' );
}

add_action( 'admin_enqueue_scripts', 'cnw_enqueue_scripts' );

