
    $(document).ready(function () {
        $("#salesRecordIndex").validate({
            rules: {
                memberID: {
                    required: true,
                    number: true,
                    minlength: 1

                },

                numSold: {
                    required: true,
                    number: true,
                    minlength: 1

                }

            },
            messages: {
                memberID: {
                    required: "Please enter a valid member ID",
                    number: "Please enter digits only",
                    minlength: "member ID shoud have atleast 1 character"

                },
                age: {
                    required: "Please enter number of unique items sold",
                    number: "Please enter digits only",
                    minlength: "number of unique items sold should have atleast 1 character"

                }

            }

        });

    });
