<?php
/**
 * Settings 'Developer' Tab
 * Section 'Meta'
 */

?>
<h3><?php printf( __( '%1s Meta', 'wpp' ), WPP_F::property_label() ); ?></h3>
<p><?php _e( 'Meta is used for descriptions,  on the back-end  meta fields will be displayed as textareas.  On the front-end they will be displayed as individual sections.', 'wpp' ) ?></p>

<table id="wpp_inquiry_meta_fields" class="ud_ui_dynamic_table widefat">
  <thead>
  <tr>
    <th class='wpp_draggable_handle'>&nbsp;</th>
    <th class='wpp_attribute_name_col'><?php _e( 'Attribute Name', 'wpp' ) ?></th>
    <th class='wpp_attribute_slug_col'><?php _e( 'Attribute Slug', 'wpp' ) ?></th>
    <th class='wpp_settings_col'><?php _e( 'Settings', 'wpp' ) ?></th>
    <th class='wpp_delete_col'>&nbsp;</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach( $wp_properties[ 'property_meta' ] as $slug => $label ): ?>

    <tr class="wpp_dynamic_table_row" slug="<?php echo $slug; ?>" new_row='false'>
      <th class='wpp_draggable_handle'>&nbsp;</th>
      <td>
        <ul>
          <li>
            <input class="slug_setter" type="text" name="wpp_settings[property_meta][<?php echo $slug; ?>]" value="<?php echo $label; ?>"/>
          </li>
        </ul>
      <td>
        <ul>
          <li>
            <input type="text" class="slug" readonly='readonly' value="<?php echo $slug; ?>"/>
          </li>
        </ul>
      </td>
      <td>
        <ul>
          </li>
          <input <?php echo ( isset( $wp_properties[ 'hidden_frontend_attributes' ] ) && in_array( $slug, (array)$wp_properties[ 'hidden_frontend_attributes' ] ) ) ? "CHECKED" : ""; ?> type="checkbox" class="slug" name="wpp_settings[hidden_frontend_attributes][]" value="<?php echo $slug; ?>"/>
          <label><?php _e( 'Show in Admin Only', 'wpp' ); ?></label>
          </li>
        </ul>
      </td>

      <td>
        <span class="wpp_delete_row wpp_link"><?php _e( 'Delete Meta Attribute', 'wpp' ) ?></span>
      </td>
    </tr>

  <?php endforeach; ?>
  </tbody>

  <tfoot>
  <tr>
    <td colspan='4'>
      <input type="button" class="wpp_add_row button-secondary" value="<?php _e( 'Add Row', 'wpp' ) ?>"/>
    </td>
  </tr>
  </tfoot>

</table>