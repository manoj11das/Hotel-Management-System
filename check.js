
    $(document).ready(function() {
        // Function to show room details and set path based on the selected room type
        function showRoomDetailsAndPath(roomType) {
            var roomDetails = "";
            var path = ""; // Define variable for storing the path
            switch (roomType) {
                case "daily":
                    roomDetails = "<p>Daily rooms offer standard amenities and are suitable for short stays.</p>";
                    path = "DailyRooms.php"; // Set path for daily rooms
                    break;
                case "deluxe":
                    roomDetails = "<p>Deluxe rooms offer luxurious amenities and spacious accommodation.</p>";
                    path = "pExclusive.php"; // Set path for deluxe rooms
                    break;
                case "average":
                    roomDetails = "<p>Average rooms provide comfortable accommodation at an affordable price.</p>";
                    path = "Average.php"; // Set path for average rooms
                    break;
                default:
                    roomDetails = "<p>Please select a room type.</p>";
                    break;
            }
            $('#roomDetails').html(roomDetails);
            $('#bookingForm').attr('action', path); // Set form action attribute to the selected path
        }

        // Show room details and set path on page load
        showRoomDetailsAndPath($('#rooms').val());

        // Show room details and set path on room type selection change
        $('#rooms').on('change', function() {
            showRoomDetailsAndPath($(this).val());
        });

        // Form submission handler
        $('#bookingForm').on('submit', function(event) {
            // You can handle form submission logic here
            // The form will submit to the selected path based on user's room type selection
        });
    });

