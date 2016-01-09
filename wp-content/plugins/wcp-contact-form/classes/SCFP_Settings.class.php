<?php
use Webcodin\WCPContactForm\Core\Agp_SettingsAbstract;

class SCFP_Settings extends Agp_SettingsAbstract {
    
    /**
     * The single instance of the class 
     * 
     * @var object 
     */
    protected static $_instance = null;    

    /**
     * Parent Module
     * 
     * @var Agp_Module
     */
    protected static $_parentModule;
    
	/**
	 * Main Instance
	 *
     * @return object
	 */
	public static function instance($parentModule = NULL) {
		if ( is_null( self::$_instance ) ) {
            self::$_parentModule = $parentModule;            
			self::$_instance = new self();
		}
		return self::$_instance;
	}    
    
	/**
	 * Cloning is forbidden.
	 */
	public function __clone() {
	}

	/**
	 * Unserializing instances of this class is forbidden.
	 */
	public function __wakeup() {
    }        
    
    /**
     * Constructor 
     * 
     * @param Agp_Module $parentModule
     */
    public function __construct() {
        
        $config = include ($this->getParentModule()->getBaseDir() . '/config/config.php');        
        parent::__construct($config);
        
        add_action('admin_menu', array($this, 'adminMenu'));                        
    }
    
    public static function getParentModule() {
       
        return self::$_parentModule;
    }
    
    public function applyUpdateChanges() {
        // 2.1.0
        $form_settings = get_option('scfp_form_settings') ? get_option('scfp_form_settings') : array();
        $style_settings = get_option('scfp_style_settings') ? get_option('scfp_style_settings') : array();
        
        if (!empty($form_settings) && empty($style_settings)) {
            
            $style_settings = $this->getStyleDefaults();            
            
            if (isset($form_settings['button_color'])) {
                $style_settings['button_color'] = $form_settings['button_color'];
                unset($form_settings['button_color']);
            }

            if (isset($form_settings['text_color'])) {
                $style_settings['text_color'] = $form_settings['text_color'];
                unset($form_settings['text_color']);
            }        

            update_option( 'scfp_form_settings', $form_settings );
            update_option( 'scfp_style_settings', $style_settings );            
        }
        

 
    }
    
    /**
     * Sanitize settings
     * 
     * @param array $input
     * @return array
     */
    public function sanitizeSettings($input) {
        $result = array();
       
        if (!empty($input) && is_array($input)) {
            foreach ($input as $key => $value) {
                $field = $this->getFieldByName($key);
                if (!empty($field['type'])) {
                    switch ($field['type']) {
                        case 'checkbox':
                            $result[$key] = !empty($value) ? 1 : 0;    
                            break;
                        case 'text':
                        case 'colorpicker':
                            $result[$key] = stripslashes(esc_attr(trim($value)));    
                            break;                        
                        case 'textarea':                            
                            $result[$key] = $value;    
                            break;                                                
                        case 'metabox' :
                            $hasError = FALSE;
                            foreach ($value as $k => $v) {
                                if ($k == "0") {
                                    unset($value[$k]);
                                } elseif (empty($v['name'])) {
                                    if (empty($hasError)) {
                                        $hasError = TRUE;                                        
                                        add_settings_error( 'fields_main_input', 'texterror', 'Field "Name" in "Fields Settings" section is mandatory', 'error' );                                        
                                    }
                                } 
                            }
                            $result[$key] = $value;                            
                            break;                                                
                        default:
                            $result[$key] = $value;
                            break;
                    }
                }
            }            
        }
        
        return apply_filters( 'scfp_sanitize_settings', $result, self::$_parentModule);
    }    

    public static function renderSettingsPage() {
        echo self::getParentModule()->getTemplate('admin/options/layout', self::instance());
    }    
    
    public static function getPagesFieldSet() {
        $result = array('' => '');        
        $pages = get_pages();
        if (!empty($pages) and is_array($pages)) {
            foreach ($pages as $page) {
                $result[$page->ID] = $page->post_title;
            }
        }
        
        return apply_filters( 'scfp_get_fieldset_pages', $result, self::$_parentModule);
    }        
    
    public static function getEmailsFieldSet() {
        $result = array('' => '');
        $items = SCFP()->getSettings()->getFieldsSettings();
        if (!empty($items) && is_array($items)) {
            foreach( $items as $key => $field ) {
                if (!empty($field['visibility']) && !empty($field['field_type']) && $field['field_type'] == 'email' ) {
                    $result[$key] = $field['name'];    
                }
            }
        }
        
        return apply_filters( 'scfp_get_fieldset_emails', $result, self::$_parentModule);
    }            
    
    public static function getNamesFieldSet() {
        $result = array('' => '');
        $items = SCFP()->getSettings()->getFieldsSettings();
        if (!empty($items) && is_array($items)) {
            foreach( $items as $key => $field ) {
                if (!empty($field['visibility']) && !empty($field['field_type']) && $field['field_type'] == 'text' ) {
                    $result[$key] = $field['name'];    
                }
            }
        }
        
        return apply_filters( 'scfp_get_fieldset_name', $result, self::$_parentModule);
    }                
    
    public function adminMenu () {
        parent::adminMenu();
    }

    
    public function getConfirmationConfig () {
        return apply_filters( 'scfp_get_confirmation_config', $this->objectToArray($this->getConfig()->admin->options->fields->scfp_error_settings->fields->submit_confirmation), self::$_parentModule);
    }

    public function getConfirmationDefaults () {
        return apply_filters( 'scfp_get_confirmation_defaults', $this->getConfig()->admin->options->fields->scfp_error_settings->fields->submit_confirmation->default, self::$_parentModule);        
    }        
    
    public function getConfirmationSettings () {
        $options = get_option('scfp_error_settings');
        return apply_filters( 'scfp_get_confirmation_settings', !empty($options['submit_confirmation']) ? $options['submit_confirmation'] : $this->getConfirmationDefaults(), self::$_parentModule);
    }                
    
    
    public function getErrorsConfig () {
        return apply_filters( 'scfp_get_errors_config', $this->objectToArray($this->getConfig()->form->errors), self::$_parentModule);                        
    }

    public function getErrorsDefaults () {
        $result = array();
        foreach ($this->getConfig()->form->errors as $key => $value) {
            $result[$key] = $value->default;
        }
        return apply_filters( 'scfp_get_errors_defaults', $result, self::$_parentModule);                        
    }        
    
    public function getErrorsSettings () {
        $options = get_option('scfp_error_settings');
        if (!empty($options['error_name']) && empty($options['errors'])) {
            $options['errors'] = $options['error_name'];
        }

        if (!empty($options)) {
            foreach ($this->getErrorsDefaults() as $k => $v) {
                if (!array_key_exists($k, $options['errors'])) {
                    $options['errors'][$k] = $v; 
                }
            }            
        }
        
        return apply_filters( 'scfp_get_errors_settings', !empty($options) ? $options : array( 'errors' => $this->getErrorsDefaults()), self::$_parentModule);                
    }    
    
    public function getFormConfig () {
        return apply_filters( 'scfp_get_form_config', $this->objectToArray($this->getConfig()->admin->options->fields->scfp_form_settings->fields), self::$_parentModule);        
    }

    public function getFormDefaults () {
        $result = array();
        foreach ($this->getConfig()->admin->options->fields->scfp_form_settings->fields as $key => $value) {
            if ($key == 'field_settings') {
                $result[$key] = $this->getFieldsDefaults();
            } else {
                $result[$key] = $value->default;    
            }
            
        }
        return apply_filters( 'scfp_get_form_defaults', $result, self::$_parentModule);        
    }        
    
    public function getFormSettings () {
        $options = get_option('scfp_form_settings');
        return apply_filters( 'scfp_get_form_settings', !empty($options) ? $options : $this->getFormDefaults(), self::$_parentModule);        
    }        
    
    public function getStyleConfig () {
        return apply_filters( 'scfp_get_style_config', $this->objectToArray($this->getConfig()->admin->options->fields->scfp_style_settings->fields), self::$_parentModule);        
    }

    public function getStyleDefaults () {
        $result = array();
        foreach ($this->getConfig()->admin->options->fields->scfp_style_settings->fields as $key => $value) {
            $result[$key] = $value->default;
        }
        return apply_filters( 'scfp_get_style_defaults', $result, self::$_parentModule);
    }        
    
    public function getStyleSettings () {
        $options = get_option('scfp_style_settings');
        return apply_filters( 'scfp_get_style_settings', !empty($options) ? $options : $this->getStyleDefaults(), self::$_parentModule);
    }            
    
    public function getNotificationConfig () {
        return apply_filters( 'scfp_get_notification_config', $this->objectToArray($this->getConfig()->admin->options->fields->scfp_notification_settings->fields), self::$_parentModule);
    }
    
    public function getNotificationDefaults () {
        $result = array();
        foreach ($this->getConfig()->admin->options->fields->scfp_notification_settings->fields as $key => $value) {
            $result[$key] = $value->default;    
        }
        return apply_filters( 'scfp_get_notification_defaults', $result, self::$_parentModule);
    }            
    
    public function getNotificationSettings () {
        $options = get_option('scfp_notification_settings');
        return apply_filters( 'scfp_get_notification_settings', !empty($options) ? $options : $this->getNotificationDefaults()  , self::$_parentModule);
    }            
    
    public function getRecaptchaConfig () {
        return apply_filters( 'scfp_get_recaptcha_config', $this->objectToArray($this->getConfig()->admin->options->fields->scfp_recaptcha_settings->fields) , self::$_parentModule);
    }
    
    public function getRecaptchaDefaults () {
        $result = array();
        foreach ($this->getConfig()->admin->options->fields->scfp_recaptcha_settings->fields as $key => $value) {
            $result[$key] = $value->default;    
        }
        return apply_filters( 'scfp_get_recaptcha_defaults', $result , self::$_parentModule);
    }            
    
    public function getRecaptchaSettings () {
        $options = get_option('scfp_recaptcha_settings');
        return apply_filters( 'scfp_get_recaptcha_settings', !empty($options) ? $options : $this->getRecaptchaDefaults() , self::$_parentModule);
    } 
    
    public function getFieldsConfig () {
        return apply_filters( 'scfp_get_fields_config', $this->objectToArray($this->getConfig()->form->fields) , self::$_parentModule);
    }    
    

    public function getFieldsDefaults () {
        $result = array();
        foreach ($this->getConfig()->form->fields as $key => $value) {
            $result[$key] = $this->objectToArray($value->default);
        }
        return apply_filters( 'scfp_get_fields_defaults', $result , self::$_parentModule);
    }        
    
    public function getFieldsSettings () {
        $defaults = $this->getFieldsDefaults();
        $types = $this->getFieldsTypes();

        $data = SCFP()->getFormSettings()->getData('scfp_form_settings');        
        if (empty($data)) {
            $data = $this->getFieldsDefaults();            
        }
        
        foreach ($data as $k => $v) {
            if (array_key_exists($k, $defaults)) {
                if (!empty($defaults[$k]['visibility_readonly'])) {
                    $data[$k]['visibility'] = $defaults[$k]['visibility'];
                    $data[$k]['visibility_readonly'] = $defaults[$k]['visibility_readonly'];
                }
                if (!empty($defaults[$k]['required_readonly'])) {
                    $data[$k]['required'] = $defaults[$k]['required'];
                    $data[$k]['required_readonly'] = $defaults[$k]['required_readonly'];
                }                
                if (!empty($defaults[$k]['no_email'])) {
                    $data[$k]['no_email'] = $defaults[$k]['no_email'];
                }                                
                if (!empty($defaults[$k]['no_csv'])) {
                    $data[$k]['no_csv'] = $defaults[$k]['no_csv'];
                }               
                
                
                
                if (!isset($data[$k]['field_type'])) {
                    $data[$k]['field_type'] = $types[$k];  
                }
            }
        }
        
        return apply_filters( 'scfp_get_fields_settings', apply_filters( 'wcp_contact_form_get_fields_settings', $data ), self::$_parentModule) ;
    }        
    
    public function getUserParamsConfig () {
        return apply_filters( 'scfp_get_user_params_config', $this->objectToArray($this->getConfig()->form->userParams) , self::$_parentModule); 
    }
    
    public function getFieldsTypes () {
        $result = array();
        foreach ($this->getConfig()->form->fields as $key => $value) {
            $result[$key] = $value->type;
        }
        return apply_filters( 'scfp_get_fields_types', $result , self::$_parentModule);
    }        


}

