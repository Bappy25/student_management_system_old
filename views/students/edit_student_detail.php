<section class="content">
    <div class="container-fluid">

        <div class="block-header">
             <ol class="breadcrumb breadcrumb-col-teal">
                <li><a href="?controller=auth&action=home"><i class="material-icons">home</i> Dashboard</a></li>
                <li><i class="material-icons">school</i> Manage Students</a></li>
                <li><a href="?controller=students&action=allStudents"><i class="material-icons">list</i> All Students</a></li>
                <li><a href="?controller=students&action=showStudentProfile&uname=<?php echo $student['username']; ?>"><i class="material-icons">account_box</i> Show Student Profile</a></li>
                <li class="active"><i class="material-icons">edit</i> Edit Student Detail</li>
            </ol>
        </div>

        <!-- Create Student Profile -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                         <h2>
                            Edit Student Details for <?php echo  $student['family_name'].' '.$student['given_name']; ?>                     
                            <small>Input following initial information to create student profile</small>
                        </h2>
                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" method="post" action='?controller=students&action=updateStudentDetails'>
                            <input type="hidden" name="uname" value="<?php echo $student['username']; ?>">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="fatherName" maxlength="100" minlength="5" value="<?php echo $student['fatherName']; ?>"  autocomplete="off" required>
                                            <label class="form-label">Father's Name</label>
                                        </div>
                                        <div class="help-info">Min. 5, Max. 100 characters</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="motherName" maxlength="100" minlength="5" value="<?php echo $student['motherName']; ?>"  autocomplete="off" required>
                                            <label class="form-label" >Mother's Name</label>
                                        </div>
                                        <div class="help-info">Min. 5, Max. 100 characters</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="nationality" value="<?php echo $student['nationality']; ?>" maxlength="100" minlength="5" required>
                                            <label class="form-label">Nationality</label>
                                        </div>
                                        <div class="help-info">Min. 5, Max. 100 characters</div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" name="dob" value="<?php echo date("l d F Y", $student['dob']) ; ?>" placeholder="Date of Birth" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <select class="form-control show-tick" name="sex">
                                        <?php foreach($studentData['sexes'] as $sex){ ?>
                                                <option value="<?php echo $sex['id']; ?>" <?php if($sex['id'] == $student['sex']){ ?> selected="selected" <?php } ?>><?php echo $sex['name']; ?></option>  
                                        <?php } ?>      
                                        </select> 
                                        <div class="help-info">Select Sex</div>
                                    </div> 
                                </div>
                            </div>     
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="contact1" maxlength="11" minlength="11" value="<?php echo $student['contact1']; ?>"  autocomplete="off" required>
                                            <label class="form-label">Personal Contact</label>
                                        </div>
                                        <div class="help-info">Personal Contact has to have 11 characters</div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="contact2" maxlength="11" minlength="11" value="<?php echo $student['contact2']; ?>"  autocomplete="off" required>
                                            <label class="form-label">Guardian Contact</label>
                                        </div>
                                        <div class="help-info">Guardian Contact has to have 11 characters</div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="contact3" maxlength="11" minlength="08" value="<?php echo $student['contact3']; ?>"  autocomplete="off" required>
                                            <label class="form-label">Home Phone</label>
                                        </div>
                                        <div class="help-info">Home phone has to have minimum 08 characters</div>
                                    </div>
                                </div>
                            </div> 
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="presentAddress" maxlength="500" minlength="4" value="<?php echo $student['presentAddress']; ?>"  autocomplete="off" required>
                                            <label class="form-label">Present Address</label>
                                        </div>
                                        <div class="help-info">Present Address is where the user is currently living in</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="permanentAddress" maxlength="500" minlength="4" value="<?php echo $student['permanentAddress']; ?>"  autocomplete="off" required>
                                            <label class="form-label">Permanent Address</label>
                                        </div>
                                        <div class="help-info">Permanent Address is the address of user's origin</div>
                                    </div>
                                </div>
                            </div>                                  
                            <input class="btn btn-primary waves-effect" type="submit" name="submit" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Create Student Profile -->

    </div>
</section>