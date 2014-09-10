(function($) {
Drupal.behaviors.kindisch = {
  attach: function (context, settings) {
    // add Filter toggle button to exposed forms in freizeittipps, wanderungen, kalender

    if (context == document ) {

       // ******** Freizeittipps ********
       var button_html = "<div class='filter-toggle-button'>Beiträge filtern</div>";
       // add toggle button
       var form;
       form = $("#views-exposed-form-wandern-wandern .views-exposed-form, #views-exposed-form-freizeittipps-freizeittipps .views-exposed-form, #views-exposed-form-kalender-page .views-exposed-form");
       
       form.parent().prepend(button_html);
       
       // hide the filter form
       form.hide();
       
       // now add toggle behaviour to this button for the following form
       $(".filter-toggle-button").click( function() {
          form.slideToggle("fast");
       });
    }
  }/*,
  columnFormat : {
      week: "'<div data-date=\'yyyy-MM-dd\'>'ddd dd/MM'</div>'" // add a data-date attribute to the day header in week view
  },
  viewDisplay: function(view) {
      if (view.name == 'month') {
	  // a click on the day number should switch the calendar to week view
	  var $headers = $('.fc-day-number');
	  $headers.each(function() {
	      var date = $(this).parent().parent().attr('data-date');
	      $(this).attr(
		  'onmousedown',
		  '$(\'#agenda\').fullCalendar(\'changeView\', \'agendaWeek\').fullCalendar(\'gotoDate\', new Date(\''+ date +'\'))'
	      );
	  });
	  $headers.css({'cursor':'pointer', 'width':'100%', 'text-align':'right', 'border-bottom':'1px dotted #ddd'} );
      }
      if (view.name == 'agendaWeek') {
	  // a click on the day number should switch the calendar to day view
	  var $headers = $('.fc-widget-header[class*=fc-col]');
	  $headers.click(function() {
	      var date = new Date($(this).children().first().attr('data-date'));
	      $('#agenda').fullCalendar('changeView', 'agendaDay').fullCalendar('gotoDate', date);
	  });
	  $headers.css({'cursor':'pointer'});
      }
  }*/
};
})(jQuery);   
