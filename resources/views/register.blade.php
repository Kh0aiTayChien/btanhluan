<div class="modal fade" id="register">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content form-wrapper">
            <div class="close-box" data-dismiss="modal">
                <i class="fa fa-times fa-2x"></i>
            </div>
            <div class="container-fluid mt-5">
                <form action="{{route('register')}}" method="post" id="RegisterationForm">
                    @csrf
                    <div class="form-group text-center pb-2">
                        <h4>Registration Form</h4>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Jhon Doe" required>
                        </div>
                        <div class="form-group col" style="position:relative;">
                            <label for='photo_upload' style="display:block">Profile Picture</label>
                            <button type="button" class="btn btn-dark form-control" onclick="document.getElementById('photo_upload').click()" id="photo_btn">Select Image</button>
                            <input type="file" name="photo" id="photo_upload" accept="image/*" style="display:none;" required>
                        </div>
                    </div>
                    <div class="form-group" style="position:relative;">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control mb-1" placeholder="jhonedoe@gmail.com" required>
                        <a href="#" data-toggle="modal" data-target="#login" style="display:none; position: absolute; right: 0; font-size: 12px;">That's you? Login</a>

                    </div>
                    <div class="form-row mb-1">
                        <div class="form-group col">
                            <label for="password">Password</label>
                            <input type="password"  id="password" class="form-control" placeholder="*******************" required>

                        </div>
                        <div class="form-group col">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" class="form-control" name="password" placeholder="*******************" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-info form-control"  data-dismiss="modal" id="register"  >Register</button>
                    </div>
                </form>
                <script type="text/javascript">
                    $(document).ready(function(){

                        $("button").click(function(){
                            $("form").submit();
                        });

                    });
                </script>
            </div>
        </div>
    </div>
</div>
