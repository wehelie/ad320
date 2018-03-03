$(document).ready(() => {
    // hide the message for the user
    $('.message').hide();
    // listen for a keyp event when user is typing email
    $('.email').keyup(function(evt) {
        // query to be searched
        const query = $('.email').val();
        // query is set
        if ($.trim(query) !== '') {
            $.ajax({
                url: 'data.php',
                method: 'POST',
                data: {
                    search: 1,
                    q: query
                },
                success: function(data) {
                    const obj = JSON && JSON.parse(data) || $.parseJSON(data);
                    // parse the json
                    if (obj.email === query) {
                        // update all input values
                        $(".phone").val(obj.phone);
                        $(".address").val(obj.address);
                        $('.message').show();

                        // Ask user if they want to update
                        $('.message-body').html("<h1 class='title'>Would you like Update Your Information?</h1>");

                        // show modal
                        $('#update').on('click', function(evt) {
                            $('.message').hide();
                            $('#root').html("<h1 class='title'id='h1'>Your information has been updated</h1>");
                            $(".showmodal").click(function() {
                                $(".modal").addClass("is-active");
                            });

                            // hidel modal 
                            $(".modal-close").click(function() {
                                $(".modal").removeClass("is-active");
                            });

                            // prevent the form from refreshing and erasing input values
                            evt.preventDefault();
                        })
                    }
                }
            })
        }
    });
});
