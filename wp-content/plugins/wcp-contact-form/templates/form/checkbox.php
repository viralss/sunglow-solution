<?php
$id = !empty($params['id']) ? $params['id'] : NULL;
$form = !empty($params['form']) ? $params['form'] : NULL;
$key = !empty($params['key']) ? $params['key'] : NULL;
$field = !empty($params['field']) ? $params['field'] : NULL;
$formSettings = !empty($params['formSettings']) ? $params['formSettings'] : NULL;
$formData = !empty($params['formData']) ? $params['formData'] : NULL;

$atts = !empty($field['atts']) ? $field['atts'] : NULL;
if (!empty($atts) && is_array($atts)) {
    $atts_s = '';
    foreach ($atts as $k => $value) {
        $atts_s .= $k . '="' . $value . '"';
    }
    $atts = $atts_s;
}
if (!empty($key)) :
?>
    <div class="scfp-form-row scfp-form-row-checkbox">
        <input <?php echo $atts;?> type="checkbox" id="scfp-<?php echo $key; ?>" name="scfp-<?php echo $key; ?>" <?php if ( !empty( $field['required'] ) && !empty($formSettings['html5_enabled']) ) : ?> required <?php endif;?> <?php checked( !empty($formData[$key]) );?>>
        <label class="scfp-form-label" for="scfp-<?php echo $key; ?>"><?php echo $field['name'];?><?php if ( !empty( $field['required'] ) ) : ?> <span class="scfp-form-field-required">*</span><?php endif;?></label>
    </div>
<?php 
endif;
