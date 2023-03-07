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
                            <form class="form-horizontal" action="campaigns/campaign_approval_save" method="post" enctype="multipart/form-data">
                               
                                <input name="campaign_id" type="hidden" value="<?php echo $campaign_id ?>" />
                                <br />
                               
                               
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-8">Approval Status</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('approval_status'); ?></span>
                                        <input name="approval_status" value="2" type="radio" <?php echo (!empty($query->approval_status)) ? 'checked' : ''; ?> />
                                        <span class="label label-success">Approve</span>
                                        &nbsp; &nbsp; &nbsp;&nbsp;
                                        <input name="approval_status" value="0" type="radio" <?php echo (empty($query->approval_status)) ? 'checked' : ''; ?> />
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
            <h3>Campaign Details</h3><br>
            <?php $admin = $this->db->where('user_id',$campaign->admin_id)->get('admin_users')->row(); ?>
            <p><b>Created By: </b> <?php echo !empty($campaign->customer_id) ? $this->db->where('customer_id',$campaign->customer_id)->get('customers')->row()->full_name :  $admin->first_name.' ' .$admin->last_name; ?></p>
            <p><b>Created On: </b> <?php echo $campaign->created_from == 0 ? 'Backend' :  'Frontend'; ?></p>
            <p><b>Title : </b> <?php echo $campaign->title; ?></p>
            <p><b>Short Description : </b> <?php echo $campaign->short_desc; ?></p>
            <p><b>Campaign Description : </b> <?php echo $campaign->campaign_desc; ?></p>
            <p><b>Summary : </b> <?php echo $campaign->summary; ?></p>
            <p><b>Goal Amount : </b> <?php echo $campaign->goal_amount; ?></p>
            <p><b>Created Date : </b> <?php echo $campaign->created_date; ?></p>
            <p><b>Banner Thumbnail Image : </b> <img src="<?php echo CAMPAIGN_BANNER_PATH.$campaign->banner; ?>" width="250px">
            <p><b>Banner Image : </b> <img src="<?php echo CAMPAIGN_BANNER_PATH.$campaign->banner_image; ?>" width="250px">
        </div>
    </div>
</div>

<div class="container card bg-white shadow px-4 py-5">
    <div class="row">
        <div class="col-sm-12">
            <h3>Comments </h3><br>
            <?php empty($comments) ? '<h6 class="text-danger">No Comments</h6>' : ''; ?>
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