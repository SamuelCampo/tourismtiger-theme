<?php 
/**
 * Gravity Forms API
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

function the_gform( $form = array(), $params = array() ) {
    if ( ! $form || ! is_array( $params ) )
        return null;

    $form = GFAPI::get_form($form);

    if ( count( $params ) === 0 ) 
        $params = array(
            'title'       => true,
            'description' => true
        );

    // Form wrapper
    $form_id      = "gform-{$form['id']}";
    $form_class   = array();
    $form_class[] = "gform";
    $form_class[] = "{$form_id}";
    $form_class[] = $form['labelPlacement'] ? "label_{$form['labelPlacement']}" : '';
    $form_class   = apply_filters( 'gform_classes', $form_class );
    $form_class   = generate_classlist( $form_class );

    $form_attr  = "id='{$form_id}' class='{$form_class}'";
    ?>

    <form <?=$form_attr;?>>
        
        <div class="gform-heading wysiwyg">
            <?php 
            // Title
            if ( $params['title'] && $form['title'] ) 
                echo "<h4 class='form-heading__title'>{$form['title']}</h4>";
            // Description
            if ( $params['description'] && $form['description'] ) 
                echo "<h4 class='form-heading__description'>{$form['description']}</h4>";
            ?>
        </div>

        <div class="gform-body">
            <ul class="gform-body__fields" data-page="1">
                
                <?php
                /**
                 * Loop and handle each field
                 */
                foreach ( $form['fields'] as $field ) :
                    $attrs            = array();

                    // Classes
                    $classes          = array();
                    $classes[]        = 'gform-field';
                    $classes[]        = $field['isRequired'] ? 'gform-required' : '';
                    $classes[]        = $field['type'] ? "type_{$field['type']}" : '';
                    $classes[]        = $field['cssClass'] ? $field['cssClass'] : '';
                    $classes          = generate_classlist( $classes );
                    $attrs[]          = $classes ? "class='{$classes}'" : '';

                    // Common
                    $attrs[]          = $field['inputMask'] && $field['inputMaskValue'] ? "data-mask='{$field['inputMaskValue']}'" : '';
                    $attrs[]          = $field['conditionalLogic'] ? 'data-conditional="1"' : '';
                    $attrs[]          = $field['label'] ? "data-label='{$field['label']}'" : '';
                    $attrs[]          = $field['id'] ? "data-id='{$field['id']}'" : '';

                    // Conditional rules
                    $field['conditional'] = '';
                    if ( $field['conditionalLogic'] ) :
                        $conditional = $field['conditionalLogic'];

                        // Set type to know who to handle this field
                        $attrs[] = 'data-conditional-type="' . $conditional['actionType'] . '"';

                        // Loop rules
                        foreach ( $conditional['rules'] as $rule ) :
                            $attrs[] = 'data-conditional-id="' . $rule['fieldId'] . '"';
                            $attrs[] = 'data-conditional-operator="' . $rule['operator'] . '"';
                            $attrs[] = 'data-conditional-value="' . $rule['value'] . '"';
                        endforeach;
                    endif;

                    // Generate attributes to <li>
                    $attrs            = generate_classlist( $attrs );

                    // that global variable used 
                    //in fields views templates below
                    $GLOBALS['field'] = $field;
                    ?>
                        
                    <li <?=$attrs;?>>
                        <label class="gform-field__label"><?=$field['label'];?></label>
                        <div class="gform-field__container">
                            <?php
                            /**
                             * Include view according to field type
                             */
                            switch ( $field['type'] ) :

                                // Fields which have subfields: 
                                // inputs, selectors
                                case 'name':
                                case 'address':
                                case 'time':
                                case 'email':
                                    get_template_part( 'template-parts/gform/field', 'multiplied' );
                                    break;

                                // Teatarea input field
                                case 'textarea':
                                    get_template_part( 'template-parts/gform/field', 'textarea' );
                                    break;

                                // Select fields
                                case 'select':
                                case 'multiselect':
                                    get_template_part( 'template-parts/gform/field', 'select' );
                                    break;

                                case 'gf_no_captcha_recaptcha':
                                    echo get_recaptcha_html();
                                    break;

                                // choices
                                case 'radio':
                                case 'checkbox':
                                    get_template_part( 'template-parts/gform/field', 'choices' );
                                    break;

                                // Page divider
                                case 'page':
                                    get_template_part( 'template-parts/gform/field', 'page' );
                                    break;

                                // Date field
                                case 'date':
                                    get_template_part( 'template-parts/gform/field', 'date' );
                                    break;

                                // Date field
                                case 'fileupload':
                                    get_template_part( 'template-parts/gform/field', 'fileupload' );
                                    break;

                                // Converts to input[type="text"] and sets values
                                default:
                                    get_template_part( 'template-parts/gform/field' );
                                    break;
                            endswitch;
                            ?>
                        </div>
                    </li>

                    <?php
                endforeach;
                ?>

            </ul>
        </div>

        <div class="gform-footer">
            <div class="gform-footer__controll">
                <button type="submit" class="button">Send form</button>
            </div>
        </div>

    </form>
    
    <?php
}

