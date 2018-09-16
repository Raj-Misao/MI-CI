<div class="container">
    <div class="col-md-6 col-md-offset-3" style="background-color:orange;"><h2 class="text-center">IMPORT EXCEL IN MYQSL</h1></div>
        <div class="col-md-6 col-md-offset-3" style="background-color:orange;">
            <?php
               echo form_open_multipart('import_data','post','class="form-horizontal"');
               
                ?>
                    <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">Upload Excel</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" id="file" name="file" accept=".xls, .xlsx">
                    </div>
                    </div>
                 
                    <div class="form-group">
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Upload</button>
                    </div>
                    </div>
                    </br>
                <?php
                echo form_close();
                
            ?>
            </br>
            </br>
            </br>
            <?php echo form_open('export_data','post','class="form-horizontal"');?>
                     <div class="col-md-offset-3 col-md-9">
                        <button id="btn_export" name="btn_export" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Export Data</button>
                    </div>
             <?php echo form_close();?>
        </div>
    </div>
</div>
</br>
