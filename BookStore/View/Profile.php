
<div class="container">
    <div class="row">
        <div class="col-md-3 ">
            <div class="list-group ">
                <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action">Used</a>
                <a href="#" class="list-group-item list-group-item-action">Enquiry</a>
                <a href="#" class="list-group-item list-group-item-action">Dealer</a>
                <a href="#" class="list-group-item list-group-item-action">Media</a>
                <a href="#" class="list-group-item list-group-item-action">Post</a>
                <a href="#" class="list-group-item list-group-item-action">Category</a>
                <a href="#" class="list-group-item list-group-item-action">New</a>
                <a href="#" class="list-group-item list-group-item-action">Comments</a>
                <a href="#" class="list-group-item list-group-item-action">Settings</a>
            </div>
        </div>
        <div class="col-md-9">
            <div>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Your Profile</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($accProfile)){ ?>
                            <form method="post" action="Account/updateProfile">
                                <input type="number" value="<?php echo $accProfile->id?>" name="id" hidden>
                                <div class="form-group row">
                                    <label for="username" class="col-4 col-form-label">User Name*</label>
                                    <div class="col-8">
                                        <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text"
                                            value="<?php echo $accProfile->username?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fullname" class="col-4 col-form-label">Full Name*</label>
                                    <div class="col-8">
                                        <input id="fullname" name="name" placeholder="full Name" class="form-control here" type="text"
                                               value="<?php echo $accProfile->name?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email*</label>
                                    <div class="col-8">
                                        <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text"
                                               value="<?php echo $accProfile->email?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-4 col-form-label">Address*</label>
                                    <div class="col-8">
                                        <textarea id="address" name="address" cols="40" rows="4" class="form-control"
                                            ><?php echo $accProfile->address?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phoneNumber" class="col-4 col-form-label">Phone number*</label>
                                    <div class="col-8">
                                        <input id="phoneNumber" name="phoneNumber" placeholder="Email" class="form-control here" required="required" type="text"
                                               value="<?php echo $accProfile->phoneNumber?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="newpass" class="col-4 col-form-label">New Password</label>
                                    <div class="col-8">
                                        <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-outline-primary">Update My Profile</button>
                                    </div>
                                </div>
                            </form>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
