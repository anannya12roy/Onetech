<!-- Newsletter -->

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div
                    class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                    <div class="newsletter_title_container">
                        <div class="newsletter_icon"><img src="images/send.png" alt=""></div>
                        <div class="newsletter_title"><b>Sign up for Newsletter</b></div>
                    </div>
                    <div class="newsletter_content clearfix">
                        <form>
                            <input type="email" class="newsletter_input" required="required" id="email_subscribe"
                                   placeholder="Enter your email address">
                            <button type="submit" class="newsletter_button" id="subscribe_submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    $(document).ready(function () {
        $('#subscribe_submit').click(function (e) {
            e.preventDefault();
            var email = $('#email_subscribe').val();
            if (email == '') {
                toastr.error('Please Enter Your Email');
            } else {
                $.ajax({
                    url: "{{ url('/subscribe-us') }}",
                    type: "POST",
                    data: {
                        "email": email,
                        "_token": "{{csrf_token()}}"
                    },
                    success: function ({message, status: code}, status) {
                        if (status === 'success') {
                            if (code == 202) {
                                toastr.error('You Have Already Subscribed');
                                return false;
                            }
                            $.ajax({
                                url: "{{ url('/check-subscribe-mail') }}",
                                type: "POST",
                                data: {
                                    "email": email,
                                    "_token": "{{csrf_token()}}"
                                },
                                success: function (data) {
                                    toastr.success('You Are Subscribed');
                                },
                            });
                        }
                    },
                });
            }
        });
    })
</script>
