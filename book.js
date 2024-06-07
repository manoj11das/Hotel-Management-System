
    $(document).ready(function() {
        // Function to show room details based on the selected room
        function showRoomDetails(room) {
            var details = "";
            switch (room) {
                case "daily":
                    details = "Daily rooms are standard rooms with basic amenities.";
                    break;
                case "deluxe":
                    details = "Deluxe rooms offer luxurious amenities and spacious accommodation.";
                    break;
                case "average":
                    details = "Average rooms provide comfortable accommodation at an affordable price.";
                    break;
                default:
                    details = "Please select a room type.";
                    break;
            }
            $('#roomDetails').html('<p>' + details + '</p>');
        }

        // Show room details on page load
        showRoomDetails($('#rooms').val());

        // Show room details on room selection change
        $('#rooms').on('change', function() {
            showRoomDetails($(this).val());
        });

        // Form submission handler
        $('#bookingForm').on('submit', function(event) {
            event.preventDefault();
            // Your form submission logic here
            // You can access form data using $(this).serialize() method
        });
    });

