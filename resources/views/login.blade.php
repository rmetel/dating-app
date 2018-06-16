@extends('master')

@section('content')
    <section class="page-sign-in mb10">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-6 col-md-push-6">
                    <div class="sign-in-area">
                        <h3 class="title-small br-bottom">Create an account</h3>
                        <p class="info">Do you already have an account? &nbsp; <a href="page_sign_in.html" class="xs-block">Sign In</a></p>
                        <h3 class="error hidden" style="color: #c75c5c">Diese Email ist bereits registriert!</h3>
                        <form class="form" action="/login" method="post">
                            @csrf
                            <label><input name="user_name" required="" class="form-control" placeholder=" Full Name *" type="text"></label>
                            <label><input name="user_email" required="" class="form-control" placeholder=" Email *" type="email"></label>
                            <label><input name="password" required="" class="form-control" placeholder=" Password *" type="password"></label>
                            <label><input name="password2" required="" class="form-control" placeholder=" Confirm password *" type="password"></label>
                            <label><input name="user_address" class="form-control" placeholder=" Address" type="text"></label>
                            <label>
                                <!--<select class="form-control">
                                    <option value="">United States</option>
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire">and so on...</option>
                                </select>-->
                            </label>
                            <label>
                                <input name="terms" value="ok" type="checkbox"> I agree to the <a href="#">Terms and Condititions</a> and <a href="#">Privacy Policy</a>
                            </label>
                            <div>
                                <button type="submit" class="btn btn-d">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-md-pull-6">
                    <div class="info-area">
                        <div class="box-services-a">
                            <h3 class="title-small"><i class="fa icon_tools fa-bg"></i> Fully customizable <a href="#" class="link-read-more">read more</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maiores repudiandae, accusantium reiciendis!</p>
                        </div>
                        <div class="mb50"></div>
                        <div class="box-services-a">
                            <h3 class="title-small"><i class="fa icon_lightbulb_alt fa-bg"></i> Easy to use <a href="#" class="link-read-more">read more</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maiores repudiandae, accusantium reiciendis!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <script>
        $('[type=submit]').on('click', function(e){
            e.preventDefault();

            $.ajax({
                'url': '/api/users/by/email',
                'type': 'post',
                'data': {
                    'email': $('[name="user_email"]').val(),
                    '_token': $('[name="_token"]').val()
                },
                success: function(data){
                    var response = JSON.parse(data);
                    if(response.userExists) {
                        $('.info').addClass('hidden');
                        $('.error').removeClass('hidden');
                        $('[name=user_email]').css('border', '2px solid #c75c5c');
                    } else {
                        $(e.target).closest('form').submit();
                    }
                },
                error: function(error){
                    console.log(error.statusText);
                }
            });
        });
    </script>
@stop