$(document).ready(function () {
    // Show the modal when the button is clicked
    $('#showFormButton').on('click', function () {
        $('#transportModal').modal('show');
    });

    // Handle form submission with AJAX
    $('#transportFormAjax').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Get the form data
        var formData = $(this).serialize();

        $.ajax({
            headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
            url: "/city-trans",
            method: "POST",
            data: formData,
            success: function (response) {
                alert('Details added successfully!');
                $('#transportModal').modal('hide'); // Hide the modal after submission
                $('#transportFormAjax')[0].reset(); // Reset the form
            },
            error: function (xhr, status, error) {
                alert('An error occurred: ' + xhr.responseText);
            }
        });
    });
});
