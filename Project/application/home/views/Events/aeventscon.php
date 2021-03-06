    <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Event Data Table</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Add Events</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form action="<?php echo base_url('index.php/welcome/create_eve');?>" method="post" role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Event Name</label>
                                            <input type="text" name="eventname" class="form-control" placeholder=" Enter Name"/>
                                        </div>
                                        
                                         <div class="form-group">
                                         <div class="input-group">
                                            <label>Date: YYYY-MM-DD</label>
                                            <input type="text" name="eventdate" class="form-control" data-inputmask="'alias': 'yyyy-dd-mm'" data-mask/>
                                        </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                    
                                       <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                            <label>Time:</label>
                                            <div class="input-group">                                            
                                                <input type="text" name="eventtime" class="form-control timepicker"/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                       </div>
                                      
                                        <div class="form-group">
                                            <label>Location</label>
                                            <textarea name="eventlocation" class="form-control" rows="3" placeholder="Enter Address"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="eventdesc" class="form-control" rows="3" placeholder="Enter Address"></textarea>
                                        </div>
                                        <div class="box-footer">
                                          <?php echo validation_errors();?>       
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/welcome/vdeve');?>'">Back</button>
                                        </div>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        
                        
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->