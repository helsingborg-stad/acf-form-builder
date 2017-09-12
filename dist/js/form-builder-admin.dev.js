var FormBuilder = FormBuilder || {};

FormBuilder = FormBuilder || {};
FormBuilder.Admin = FormBuilder.Admin || {};

FormBuilder.Admin.Conditional = (function ($) {

    function Conditional() {
        $(document).ready(function () {
        	if (pagenow == 'mod-form') {
        		this.populateSelectFields();
        		this.handleEvents();
        	}

        }.bind(this));
    }

    /**
     * Populate conditional field selectors
     * @return {void}
     */
    Conditional.prototype.populateSelectFields = function() {
        $('[data-name="conditonal_field"] select').each(function (index, element) {

        	// Check if selected value is set or exist in db
			var selected  = '',
				$selected = $(':selected', element);
			if ($selected.val()) {
				selected = $selected.val();
			} else {
				// Get selected from database
				var fieldName = $(element).attr('name');
				$.ajax({
		            url: ajaxurl,
		            type: 'post',
		            data: {
		                action    : 'get_selected_field',
		                moduleId  : modularity_current_post_id,
		                fieldName : fieldName
		            },
		            success: function(response) {
		            	if (response != 'error') {
		            		$('option[value="' + response + '"]', element).prop('selected', true);
		            	}
		            }
		        });
			}

			// Reset select options
            $('optgroup, option', element).remove();

            var options = this.getOptions();
            if (typeof options !== 'undefined' && options.length > 0) {
	            $.each(options, function(key, value) {
	            	var selectvalues = '';

	            	$.each(value.selectvalues, function(key, option) {
	            		var groubLabel 	= this.conditionalString(value.groupLabel),
	            			optionText 	= option.toLowerCase().replace(/[^A-Z0-9]+/ig, "_"),
	            			newValue 	= groubLabel + '[#]' + optionText;
	            		selectvalues += '<option value="' + newValue + '">' + option + '</option>'
		            }.bind(this));

		            var optgroup = '<optgroup label="' + value.groupLabel + '">' + selectvalues + '</optgroup>';
		            $(element).append(optgroup);

		            if (selected) {
		            	$('option[value="' + selected + '"]', element).prop('selected', true);
		            }

				}.bind(this));
	        } else {
	        	$('<p>Radio selectors is missing.</p>').insertBefore(element);
	        }

        }.bind(this));
    };

    Conditional.prototype.getOptions = function(argument) {
    	var selectOptions = [];

    	$('[data-layout="radio"]:not(.acf-clone)').each(function (index, item) {
    		var $item = $(item);
            var value = $item.find('[data-name="label"] input').val();
            var optionGroup = {
            	groupLabel : value,
            	selectvalues : []
            };

	        $('[data-key="field_58eb670d39fef"] table tbody', item).children('tr.acf-row:not(.acf-clone)').each(function (index, item) {
	            var $item = $(item);
	            var value = $item.find('[data-name="value"] input').val();
	            optionGroup.selectvalues.push(value);
	        });

	       	selectOptions.push(optionGroup);
    	});

        return selectOptions;
    };

    Conditional.prototype.conditionalString = function(string) {
    	string = string.toLowerCase();
    	string = string.replace(/[^A-Z0-9]+/ig, '_');
    	string = string.replace(/_+$/, "");

    	return string;
    };

    Conditional.prototype.handleEvents = function () {
    	$(document).on('click', '[data-name="conditional_logic"] [type="checkbox"], [data-layout="radio"] .acf-row-handle > a', function () {
        	this.populateSelectFields();
        }.bind(this));
    };

	return new Conditional();

})(jQuery);