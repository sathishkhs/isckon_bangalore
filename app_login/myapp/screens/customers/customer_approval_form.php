<div class="card shadow mb-4">
    <section class="content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-10 col-sm-12 mx-auto">
                    <?php $msg = $this->session->flashdata('msg');
                    if (!empty($msg['txt'])) : ?>
                        <div class="alert alert-block alert-<?php echo $msg['type']; ?>">
                            <button type="button" class="btn defalut" data-dismiss="alert">
                                <i class="fa fa-times"></i>
                            </button>
                            <i class="<?php echo $msg['icon']; ?>"></i>
                            <?php echo $msg['txt']; ?>
                        </div>
                    <?php endif ?>
                </div>
                <div class="col-md-12">
                    <div class="box box-info p-3">
                        <div class="box-header with-border">
                            <form class="form-horizontal" action="customers/customer_approval_save" method="post" enctype="multipart/form-data">
                               
                                <input name="customer_id" type="hidden" value="<?php echo $customer_id ?>" />
                                <br />
                               
                               
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-8">Status</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('account_active_status'); ?></span>
                                        <input name="account_active_status" value="2" type="radio" <?php echo (!empty($query->account_active_status)) ? 'checked' : ''; ?> />
                                        <span class="label label-success">Approve</span>
                                        &nbsp; &nbsp; &nbsp;&nbsp;
                                        <input name="account_active_status" value="0" type="radio" <?php echo (empty($query->account_active_status)) ? 'checked' : ''; ?> />
                                        <span class="label label-danger">Reject</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-5">Comments</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('comments'); ?></span>
                                        <textarea name="comments" type="text" class="form-control " value=""><?php echo (!empty($query->comments)) ? $query->comments : ''; ?>  </textarea>
                                    </div>
                                </div>

                                <hr>
                                <div class="form-actions form-btns">
                                    <button class="btn btn-round btn-success" type="submit">
                                        <i class="fa fa-check"></i>
                                        Save
                                    </button>
                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn btn-round btn-default" type="reset">
                                        <i class="fa fa-refresh"></i>
                                        Reset
                                    </button>
                                    &nbsp; &nbsp; &nbsp;
                                    <a href="campaigns">
                                        <button class="btn btn-warning btn-round" type="button">
                                            <i class="fa fa-times"></i>
                                            Back
                                        </button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>

<div class="container card bg-white shadow px-4 py-5">
    <div class="row">
        <div class="col-sm-12">
            <h3>Comments </h3><br>
            <?php if(empty($comments)) { echo '<h6 class="text-danger">No Comments</h6>' ;} ?>
            <?php foreach($comments as $key => $comment){ ?>
                <p><b>Comment <?php echo $key+1; ?> : </b> <?php echo $comment->comments ; ?></p>

            <?php } ?>
          
        </div>
    </div>
</div>
<script>
   

    function deleteFile(src) {

        $.ajax({
            data: {
                src: src
            },
            type: "POST",
            url: "blog/delete_editor_image", // replace with your url
            cache: false,
            success: function(resp) {

                console.log(resp);
            }
        });
    }
</script>