(function($) {
  Drupal.behaviors.kindisch = {
    attach: function(context, settings) {
      $('#edit-field-datum-uhrzeit-und-0-value-datepicker-popup-0', context).change(function() {
        $('#edit-field-datum-uhrzeit-und-0-value2-datepicker-popup-0', context).val($(this).val());
      });

      $('#edit-field-datum-uhrzeit-und-0-value-timeEntry-popup-1', context).change(function() {
        $('#edit-field-datum-uhrzeit-und-0-value2-timeEntry-popup-1', context).val($(this).val());
      });
    }
  }
})(jQuery); 
