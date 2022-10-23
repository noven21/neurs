$(function () {
	var currentDate; // Holds the day clicked when adding a new event
	var currentEvent; // Holds the event object when editing an event

	var base_url = "http://localhost/NEURS/index.php"; // Here i define the base_url

	// Fullcalendar
	$("#calendar").fullCalendar({
		header: {
			left: "prev",
			center: "title",
			right: "next",
		},
		// Get all events stored in database
		eventLimit: true, // allow "more" link when too many events
		events: base_url + "/calendar/getEvents",
		selectable: false,
		selectHelper: false,
		editable: false, // Make the event resizable true

		select: function (dateStart, dateEnd) {
			$("#start").val(moment(dateStart).format("YYYY-MM-DD HH:mm:ss"));
			$("#end").val(moment(dateEnd).format("YYYY-MM-DD HH:mm:ss"));
			// Open modal to add event
			modal({
				// Available buttons when adding
				buttons: {
					add: {
						id: "add-event", // Buttons id
						css: "btn-success", // Buttons class
						label: "Add", // Buttons label
					},
				},
				title: "Add Event", // Modal title
			});
		},

		eventRender: function (event, element) {
			var t1 = event.start;
			var t2 = event.end;
			var fdate = t1.format("h:mm a");

			var name = event.FullName;

			element.find(".fc-title").append(fdate + " - " + event.room);
			element.find(".fc-time").hide();
		},

		eventMouseout: function (calEvent, jsEvent) {
			$(this).css("z-index", 8);
			$(".event-tooltip").remove();
		},
		// Handle Existing Event Click
		eventClick: function (calEvent, jsEvent, view) {
			// Set currentEvent variable according to the event clicked in the calendar
			currentEvent = calEvent;

			// Open modal to edit or delete event
			modal({
				// Available buttons when editing
				buttons: {},
				title: "View Reservation",
				event: calEvent,
			});
		},
	});

	// Prepares the modal window according to data passed
	function modal(data) {
		// Set modal title
		$(".modal-title").html(data.title);
		// Clear buttons except Cancel
		$('.modal-footer button:not(".btn-default")').remove();
		// Set input values
		$("#timestart").val(data.event ? data.event.start.format("h:mm a") : "");
		$("#timeend").val(data.event ? data.event.end.format("h:mm a") : "");
		$("#instructor").val(data.event ? data.event.Instructor : "");
		$("#department").val(data.event ? data.event.collegeDepartment : "");
		$("#room").val(data.event ? data.event.room : "");
		$("#item").val(data.event ? data.event.item : "");
		// $('#fname').val(data.event ? data.event.fname : '');
		// Create Butttons
		$.each(data.buttons, function (index, button) {
			$(".modal-footer").prepend(
				'<button type="button" id="' +
					button.id +
					'" class="btn ' +
					button.css +
					'">' +
					button.label +
					"</button>"
			);
		});
		//Show Modal
		$(".modal").modal("show");
	}

	// Dead Basic Validation For Inputs
	function validator(elements) {
		var errors = 0;
		$.each(elements, function (index, element) {
			if ($.trim($("#" + element).val()) == "") errors++;
		});
		if (errors) {
			$(".error").html("Please fill up");
			return false;
		}
		return true;
	}
});
